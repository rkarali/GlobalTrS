<!DOCTYPE HTML>
<html>

<head>
    <title><?=$title?></title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.7/js/ion.rangeSlider.js"></script>
    
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/mystyles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.7/css/ion.rangeSlider.skinHTML5.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.1.7/css/ion.rangeSlider.css" />


    <script src="<?=base_url();?>assets/js/modernizr.js"></script>


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.html">
                                <img src="<?=base_url()?>assets/img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="<?=base_url()?>home/login">
                                            <img class="origin round" src="<?=base_url()?>assets/img/40x40.png" alt="Image Alternative text" title="AMaze" />Sign in</a>
                                    </li>
                                  <!-- <li><a href="#">Sign Out</a>-->    
                                    </li>
                                    <li class="nav-drop"><a href="#">USD $<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
                                        <ul class="list nav-drop-menu">
                                            <li><a href="#">EUR<span class="right">€</span></a>
                                            </li>
                                            <li><a href="#">GBP<span class="right">£</span></a>
                                            </li>
                                            <li><a href="#">JPY<span class="right">円</span></a>
                                            </li>
                                            <li><a href="#">CAD<span class="right">$</span></a>
                                            </li>
                                            <li><a href="#">AUD<span class="right">A$</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-user-area-lang nav-drop">
                                        <a href="#">
                                            <img src="<?=base_url()?>assets/img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" />ENG<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                        </a>
                                        <ul class="list nav-drop-menu">
                                            <li>
                                                <a title="German" href="#">
                                                    <img src="<?=base_url()?>assets/img/flags/32/tr.png" alt="Image Alternative text" title="Image Title" /><span class="right">TUR</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="active"><a href="<?=base_url();?>home">Home</a>
                        </li>
						
                 
                      
      
                        
                      
                        <li><a href="cars.html">Cars</a>
                            <ul>
                            
                                <li><a href="car-search.html">cars search</a> 				<!--araba detayları -->
                                   
                                </li>
                                <li><a href="cars.html">Results</a>
                                  
                                </li>
                            </ul>
                        </li>
         
                    </ul>
                </div>
            </div>
        </header>