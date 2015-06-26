<?php

require_once('classes/loginClass.php');

$login = new login();

echo "<script>console.log('girdi')</script>";

if(!$login->isSetCookie()){

    header('Location: http://localhost/~oktaysahinsadoglu/NotDagilimi/views/homepage.php');

}

if(isset($_POST['cikisButton'])){

    $login = new login();

    if ($login->sessionDestroy()) {

        $homeUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) .'/views/homepage.php';

        header('Location: '.$homeUrl);

    }

}
