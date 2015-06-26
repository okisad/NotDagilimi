<?php
require_once('classes/loginClass.php');

$path=explode("/",$_SERVER['REQUEST_URI']);

$path = $path[sizeof($path)-1];

$mainLogin = new login();

echo "<script>console.log('".$path."')</script>";

if($path === "mainpage.php"){

    if(!$mainLogin->isSetCookie()){

        header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/homepage.php');

    }

}

if($path==="homepage.php"){

    if($mainLogin->isSetCookie()){

        header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/mainpage.php');

    }
}

