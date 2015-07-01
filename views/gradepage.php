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
    <link href="../css/animsition.min.css" rel="stylesheet">
    <!--<link href="../css/dataTable.css" rel="stylesheet">-->
    <link href="../css/gradepage.css" rel="stylesheet">


    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/mainPageScript.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.animsition.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/highcharts-3d.js"></script>
    <script src="../js/jquery.fullPage.min.js"></script>
    <!--<script src="../js/dataTable.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#fullpage").fullpage({
                anchors: ['search-page', 'statistic-page', 'grade-distribution-page'],
                sectionsColor: ['#2b3e50', '#4e5d6c', '2b3e50'],
                css3: true,
                verticalCentered: true, /* dikey ortalama*/
                loopTop: true,
                loopBottom: true,
                loopHorizontal: true,
                autoScrolling: true, /* true olursa otomatik sayfaya gider */
                fitToSection: true, /* iki sayfa ortasında kalınırsa eğer onu hangisine yakınsa oraya götürür*/
                //scrollBar:true,
                /*paddingTop: '100px',*/
                /*fixedElements:'#name',*/
                //kayan div veya mapler için çok kullanuşlıdır   normalScrollElements:'.section'
                //normalScrollElementTouchThreshold  kayan div içinden kurtulmak için mouse a verilecek güç
                /*continuousVertical:true,*/
                menu: '#myMenu',
                navigation: false,
                navigationPosition: 'right',
                navigationTooltips: ['ARAMA', 'İSTATİSTİK', 'NOT DAĞILIMLARI'],
                showActiveTooltip: false,
                slidesNavigation: false,
                keyboardScrolling: true,
                scrollingSpeed: 700,
                onSlideLeave:function(anchorLink, index, slideIndex, direction, nextSlideIndex){

                    if(nextSlideIndex==0){
                        $('#slideMenu li').each(function(){
                            $(this).find('a').removeClass('active')
                        });
                        $('#slideMenu li:first-child a').addClass('active');
                    }else if(nextSlideIndex==1){
                        $('#slideMenu li').each(function(){
                            $(this).find('a').removeClass('active')
                        });
                        $('#slideMenu li:eq(1) a').addClass('active');
                    }else if(nextSlideIndex==2){
                        $('#slideMenu li').each(function(){
                            $(this).find('a').removeClass('active')
                        });
                        $('#slideMenu li:eq(2) a').addClass('active');
                    }

                }

            });


            $('#not-oran').highcharts({

                chart: {
                    type: 'pie',
                    backgroundColor: null,
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
                },
                title: {
                    text: 'ORANLARA GÖRE NOT DAĞILIMI',
                    style: {'color': '#ffffff'}
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}',
                            color: '#ffffff'
                        }
                    }
                },
                credits: {
                    enabled: false
                },
                series: [{
                    type: 'pie',
                    name: 'Browser share',
                    data: [
                        {
                            name: 'AA',
                            y: 12.8,
                            sliced: true,
                            selected: true,
                            color: '#5cb85c'
                        }, {
                            name: 'BA',
                            y: 26.8,
                            color: '#7EB85C'
                        },
                        {
                            name: 'BB',
                            y: 20.0,
                            color: '#AFB85C'
                        }, {
                            name: 'CB',
                            y: 15.0,
                            color: '#B8A55C'
                        }, {
                            name: 'CC',
                            y: 10.0,
                            color: '#B88D5C'
                        }, {
                            name: 'DC',
                            y: 8.5,
                            color: '#B8825C'
                        }, {
                            name: 'DD',
                            y: 6.2,
                            color: '#B8665C'
                        }, {
                            name: 'FF',
                            y: 6.2,
                            color: '#d9534f'
                        }
                    ]
                }]
            });

            $('#yil-not-oran').highcharts({
                chart: {
                    type: 'spline',
                    backgroundColor: null
                },
                title: {
                    text: 'YILLARA GÖRE ORANSAL HARF NOTLARI',
                    style: {'color': '#ffffff'}
                },
                xAxis: {
                    type: 'datetime',
                    dateTimeLabelFormats: {
                        year: '%Y'
                    },
                    title: {
                        text: 'Dönem',
                        style: {
                            'color': '#ffffff'
                        }
                    },
                    labels: {
                        style: {
                            'color': '#ffffff'
                        }
                    }
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    title: {
                        text: 'Harf Yüzdesi(%)',
                        style: {
                            'color': '#ffffff'
                        }
                    }, labels: {
                        style: {
                            'color': '#ffffff'
                        }
                    },
                    max: 100,
                    min: 0
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '% {point.y:.2f}'
                },

                plotOptions: {
                    spline: {
                        marker: {
                            enabled: true
                        }
                    }
                },

                series: [{
                    name: 'AA',
                    data: [
                        [Date.parse('2010'), 10],
                        [Date.parse('2011'), 15],
                        [Date.parse('2012'), 25],
                        [Date.parse('2013'), 35]

                    ],
                    color: '#5cb85c'
                }, {
                    name: 'FF',
                    data: [
                        [Date.parse('2010'), 12],
                        [Date.parse('2011'), 15],
                        [Date.parse('2012'), 13],
                        [Date.parse('2013'), 5]

                    ],
                    color: '#d9534f'
                }]
            });

            $('#donem-not-daglimi').highcharts({
                chart: {
                    borderColor:'#d9534f',
                    plotBorderColor:'#d9534f',
                    type: 'column',
                    margin: 75,
                    options3d: {
                        enabled: true,
                        alpha:5,
                        beta: 0,
                        depth: 70
                    },
                    backgroundColor:null
                },
                title: {
                    text: 'NOT DAĞILIMI',
                    style:{'color':'#ffffff'}
                },
                credits: {
                    enabled: false
                },
                plotOptions: {
                    column: {
                        depth: 25
                    }
                },
                xAxis: {

                    categories:['AA','BA','BB','CB','CC','DC','DD','FF','VF'],
                    labels: {
                        style: {
                            'color': '#ffffff'
                        }

                    }
                },subtitle:{
                    style:{
                        'color':'#d9534f'
                    }
                },
                plotOptions:{
                    columnn:{
                        borderColor:'#d9534f',
                        color:'#d9534f'
                    }
                },legend:{
                    itemStyle:{
                        'color':'#d9534f'
                    },
                    enabled:false
                },
                yAxis: {
                    title: {
                        text: 'KİŞİ SAYISI',
                        style: {
                                'color': '#ffffff'
                            }
                    },
                    labels: {
                        style: {
                            'color': '#ffffff'
                        }
                    }
                },
                series: [{
                    name: 'Kişi Sayısı',
                    color:'#d9534f',
                    edgeColor:'#d9534f',
                    borderColor:'#d9534f',

                    data:{
                        color:'#d9534f'
                    },
                    dataLabels:{
                        color:'#d9534f'
                    },
                    data: [2, 3, null, 4, 0, 5, 1, 4, 6]
                }]
            });

            $(".animsition").animsition({

                inClass               :   'fade-in-right-lg',
                outClass              :   'flip-out-y-fr',
                inDuration            :    1500,
                outDuration           :    800,
                linkElement           :   '.animsition-link',
                // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
                loading               :    true,
                loadingParentElement  :   'body', //animsition wrapper element
                loadingClass          :   'animsition-loading',
                unSupportCss          : [ 'animation-duration',
                    '-webkit-animation-duration',
                    '-o-animation-duration'
                ],
                //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

                overlay               :   false,

                overlayClass          :   'animsition-overlay-slide',
                overlayParentElement  :   'body'
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
            <a class="navbar-brand" href="#search-page">NOT DAĞILIMI</a>
        </div>
        <div class="collapse navbar-collapse navbar-elements-container" id="bs-example-navbar-collapse-1">
            <ul id="myMenu" class="nav navbar-nav navbar-right">
                <li data-menuanchor="search-page">
                    <a id="nav-search-page-a" href="#search-page">ARAMA PANELİ</a>
                </li>
                <li data-menuanchor="statistic-page">
                    <a id="nav-statistic-page-a" href="#statistic-page">İSTASTİK PANELİ</a>
                </li>
                <li data-menuanchor="grade-distribution-page">
                    <a id="nav-grade-distribution-page-a" href="#grade-distribution-page">NOT DAĞILIMI PANELİ</a>
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
    <div class="section" data-anchor="search-page">
        <div class="container">
            <div class="row padbottom15">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h1>ÖĞRETİM GÖREVLİSİ ARAMA BÖLÜMÜ</h1>
                </div>
            </div>
            <div class="row text-center center-block">
                <div class="col-md-10 col-md-offset-1">
                    <div class="input-group">
                        <input type="text" class="form-control arc-top-left-12 arc-bottom-left-12"
                               placeholder="Öğretim Görevlisi Aramak İçin...">
                        <span class="input-group-btn">
                            <button class="btn btn-default orange-color arc-top-right-12 arc-bottom-right-12"
                                    type="button">ARA
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" data-anchor="statistic-page">
        <div class="container">
            <div class="row">
                <div class="slide" data-anchor="statistic-slide1">
                    <table id="example" class="table" cellspacing="0">
                        <thead class="text-warning">
                        <tr>
                            <td></td>
                            <td class="text-success">AA</td>
                            <td>BA</td>
                            <td>BB</td>
                            <td>CB</td>
                            <td class="text-warning">CC</td>
                            <td>DC</td>
                            <td>DD</td>
                            <td class="text-danger">FF</td>
                            <td class="text-info">VF</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>VERİLMİŞ TOPLAM SAYI</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>VERİLMİŞ TOPLAM YÜZDESİ</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                            <td>%10</td>
                        </tr>
                        <tr>
                            <td>HİÇ VERİLMEMİŞ DERS SAYISI</td>
                            <td>4</td>
                            <td>4</td>
                            <td>4</td>
                            <td>7</td>
                            <td>4</td>
                            <td>4</td>
                            <td>3</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>HİÇ VERİLMEMİŞ DERS SAYISI YÜZDESİ</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                        </tr>
                        <tr>
                            <td>VERİLMİŞ DERS SAYISI</td>
                            <td>4</td>
                            <td>4</td>
                            <td>4</td>
                            <td>7</td>
                            <td>4</td>
                            <td>4</td>
                            <td>3</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>VERİLMİŞ DERS SAYISI YÜZDESİ</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                            <td>%8</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="text-warning">TOPLAM HARF ORANI</h3>
                        </div>
                        <div class="progress arc-all-edge-12 topbuffer8">
                            <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 55%">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 30%">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                            <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 5%">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide" data-anchor="statistic-slide2">
                    <div id="not-oran" style="height: 500px">
                    </div>
                </div>
                <div class="slide" data-anchor="statistic-slide3">
                    <div id="yil-not-oran" style="width: 1100px ;height: 500px;margin: 0 auto"
                         data-highcharts-chart="1">
                    </div>
                </div>
            </div>

        </div>
        <div class="horizontal-nav">
            <ul class="list-inline"  id="slideMenu">
                <li data-menuanchor="statistic-slide1">
                    <a href="#statistic-page/statistic-slide1" class="active">Veriler</a>
                </li>
                <li data-menuanchor="statistic-slide2">
                    <a href="#statistic-page/statistic-slide2">Not Dilimi</a>
                </li>
                <li data-menuanchor="statistic-slide3   ">
                    <a href="#statistic-page/statistic-slide3">Geçmiş Yıllar İstatistik</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="section" data-anchor="grade-distribution-page">
        <div class="container">
            <div class="row date-select-row">
                <select class="select-year">
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                </select>
            </div>
            <div class="row">
                <div id="donem-not-daglimi" data-highcharts-chart="2"></div>
            </div>
            <div class="navbar navbar-fixed-bottom foot">
                <div class="container">
                    <div class="col-xs-8">
                        <ul class="men nav navbar-nav navbar-left">
                            <li data-menuanchor="search-page">
                                <a id="nav-search-page-a" href="#search-page">ARAMA PANELİ</a>
                            </li>
                            <li data-menuanchor="statistic-page">
                                <a id="nav-statistic-page-a" href="#statistic-page">İSTASTİK PANELİ</a>
                            </li>
                            <li data-menuanchor="grade-distribution-page">
                                <a id="nav-grade-distribution-page-a" href="#grade-distribution-page">NOT DAĞILIMI PANELİ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4">
                        <p class="navbar-right">© 2015 Not Dağılımı</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>