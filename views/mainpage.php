<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta lang="tr">

    <title>Not Dağılımı</title>
    <link href="../css/bootstrap1.min.css" rel="stylesheet">
    <link href="../css/googleOpenSansFont.css" rel="stylesheet">
    <link href="../css/fundamental.css" rel="stylesheet">
    <link href="../css/jquery.fullPage.css" rel="stylesheet">
    <link href="../css/mainpagescrolling.css" rel="stylesheet">


    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/mainPageScript.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fullpage").fullpage({
                anchors:['intro-page','notdagilimi-page','transkript-page','unlock-page'],
                sectionsColor: ['#2b3e50','#4e5d6c','2b3e50','#4e5d6c'],
                css3:true,
                verticalCentered:false,/* dikey ortalama*/
                loopTop:true,
                loopBottom:true,
                loopHorizontal:true,
                autoScrolling:false,/* true olursa otomatik sayfaya gider */
                fitToSection:false,/* iki sayfa ortasında kalınırsa eğer onu hangisine yakınsa oraya götürür*/
                //scrollBar:true,
                paddingTop:'100px',
                /*fixedElements:'#name',*/
                //kayan div veya mapler için çok kullanuşlıdır   normalScrollElements:'.section'
                //normalScrollElementTouchThreshold  kayan div içinden kurtulmak için mouse a verilecek güç
                /*continuousVertical:true,*/
                menu:'#myMenu',
                navigation:true,
                navigationPosition:'right',
                navigationTooltips:['GİRİŞ','NOT DAĞILIMLARI','TRANSKRİPT HESAPLAMA','KİLİT AÇ'],
                showActiveTooltip:false,
                slidesNavigation:false,
                keyboardScrolling:true,
                scrollingSpeed:1200

            });
        });
    </script>
    <?php  require_once('../isLoggedControl.php') ?>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#sec1">NOT DAĞILIMI</a>
            </div>
            <div class="collapse navbar-collapse navbar-elements-container" id="bs-example-navbar-collapse-1">
                <ul id="myMenu" class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#intro-page"></a>
                    </li>
                    <li data-menuanchor="notdagilimi-page">
                        <a id="notdagilimlarihref" href="#notdagilimi-page">NOT DAĞILIMLARI</a>
                    </li>
                    <li data-menuanchor="transkript-page">
                        <a id="transkripthref" href="#transkript-page">TRANSKRİPT HESAPLAMA</a>
                    </li>
                    <li data-menuanchor="unlock-page">
                        <a id="kilitachref" href="#unlock-page">KİLİT AÇ</a>
                    </li>
                    <li>
                        <form class="navbar-form navbar-right navbar-exit-button" id="logged" role="form" method="post" action="../mainpageback.php">
                            <div class="form-group">
                                <button id="cikisButton" type="submit" class="btn btn-md btn-danger" name="cikisButton">ÇIKIŞ</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="fullpage">
        <div class="section" data-anchor="intro-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 topbuffer8">
                        <div class="intro-text text-uppercase">
                            <span class="name">Not Dağılımları</span>
                            <hr class="star-light">
                            <span class="glyphicon glyphicon-remove-circle " aria-hidden="true"></span>
                        </div>
                        <div class="page-scroll alert alert-warning topbuffer5 text-center text-uppercase">
                            <p class="text-danger ">ÜYELİĞİNİZ AKTİVE EDİLMEMİŞTİR</p>
                            <a href="#unlock-page">AKTİF ETMEK İÇİN LÜTFEN TIKLAYINIZ</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="notdagilimi-page">
            <div class="container">
                <div class="row topbuffer3">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase">Not Dağılımları</h2>
                        <hr class="star-light">
                        <span class="glyphicon glyphicon-lock lock-symbol topbuffer2" aria-hidden="true"></span>
                        <p class="topbuffer5 text-danger">Üyeliğiniz aktive edilemediği için bu bölümü görme yetkiniz yoktur.</p>
                    </div>
                </div>
                <div class="row topbuffer3">
                    <div class="page-scroll alert alert-warning text-center text-uppercase">
                        <p class="text-danger">ÜYELİĞİNİZ AKTİVE EDİLMEMİŞTİR</p>
                        <div>
                            <a href="#unlock-page">AKTİF ETMEK İÇİN LÜTFEN TIKLAYINIZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="transkript-page">
            <div class="container">
                <div class="row topbuffer3">
                    <div class="col-lg-12 text-center">
                        <h2 class="text-uppercase">TRANSKRİPT HESAPLAMA</h2>
                        <hr class="star-light">
                        <span class="glyphicon glyphicon-lock lock-symbol topbuffer2" aria-hidden="true"></span>
                        <p class="topbuffer5 text-danger">Üyeliğiniz aktive edilemediği için bu bölümü görme yetkiniz yoktur.</p>
                    </div>
                </div>
                <div class="row topbuffer3">
                    <div class="page-scroll alert alert-warning text-center text-uppercase">
                        <p class="text-danger">ÜYELİĞİNİZ AKTİVE EDİLMEMİŞTİR</p>
                        <div>
                            <a href="#unlock-page">AKTİF ETMEK İÇİN LÜTFEN TIKLAYINIZ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" data-anchor="unlock-page">
            <div class="container">
                <div class="row topbuffer5">
                    <div class="unlock-page-first-section col-lg-7">
                        <h1 class="text-uppercase text-center">Burayı Okuyunuz</h1>
                        <div class="topbuffer4" id="kilitacbilgilendirme">
                            <p class="text-warning">- ITU sis bilgileriniz hiç bir şekilde kayıt altında tutulmamaktadır.</p>
                            <p class="text-warning">- Amacımız İTÜ öğrencilerinin elinde bulunan not dağılımı bilgilerini tek bir çatıda toplamaktır.</p>
                            <p class="text-warning">- Nasıl güvenimipte bilgilerini paylaşacağınızı düşünüyorsanız size birkaç önerimiz var;</p>
                            <ul class="text-danger">
                                <li><p>Bilgileriniz paylaştıktan sonra şifrenizi değiştirebilirsiniz</p></li>
                                <li><p>Şifrem aynı kalsın diyorsanız, bilgilerinizi paylaşmadan önce şifreninizi değiştirip, paylaştıktan sonra eski şifrenize dönebilirsiniz</p></li>
                            </ul>
                            <p class="text-success">- Sis bilgilerinizi doğru girdiğiniz taktirde kilidiniz açılacaktır.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                        <h1 class="text-uppercase text-center">İTÜ SİS BİLGİLERİ</h1>
                        <form data-toggle="validator" id="itusisform" method="post" action="../mainpageback.php"
                              name="itusisform" role="form" class="topbuffer8">
                            <div class="form-group">
                                <input class="form-control" name="kullaniciadi" type="text" required="true" placeholder="Kullanıcı Adı">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="sifre" type="password" required="true" placeholder="Şifre">
                            </div>
                            <div class="form-group">
                                <input  class="form-control" name="pin" type="password" required="true" placeholder="İTÜ SİS pin">
                            </div>
                            <div class="form-group topbuffer4">
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="itusisformbutton">Gönder
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       <!-- <div class="section" data-anchor="sec2">
            <div class="slide" data-anchor="sli1">slide 1</div>
            <div class="slide" data-anchor="sli2">slide 2</div>
            <div class="slide" data-anchor="sli3">slide 3</div>
        </div>-->
        <footer class="footer">
            <div class="container">
                <ul id="myMenu" class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#intro-page"></a>
                    </li>
                    <li data-menuanchor="notdagilimi-page">
                        <a id="notdagilimlarihref" href="#notdagilimi-page">NOT DAĞILIMLARI</a>
                    </li>
                    <li data-menuanchor="transkript-page">
                        <a id="transkripthref" href="#transkript-page">TRANSKRİPT HESAPLAMA</a>
                    </li>
                    <li data-menuanchor="unlock-page">
                        <a id="kilitachref" href="#unlock-page">KİLİT AÇ</a>
                    </li>
                </ul>
                <p class="navbar-right">© 2015 Not Dağılımı</p>
            </div>
        </footer>
    </div>



</body>
</html>