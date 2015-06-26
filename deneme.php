<html>
<head>
<link href="css/deneme.css" rel="stylesheet" />
</head>
<body>
<?php
    require_once('classes/loginClass.php');
    require_once('classes/userClass.php');

    $user = new user("oktaysa.com","123456");

    $l=new login();

    $l->dbdeneme($user);

?>

<script src="js/jquery-2.1.3.min.js"></script>

</body>
</html>