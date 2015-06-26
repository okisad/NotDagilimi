<?php
/**
 * Created by PhpStorm.
 * User: oktaysahinsadoglu
 * Date: 25.04.2015
 * Time: 16:16
 */
require_once('dbClass.php');
require_once('userClass.php');
class Registration {

    public $db_connection = null;

    public $errors = array();

    private $db = null;

    public function __construct(){

        $this->db = new db();
        $this->databaseConnection();

    }

    private function databaseConnection(){

        if($this->db_connection!=null){
            return true;
        }else{

            try{
                $this->db_connection=$this->db->connect();
                return true;
            }catch (mysqli_sql_exception $e){

                setcookie("register_error_message","Database Hatası",time()+2);
                return false;

            }


        }

    }

    public function registerNewUser(User &$user){

        if($this->controlFields($user)){

            $email = mysqli_real_escape_string($this->db_connection,trim($user->getEmail()));

            $password = mysqli_real_escape_string($this->db_connection,trim($user->getPassword1()));

            $query_add = sprintf("INSERT INTO %s (%s,%s,%s,%s) VALUES ('%s',SHA('%s'),NOW(),'0')",$this->db->tableName,$this->db->emailColumnName,$this->db->passwordColumnName, $this->db->registrationDateColumn ,$this->db->verifiedColumnName ,$email, $password);

            if(mysqli_query($this->db_connection,$query_add)){

                setcookie("register_is_successful","Kayıt Başarıyla Yaratıldı",time()+2);

                return true;

            }else{

                setcookie("register_error_message","Kayıt Başarısız",time()+2);

                return false;

            }

        }else{

            return false;

        }

    }

    private function controlFields(User &$user){

        if(empty($user->getEmail())){
            setcookie("register_error_message","Email Alanı Boş Bırakılamaz",time()+2);
            return false;
        }elseif(empty($user->getPassword1()) || empty($user->getPassword2())){
            setcookie("register_error_message","Şifre Alanı Boş Bırakılamaz",time()+2);
            setcookie("register_email_data",$user->getEmail(),time()+2);
            return false;
        }elseif(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)){
            setcookie("register_error_message","Geçersiz Bir Email Girdiniz",time()+2);
            return false;
        }elseif($user->getPassword1() !== $user->getPassword2()){
            setcookie("register_email_data",$user->getEmail(),time()+2);
            setcookie("register_error_message","Şifreler Uyuşmamaktadır",time()+2);
            return false;
        }elseif(strlen($user->getEmail())<6){
            setcookie("register_error_message","Email Çok Kısa",time()+2);
            return false;
        }elseif(strlen($user->getPassword1())<6){
            setcookie("register_email_data",$user->getEmail(),time()+2);
            setcookie("register_error_message","Şifre Çok Kısa",time()+2);
            return false;
        }elseif(strlen($user->getEmail())>65){
            setcookie("register_error_message","Email Çok Uzun",time()+2);
            return false;
        }elseif($this->existEmail($user)){
            return false;
        }else{
            return true;
        }

    }

    private function existEmail(user &$user)
    {
        $email = mysqli_real_escape_string($this->db_connection,trim($user->getEmail()));

        $query = sprintf("SELECT * FROM %s WHERE %s='%s'", $this->db->tableName,$this->db->emailColumnName,$email);

        if ($data = mysqli_query($this->db_connection, $query)) {

            if ($row = mysqli_fetch_array($data)) {

                setcookie("register_error_message","Email Daha Önceden Alınmış",time()+2);

                return true;

            } else {

                return false;
            }

        }else{

            setcookie("register_error_message","Database Hatası",time()+2);

        }

    }

}