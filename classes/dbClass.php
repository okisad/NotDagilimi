<?php
require_once('userClass.php');

$GLOBALS['error'];
class db
{

    private $connection;
    private $hostName, $userName, $password, $databaseName, $tableName, $emailColumnName,$passwordColumnName,$verifiedColumnName,$registrationDateColumn;

    public $errors = array();

    public function connect()
    {

         return mysqli_connect("$this->hostName","$this->userName","$this->password","$this->databaseName");

    }
    public function __construct(){

        $config = parse_ini_file('config.ini');

        $this->hostName = $config['hostName'];

        $this->userName = $config['userName'];

        $this->password = $config['password'];

        $this->databaseName = $config['databaseName'];

        $this->tableName = $config['tableName'];

        $this->emailColumnName = $config['emailColumnName'];

        $this->passwordColumnName = $config['passwordColumnName'];

        $this->verifiedColumnName = $config['verifiedColumnName'];

        $this->registrationDateColumn = $config['registrationDateColumn'];

    }


    public function existEmail(user &$user)
    {

        $query = sprintf("SELECT * FROM %s WHERE %s='%s'", $this->tableName,$this->emailColumnName,$user->getEmail());

        if ($data = mysqli_query($this->connection, $query)) {

            if ($row = mysqli_fetch_array($data)) {

                $this->errors[0]="This email has already been existed.";

                return false;

            } else {

                return true;
            }

        }else{

            echo "query is not successful";

        }

    }


    public function validation(user &$user){

        $this->errors[0]="";
        $validation = true;

        if(empty($user->getEmail())||empty($user->getPassword1())){
            $this->errors[0]="Email and Password can't be empty";
            $validation=false;
        }else if((strlen($user->getEmail())>45)||(strlen($user->getEmail())<6)){
            $this->errors[0]="Email can't be greater than 45 or lower than 6";
            $validation=false;
        }else if((strlen($user->getPassword1())>45)||(strlen($user->getPassword1())<6)){
            $this->errors[0]="Password can't be greater than 45 or lower than 6";
            $validation=false;
        }else if($user->getPassword1() !== $user->getPassword2()){
            $this->errors[0]="Passwords is not matched";
            $validation=false;
        }else if(!$this->existEmail($user)){
            $validation=false;
        }

        return $validation;
    }

    public function addData(user &$user)
    {

        $query_add = sprintf("INSERT INTO %s (%s,%s,%s,%s) VALUES ('%s',SHA('%s'),NOW(),'0')",$this->tableName,$this->emailColumnName,$this->passwordColumnName, $this->registrationDateColumn ,$this->verifiedColumnName ,$user->getEmail(), $user->getPassword1());

        if (mysqli_query($this->connection,$query_add) or die("query is not successful")) {

            return true;

        } else {

            return false;

        }

    }

    public function testAdd(){

    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}