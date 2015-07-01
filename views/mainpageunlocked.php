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
    <link href="../css/mainpageunlocked.css" rel="stylesheet">
    <link href="../css/animsition.min.css" rel="stylesheet">


    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/mainPageScript.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.fullPage.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#fullpage").fullpage({
                anchors: ['intro-page', 'notdagilimi-page', 'transkript-page'],
                sectionsColor: ['#2b3e50', '#4e5d6c', '2b3e50'],
                css3: true,
                verticalCentered: false, /* dikey ortalama*/
                loopTop: true,
                loopBottom: true,
                loopHorizontal: true,
                autoScrolling: true, /* true olursa otomatik sayfaya gider */
                fitToSection: true, /* iki sayfa ortasında kalınırsa eğer onu hangisine yakınsa oraya götürür*/
                //scrollBar:true,
                paddingTop: '100px',
                /*fixedElements:'#name',*/
                //kayan div veya mapler için çok kullanuşlıdır   normalScrollElements:'.section'
                //normalScrollElementTouchThreshold  kayan div içinden kurtulmak için mouse a verilecek güç
                /*continuousVertical:true,*/
                menu: '#myMenu',
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['GİRİŞ', 'NOT DAĞILIMLARI', 'TRANSKRİPT HESAPLAMA', 'KİLİT AÇ'],
                showActiveTooltip: false,
                slidesNavigation: false,
                keyboardScrolling: true,
                scrollingSpeed: 700

            });

            $(".animsition").animsition({

                inClass: 'flip-in-y-fr',
                outClass: 'flip-out-y-fr',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                unSupportCss: ['animation-duration',
                    '-webkit-animation-duration',
                    '-o-animation-duration'
                ],
                //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

                overlay: false,

                overlayClass: 'animsition-overlay-slide',
                overlayParentElement: 'body'
            });
        });
    </script>
    <!--   require_once('../isLoggedControl.php') -->
</head>
<body class="animsition">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
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
                <li>
                    <form class="navbar-form navbar-right navbar-exit-button" id="logged" role="form" method="post"
                          action="../mainpageback.php">
                        <div class="form-group">
                            <button id="cikisButton" type="submit" class="btn btn-md btn-danger" name="cikisButton">
                                ÇIKIŞ
                            </button>
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
                <div class="col-md-12 topbuffer8">
                    <div class="intro-text text-uppercase">
                        <span class="name">Not Dağılımları</span>
                        <hr class="star-light">
                        <span class="glyphicon glyphicon-ok-circle tick-symbol " aria-hidden="true"></span>
                    </div>
                    <a href="#notdagilimi-page">
                        <div class="page-scroll alert alert-warning topbuffer5 text-center text-uppercase">
                            <p>ÜYELİĞİNİZ AKTİVE EDİLMİŞTİR</p>
                            <span class="glyphicon glyphicon-menu-down"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section" data-anchor="notdagilimi-page">
        <div class="container">
            <div class="row topbuffer3">
                <div class="col-md-12 text-center">
                    <h2 class="text-uppercase">Not Dağılımları</h2>
                    <hr class="star-light">
                    <span class="glyphicon glyphicon-ok-circle tick-symbol topbuffer2" aria-hidden="true"></span>
                </div>
            </div>
            <div class="row topbuffer10 col-xs-12">
                <a class="animsition-link" href="gradepage.php" data-animsition-out="fade-out-left-lg"
                   data-animsition-out-duration="2000">
                    <div class="page-scroll alert alert-warning text-center text-uppercase">
                        <div class="col-xs-8 col-xs-offset-1">
                            <p>NOT DAĞILIMI SAYFASINA GİTMEK İÇİN TIKLAYINIZ</p>
                        </div>
                        <div class="col-xs-3">
                            <span class="glyphicon glyphicon-menu-right"></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="section" data-anchor="transkript-page">
        <div class="container">
            <div class="row topbuffer3">
                <div class="col-xs-12 text-center">
                    <h2 class="text-uppercase">TRANSKRİPT HESAPLAMA</h2>
                    <hr class="star-light">
                </div>
                <div class="col-xs-12 text-center topbuffer10">
                    <h2>YAKINDA...</h2>
                </div>

            </div>
        </div>
        <div class="navbar navbar-fixed-bottom foot">
            <div class="container">
                <div class="col-xs-8">
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
                    </ul>
                </div>
                <div class="col-xs-4">
                    <p class="navbar-right">© 2015 Not Dağılımı</p>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.animsition.min.js"></script>
</body>
</html>