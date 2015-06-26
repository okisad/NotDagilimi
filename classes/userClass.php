<?php
class user{

    private $email;
    private $password1;
    private $password2;

    function __construct($email,$password1){

        $this->email=$email;
        $this->password1=$password1;

    }

    function userReg($password2){

        $this->password2=$password2;
    }

    function passwordsIsEqual(){

        return $this->password1 == $this->password2;

    }

    function __get($property){
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function getEmail(){
        return $this->email;
    }

    function getPassword1(){
        return $this->password1;
    }

    function getPassword2(){
        return $this->password2;
    }

}