<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend-assets/images/logo.jpg') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/owl.carousel.css">
    <link rel="stylesheet" href="nokia/css/owl.theme.css">
    <link rel="stylesheet" href="nokia/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="nokia/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="nokia/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12" style='display: flex;'>
                    <div class="logo-area">
                        <a href="#"><img src="{{ asset('nokia/img/logo/logo-admin.png') }}" alt="" /></a>
                    </div>
                    <div class="container-pro wizard-cts-st" style='margin-top:20px;'>
                        <ul class="nav nav-pills">
                            <li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">Dashboard</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Money</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Earning history</a></li>
                            <li class=""><a href="#tab4" data-toggle="tab" aria-expanded="false">Withdrawal</a></li>
                            <li class=""><a href="#tab5" data-toggle="tab" aria-expanded="false">Lend now</a></li>
                            <li class=""><a href="#tab6" data-toggle="tab" aria-expanded="false">Borrower now</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                    <div class="d-sm-none d-lg-inline-block">{{ $user->name }}<i class="notika-icon notika-checked"></i></div>
                                </a>
                                <div role="menu" class="dropdown-menu message-dd triger-fadeIn-dp">
                                    <div class="hd-message-info">
                                        <a href="{{ route('dashboard') }}">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Dashboard</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('user.show', $user->id) }}">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Profile</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('user.edit', $user->id) }}">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Settings</h3>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('logout') }}">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Logout</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <div class="modals-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="container">
                <div class="modal-inner-pro">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="#"><i class="notika-icon notika-house"></i> Home</a></li>
                                <li><a href="#"><i class="notika-icon notika-app"></i> Settings</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                        <h4 style='text-align: center;'>Welcome to your profile,{{ $user->name }}</h4>
                        <h2>Summery</h2>
                        <p>Keep track of all your money and investments</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Investments to date</h2>
                                        </div>
                                    </div>
                                    <h2>$59</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Invested to date</h2>
                                        </div>
                                    </div>
                                    <h2>$187,13</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Distribution-Income</h2>
                                        </div>
                                    </div>
                                    <h2>$4,732</h2>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="contact-list" style='box-shadow: 0 2px 8px rgba(0,0,0,.2);'>
                                    <div class="contact-ctn">
                                        <div class="contact-ad-hd">
                                            <h2>Distribution-Capital</h2>
                                        </div>
                                    </div>
                                    <h2>$4,732</h2>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h2>Budget vs Sales</h2>
                        <div class="sale-statistic-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-7 col-xs-12">
                                        <div class="sale-statistic-inner notika-shadow mg-tb-30">
                                            <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                                        <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                                            <div class="dash-widget-visits"></div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">3,20,000</span></h3>
                                                    <p>Page Views</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-bar"></div>
                                                </div>
                                            </div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">1,03,000</span></h3>
                                                    <p>Total Clicks</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-line"></div>
                                                </div>
                                            </div>
                                            <div class="past-statistic-an">
                                                <div class="past-statistic-ctn">
                                                    <h3><span class="counter">24,00,000</span></h3>
                                                    <p>Site Visitors</p>
                                                </div>
                                                <div class="past-statistic-graph">
                                                    <div class="stats-bar-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 . All rights reserved. Design by <a href="https://nauval.in/">Muhamad Nauval Azhar</a>.2.3.0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="nokia/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="nokia/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="nokia/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="nokia/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="nokia/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="nokia/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="nokia/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="nokia/js/counterup/jquery.counterup.min.js"></script>
    <script src="nokia/js/counterup/waypoints.min.js"></script>
    <script src="nokia/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="nokia/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="nokia/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="nokia/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="nokia/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="nokia/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="nokia/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="nokia/js/flot/jquery.flot.js"></script>
    <script src="nokia/js/flot/jquery.flot.resize.js"></script>
    <script src="nokia/js/flot/curvedLines.js"></script>
    <script src="nokia/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="nokia/js/knob/jquery.knob.js"></script>
    <script src="nokia/js/knob/jquery.appear.js"></script>
    <script src="nokia/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="nokia/js/wave/waves.min.js"></script>
    <script src="nokia/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="nokia/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="nokia/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="nokia/js/chat/moment.min.js"></script>
    <script src="nokia/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="nokia/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="nokia/js/tawk-chat.js"></script> -->
</body>

</html>