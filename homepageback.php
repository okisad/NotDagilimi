<?php

require_once('classes/loginClass.php');
require_once('classes/userClass.php');
require_once('classes/dbClass.php');
require_once('classes/registrationClass.php');

$mainLogin = new login();



    if(isset($_POST['loginButton'])){

        $login = new login();

        $user = new user($_POST['email'],$_POST['password']);

        if($login->login($user)){

            $mainPageUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/views/mainpage.php';

            header('Location: '.$mainPageUrl);

        }else{

            $homePageUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/views/homepage.php';

            header('Location: '.$homePageUrl);

        }




    }elseif(isset($_POST['signUpButton'])){

        $reg = new Registration();

        $user = new user(trim($_POST['sign-up-email']),trim($_POST['sign-up-password1']));

        $user->userReg(trim($_POST['sign-up-password2']));

        if($reg->registerNewUser($user)){

            $homePageUrl = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/views/homepage.php';

            header("Location: ".$homePageUrl);

        }else{

            $mainPageUrl = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/views/mainpage.php';

            header("Location: ".$mainPageUrl);
        }

    }







