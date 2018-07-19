<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="iThemesLab">
    <meta name="description" content="">

    <title>Home | HTML Interior Template</title>

    <!-- favicons -->
    <link rel="shortcut icon" href="assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- load google font -->
	
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!--=== all css here ===-->
	
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
	
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">

    <!-- revolution slider css -->
    <link rel="stylesheet" href="{{asset('assets/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navigation.css')}}">

    <!--  hover css  -->
    <link rel="stylesheet" href="{{asset('assets/css/hover-min.css')}}">
	
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	
    <!-- icon-font css -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
	
    <!-- venobox -->
    <link rel="stylesheet" href="{{asset('assets/css/venobox.css')}}">
	
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <div id="preloader"></div>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="main-container">
        <!--header-top-area start-->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="custom-left">
                            <div class="top-phone contact">
                                <span><i class="fa fa-phone"></i></span> (880) 1713-0780-839
                            </div>
                            <div class="top-mail contact">
                                <span><i class="fa fa-envelope"></i></span> <a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe939f9792be929f898d8b978ad0918c99">[email&#160;protected]</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="custom-right">
                            <div class="top-social">
                                <p>Follow Us On :</p>
                            </div>
                            <ul class="top_social_icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header-top-area end-->

        <!-- navbar start -->
        <header class="header hidden-xs" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index-2.html">
                                <div class="logo">
                                    <img src="assets/images/logo/logo.png" alt="Imperial Logo">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <nav class="navbar">
                            <div class="collapse navbar-collapse js-navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="homepage-2.html">Home Page 2</a></li>
                                            <li><a href="homepage-3.html">Home Page 3</a></li>
                                            <li><a href="home-boxed.html">Home Boxed</a></li>
                                            <li><a href="index-2.html">Home Default</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">about</a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="about-us-1.html">About Us 1</a></li>
                                            <li><a href="about-us-2.html">About Us 2</a></li>
                                            <li><a href="about-us-3.html">About US 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">services</a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="our-service-1.html">Our Services 1</a></li>
                                            <li><a href="our-service-2.html">Our Services 2</a></li>
                                            <li><a href="our-service-3.html">Our Services 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="portfolio-4-col.html">Portfolio 4 Col</a></li>
                                            <li><a href="4-column-white.html">4 Column white</a></li>
                                            <li><a href="portfolio-3-col.html">Portfolio 3 Col</a></li>
                                            <li><a href="3-column-white.html">3 Column white</a></li>
                                            <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                            <li><a href="masonary-white.html">masonary white</a></li>
                                            <li><a href="portfolio-2-col.html">Portfolio 2 Col</a></li>
                                            <li><a href="2-column-white.html">2 Column white</a></li>
                                            <li><a href="single-portfolio.html">single portfolio</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog </a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="blog-default.html">Blog Default</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-sidebar.html">Blog sidebar</a></li>
                                            <li><a href="blog-full-grid.html">Blog Full Grid</a></li>
                                            <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                            <li><a href="single-blog-post.html">Single Blog Post</a></li>
                                            <li><a href="single-sidebar.html">Single Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-dropdown">
                                        <a href="contact-us-1.html" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
                                        <ul class="mega-dropdown-menu dropdown-menu">
                                            <li class="col-md-3 col-sm-4">
                                                <ul>
                                                    <li><a href="404.html">404 page</a></li>
                                                    <li><a href="accordion.html">Accordion</a></li>
                                                    <li><a href="alert.html">Alert</a></li>
                                                    <li><a href="bootstrap-grid.html">Bootstrap Grid</a></li>
                                                    <li><a href="divider.html">divider</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3 col-sm-4">
                                                <ul>
                                                    <li><a href="dropcaps.html">Dropcaps</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="faq.html">f.A.Q</a></li>
                                                    <li><a href="font-awesome.html">Font Awesome</a></li>
                                                    <li><a href="get-a-quote.html">Get A Quote</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3 col-sm-4">
                                                <ul>
                                                    <li><a href="progress-bar.html">Progress Bar</a></li>
                                                    <li><a href="pricing-table.html">Pricing table</a></li>
                                                    <li><a href="team.html">team</a></li>
                                                    <li><a href="tabs.html">tabs</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3 hidden-sm hidden-xs">
                                                <ul>
                                                    <li class="nb">
                                                        <a href="#"><img src="assets/images/menu/pic1.jpg" alt=""></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="contact-us-1.html" class="dropdown-toggle" data-toggle="dropdown">Contact</a>
                                        <ul class="dropdown-menu border">
                                            <li><a href="contact-us-2.html">Contact Us 1</a></li>
                                            <li><a href="contact-us-3.html">Contact Us 2</a></li>
                                            <li><a href="contact-us-4.html">Contact Us 3</a></li>
                                            <li><a href="contact-us-5.html">Contact Us 4</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.nav-collapse -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- header end -->

        <!-- mobile-menu-area-start -->
        <div class="mobile-menu-area hidden-sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul>
                                    <li class="active"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li>
                                                <a href="homepage-2.html">Home Page 2</a>
                                                <a href="homepage-3.html">Home Page 3</a>
                                                <a href="home-boxed.html">Home Boxed</a>
                                                <a href="home-boxed.html">Home Default</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">about</a>
                                        <ul>
                                            <li>
                                                <a href="about-us-1.html">About Us 1</a>
                                                <a href="about-us-2.html">About Us 2</a>
                                                <a href="about-us-3.html">About Us 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">services</a>
                                        <ul>
                                            <li>
                                                <a href="our-service-1.html">Our service 1</a>
                                                <a href="our-service-2.html">Our service 2</a>
                                                <a href="our-service-3.html">Our service 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Portfolio</a>
                                        <ul>
                                            <li>
                                                <a href="portfolio-4-col.html">Portfolio 4 Col</a>
                                                <a href="4-column-white.html">4 Column white</a>
                                                <a href="portfolio-3-col.html">Portfolio 3 Col</a>
                                                <a href="3-column-white.html">3 Column white</a>
                                                <a href="portfolio-masonry.html">Portfolio Masonry</a>
                                                <a href="masonary-white.html">masonary white</a>
                                                <a href="portfolio-2-col.html">Portfolio 2 Col</a>
                                                <a href="2-column-white.html">2 Column white</a>
												<a href="single-portfolio.html">single portfolio</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="elements.html">Elements</a>
                                        <ul>
                                            <li>
                                                <a href="404.html">404 page</a>
                                                <a href="accordion.html">Accordion</a>
                                                <a href="alert.html">Alert</a>
                                                <a href="bootstrap-grid.html">Bootstrap Grid</a>
                                                <a href="divider.html">Divider</a>
                                                <a href="dropcaps.html">Dropcaps</a>
                                                <a href="elements.html">Elements</a>
                                                <a href="faq.html">F.A.Q</a>
                                                <a href="font-awesome.html">Font Awesome</a>
                                                <a href="pricing-table.html">Pricing Table</a>
                                                <a href="progress-bar.html">Progressbar</a>
                                                <a href="typography.html">Typography</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li>
                                                <a href="blog-default.html">Blog Default</a>
                                                <a href="blog-standard.html">Blog Standard</a>
                                                <a href="blog-sidebar.html">Blog sidebar</a>
                                                <a href="blog-full-grid.html">Blog Full Grid</a>
                                                <a href="blog-2-column.html">Blog 2 Column</a>
                                                <a href="single-blog-post.html">Single Blog Post</a>
                                                <a href="single-sidebar.html">Single Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact</a>
                                        <ul>
                                            <li>
                                                <a href="contact-us-2.html">Contact Us 1</a>
                                                <a href="contact-us-3.html">Contact Us 2</a>
                                                <a href="contact-us-4.html">Contact Us 3</a>
                                                <a href="contact-us-5.html">Contact Us 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area-end -->

        @yield('content')

        <!-- footer start -->
        <footer>
            <div class="footer pdd-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h3 class="f-title">About us</h3>
                            <div class="custom">
                                <p>Imperial Lets you feel the full power of Creation. <span>No Limitation with Imperial Template.</span> Flawless design & Powerful features ensure a stunning & sleek look.
                                </p>
                                <div class="footer-social">
                                    <ul>
                                        <li>
                                            <a class="fb" href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a class="tw" href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="pn" href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a class="yp" href="#"><i class="fa fa-youtube-play"></i></a>
                                        </li>
                                        <li>
                                            <a class="ln" href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h3 class="f-title">Quick links</h3>
                            <div class="custom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="quick-links">
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">portfolio</a></li>
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quick-links">
                                            <ul>
                                                <li><a href="#">elements</a></li>
                                                <li><a href="#">divider</a></li>
                                                <li><a href="#">F.A.Q</a></li>
                                                <li><a href="#">Pricing</a></li>
                                                <li><a href="#">Quote</a></li>
                                                <li><a href="#">Tabs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h3 class="f-title">Flickr widget</h3>
                            <div class="custom">
                                <div class="f-gallery">
                                    <ul>
                                        <li>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/1.jpg"><img src="assets/images/f-gallery/1.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/2.jpg"><img src="assets/images/f-gallery/2.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/3.jpg"><img src="assets/images/f-gallery/3.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/4.jpg"><img src="assets/images/f-gallery/4.jpg" alt="" /></a>
                                        </li>
                                        <li>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/5.jpg"><img src="assets/images/f-gallery/5.jpg" alt="" /></a>    
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/6.jpg"><img src="assets/images/f-gallery/6.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/7.jpg"><img src="assets/images/f-gallery/7.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/8.jpg"><img src="assets/images/f-gallery/8.jpg" alt="" /></a>
                                        </li>
                                        <li>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/9.jpg"><img src="assets/images/f-gallery/9.jpg" alt="" /></a>    
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/10.jpg"><img src="assets/images/f-gallery/10.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/11.jpg"><img src="assets/images/f-gallery/11.jpg" alt="" /></a>
                                            <a class="venobox" data-gall="myGallery" href="assets/images/f-gallery/big/12.jpg"><img src="assets/images/f-gallery/12.jpg" alt="" /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h3 class="f-title">Contact US</h3>
                            <div class="c-menu">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-paper-plane-o"> </i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <p>Rocky Beach, California.
                                        <br><small>United States </small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-menu">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-mixcloud"> </i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <p>+880171307808
                                        <br><small>+880176140402 </small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="c-menu">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        <i class="fa fa-envelope-o"> </i>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-10">
                                        <p><a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7d2dad6dedbf7dec3dfd2dad2c4dbd6d599d4d8da">[email&#160;protected]</a>
                                        <br><small>We reply within 24 hours</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer -->
            <div class="t3-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="t-center">
                                <p>&copy;2018 <a href="#">PT. Tribwana Indosekar</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <ul class="t-center">
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
	</div>

	<!--=== all js here ===-->
	
	<!-- load jquery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.2.2.min.js')}}"></script>
	
	<!--modernizr.custom-->
	<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
	
	<!-- load bootstrap -->
	<script src="{{asset('')}}assets/js/bootstrap.min.js"></script>

	<!--revolution js-->
	<script src="{{asset('assets/js/extensions/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('assets/js/extensions/revolution.extension.video.min.js')}}"></script>

	<!-- owl.carousel js -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	
	<!-- meanmenu js -->
	<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
	
	<!-- isotope js -->
	<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
	
	<!-- jquery-ui js -->
	<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
	
	<!--jquery counterup-->
	<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
	
	<!--waypoints js-->
	<script src="{{asset('assets/js/waypoints-jquery.js')}}"></script>
	
	<!-- wow js -->
	<script src="{{asset('assets/js/wow.min.js')}}"></script>
	
	<!--jquery scrollUp-->
	<script src="{{asset('assets/js/jquery.scrollUp.js')}}"></script>
	
	<!--venobox.min js-->
	<script src="{{asset('assets/js/venobox.min.js')}}"></script>
	
	<!--datepicker js-->
	<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
	
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>

</html>