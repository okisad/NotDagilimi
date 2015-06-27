<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Not Dılımı</title>
    <link href="../css/bootstrap1.min.css" rel="stylesheet">
    <link href="../css/fundamental.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../css/animsition.min.css" rel="stylesheet" type="text/css">
    <link href='../css/googleOpenSansFont.css' rel='stylesheet' type='text/css'>
    <link href="../css/mainpageunlocked.css" rel="stylesheet">
</head>
<body id="page-top" class="index animsition">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">NOT DAĞILIMI</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a id="notdagilimlarihref" href="#notdagilimlari">NOT DAĞILIMLARI</a>
                </li>
                <li class="page-scroll">
                    <a id="hakkindahref" class="page-scroll" href="#hakkinda">HAKKINDA</a>
                </li>
                <li>
                    <form class="navbar-form navbar-right text-right" id="logged" role="form" method="post" action="../mainpageback.php">
                        <div class="form-group">
                            <button id="cikisButton" type="submit" class="btn btn-md btn-danger btn-block" name="cikisButton">ÇIKIŞ</button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <span class="name">Not Dağılımları</span>
                    <hr class="star-light">
                    <span class="glyphicon glyphicon-ok-circle " aria-hidden="true"></span>
                </div>
                <div class="page-scroll alert alert-warning">
                    <p class="text-danger">Üyeliğiniz aktive edilmiştir.</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="notdagilimlari">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Not Dağılımları</h2>
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                <p class="topbuffer5 text-danger">Üyeliğiniz aktive edilemediği için bu bölümü görme yetkiniz yoktur.</p>
            </div>
        </div>
        <div class="row">
            <div class="page-scroll alert alert-warning">
                <p class="topbuffer2 text-danger">Üyeliğiniz aktive edilmemiştir.</p>
                <div class="topbuffer2 animsition">
                    <a href="mainpage.php" class="animsition-link"
                      >Aktif etmek için lütfen tıklayınız</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hakkinda">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Hakkında</h2>
            </div>
        </div>
    </div>
</section>
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Hakkında</h3>
                    <p>Bu site yalnızca İTÜ öğrencilerine hizmet vermektedir.</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>İLETİŞİM</h3>
                    <p>Not Dagilimi</p>
                </div>
                <div id="copyright" class="footer-col col-md-4">
                    <h3>Copyright</h3>
                    <p>&copy; Not Dağılımı 2014</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scrollToTop page-scroll hidden">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-uppercase">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">HOŞGELDİNİZ</h4>
            </div>
            <div class="modal-body text-center">
                <p></p>
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
<script src="../js/jquery.animsition.min.js"></script>
<script src="../js/mainpageunlocked.js"></script>
<script src="../js/freelancer.js"></script>
</body>
</html>
