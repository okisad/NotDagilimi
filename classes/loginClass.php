<?php
require_once('dbClass.php');
require_once('userClass.php');

class login
{

    public $db_connection = null;

    public $errors = array();

    private $db = null;

    public function __construct()
    {

        $this->db = new db();
        if($this->databaseConnection()){

        }else{

        }
    }

   /* public function isLogged(){

        session_start();

        if(!isset($_SESSION['user_id'])){

            if(!$this->isSetCookie()){

                require_once('../views/loginPiece.php');

            }else{

                require_once('../views/loggedScreen.php');

            }

        }else{

            require_once('../views/loggedScreen.php');

        }

    }*/

    private function databaseConnection()
    {

        if ($this->db_connection != null) {
            return true;
        } else {

            try {
                $this->db_connection = $this->db->connect();
                return true;
            } catch (mysqli_sql_exception $e) {
                setcookie("login_error_message","Database Hatası",time()+2);
                return false;

            }


        }

    }

    private function controlFields(User &$user)
    {

        if (empty($user->getEmail()) || empty($user->getPassword1())) {
            setcookie("login_error_message","Lütfen Alanları Boş Bırakmayınız",time()+2);
            return false;
        } else {

            return true;
        }

    }

    public function login(User &$user)
    {

        echo "<script>alert('ok');</script>";

        if($this->isEnableCookie()) {

            echo "<script>alert('ok');</script>";

            if ($this->controlFields($user)) {

                echo "<script>alert('ok');</script>";

                if ($this->isLoginSuccessful($user)) {

                    return true;

                } else {

                    return false;

                }


            } else {

                return false;
            }
        }else{

            return false;

        }
    }

    public function sessionDestroy()
    {

        session_start();

        if ($this->isSetCookie()) {

            if (isset($_SESSION['user_id'])) {

                $_SESSION = array();

                if (isset($_COOKIE[session_name()])) {

                    setcookie(session_name(), '', time() - 3600);

                }

                session_destroy();

            }

            setcookie('user_id', '', time() - 3600);

            setcookie('email_address', '', time() - 3600);

            header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']).'/views/homepage.php');

            return true;

        } else {

            return false;

        }

    }

    private function isEnableCookie(){


        setcookie("test_cookie", "test", time() + 3600, '/');

        if(count($_COOKIE)>0){

            setcookie('test_cookie',null,-1);

            return true;

        } else {

            setcookie('test_cookie',null,-1);

            setcookie("login_error_message","Giriş Yapabilmek İçin Cookie Ayarlarınızı Etkinleştirmeniz Gerekmektedir",time()+2);

            return false;

        }

        setcookie('test_cookie',null,-1);

    }

    public function isSetCookie()
    {

        if (!isset($_SESSION['user_id'])) {

            if (isset($_COOKIE['user_id']) && isset($_COOKIE['email_address'])) {

                $_SESSION['user_id'] = $_COOKIE['user_id'];

                $_SESSION['email_address'] = $_COOKIE['email_address'];

                return true;

            } else {

                return false;

            }

        } else {

            return true;

        }

    }

    private function isExistEmail(User &$user){

        $email = mysqli_real_escape_string($this->db_connection,trim($user->getEmail()));

        $query = sprintf("SELECT * FROM %s WHERE %s='%s'", $this->db->tableName,$this->db->emailColumnName,$email);

        if($data = mysqli_query($this->db_connection,$query)){

            if ($row = mysqli_fetch_array($data)){

                return true;

            }else{

                setcookie("login_error_message","Email Adresi Bulunamadı",time()+2);

                return false;

            }

        }else{

            setcookie("login_error_message","Database Hatası",time()+2);

            return false;

        }

    }

    private function isLoginSuccessful(User &$user)
    {

        if($this->isExistEmail($user)) {

            $email = mysqli_real_escape_string($this->db_connection, trim($user->getEmail()));

            $password = mysqli_real_escape_string($this->db_connection, trim($user->getPassword1()));

            $controlQuery = sprintf("SELECT %s,%s,registration_date,verified FROM %s WHERE %s='%s' AND %s=SHA('%s')", "id", $this->db->emailColumnName, $this->db->tableName, $this->db->emailColumnName, $email, $this->db->passwordColumnName, $password);

            if ($data = mysqli_query($this->db_connection, $controlQuery)) {

                if ($row = mysqli_fetch_array($data)) {

                    session_start();

                    $_SESSION['user_id'] = $row['id'];

                    $_SESSION['email_address'] = $row['email_address'];

                    setcookie('user_id', $row['id'], time() + (60 * 5));

                    setcookie('email_address', $row['email_address'], time() + (60 * 5));

                    return true;

                } else {

                    setcookie("login_error_message","Hatalı Şifre Girdiniz",time()+2);

                    setcookie("login_email_data",$user->getEmail(),time()+2);

                    return false;
                }

            } else {

                setcookie("login_error_message","Database Hatası",time()+2);

                return false;

            }
        }else{

            return false;

        }
    }

}


?>