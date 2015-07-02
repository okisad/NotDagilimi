<!DOCTYPE html>
<html>
<head lang="tr">
    <meta charset="utf-8">
    <title>Home Screen</title>
    <link href="../css/fundamental.css" rel="stylesheet">
    <link href="../css/googleOpenSansFont.css" rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap1.min.css" rel="stylesheet">
    <link href="../css/homepage.css" rel="stylesheet" >
    <!--php require_once('../isLoggedControl.php') ?>-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-login">
                <span class="sr-only">Togglse navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="homepage.php">NOT DAĞILIMI</a>
        </div>
        <a href="mainpage.php">
        <div class="collapse navbar-collapse" id="collapse-login">
            <form data-toggle="validator" class="navbar-form navbar-right text-right" id="signin" role="form" method="post">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email Adresi" class="form-control" data-error="Email adres geçerli değil" required/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Şifre" class="form-control" required/>
                </div>
                <div class="form-group">
                    <button id="loginButton" type="submit" name="loginButton" class="btn btn-md btn-primary btn-block">Giriş</button>
                </div>
            </form>
        </div>
        </a><div></div>
    </div>
</nav>
<div class="topbuffer10 container">
    <div class="hidden-xs col-sm-6" id="textDiv">
        <h2 class="text-uppercase text-center topbuffer8"><strong>Not Dağılımlarını Öğrenmek İçin Doğru Adres</strong></h2>

        <p class="lead">Not Dağılımlarını <b>Paylaş</b>.</p>

        <p class="lead">Not Dağılımlarına <b>Ulaş</b>.</p>

        <p class="lead">Ders Progmanını <b>Şekillendir</b>.</p>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-uppercase">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">HATALI GİRİŞ</h4>
                    </div>
                    <div class="modal-body text-center">
                        <p>Email veya şifre hatalı</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-uppercase text-center topbuffer8"><strong>KAYIT</strong></h2>

        <form data-toggle="validator" id="signup-form" class="topbuffer3 form-signup col-md-10 col-md-offset-1" method="post"
              action="../homepageback.php" name="signup-form" role="form">

            <div class="form-group">
                <input type="email" class="form-control" name="sign-up-email" placeholder="Email Adresi"
                       data-error="Email adres geçerli değil" required/>
            </div>
            <div class="form-group">
                <input type="password" data-minlength="6" class="form-control" id="sign-up-password1"
                       name="sign-up-password1" placeholder="Şifre"
                       required/>
                <p id="min6" class="help-block">Şifre en az 6 karakter olmalı</p>
            </div>
            <div class="form-group">
                <input type="password" data-minlength="6" class="form-control" id="sign-up-password2"
                       name="sign-up-password2" placeholder="Şifre Tekrar"
                       required="true" data-match="#sign-up-password1" data-match-error="Whoops, these don't match"/>
            </div>
            <div class="form-group">
                    <button class="btn btn-lg btn-success btn-block" type="submit" name="signUpButton">Kayıt ol</button>
            </div>
        </form>

    </div>
</div>


<div class="navbar navbar-fixed-bottom foot">
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-xs-offset-1">
            </div>
            <div class="col-xs-3 col-xs-offset-7">
                <p> © 2015 Not Dağılımı</p>
            </div>
        </div>
    </div>
</div>
<script src="../js/jquery-2.1.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/classie.js"></script>
<script src="../js/cbpAnimatedHeader.min.js"></script>
<script src="../js/validator.js"></script>
<script src="../js/freelancer.js"></script>
<script src="../js/error-handle.js"></script>
</body>

</html>