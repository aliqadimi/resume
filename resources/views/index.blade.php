<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leven - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Leven - Resume / CV / vCard Template"/>
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio"/>
    <meta name="author" content="lmpixels"/>
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{asset('Site/css/normalize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Site/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Site/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Site/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Site/css/main.css')}}" type="text/css">

    <script src="{{asset("Site/js/modernizr.custom.js")}}"></script>
</head>

<body class="page">

<div class="lm-animated-bg"></div>

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<!-- Scroll To Top Button -->
<div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
<!-- /Scroll To Top Button -->

<div class="page-scroll">
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
        <header id="site_header" class="header">
            <div class="header-content clearfix">

                <!-- Text Logo -->
                <div class="text-logo">
                    <a href="index.html">
                        <div class="logo-symbol">A</div>
                        <div class="logo-text">Ali <span>Qadimi</span></div>
                    </a>
                </div>
                <!-- /Text Logo -->

                <!-- Navigation -->
                <div class="site-nav mobile-menu-hide">
                    <ul class="leven-classic-menu site-main-menu">
                        <li class="menu-item current-menu-item">
                            <a href="index.html">About Me</a>
                        </li>

                        <li class="menu-item">
                            <a href="{{route('resume')}}">Resume</a>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="portfolio.html">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="portfolio-2-columns.html">Portfolio 2 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio.html">Portfolio 3 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-4-columns.html">Portfolio 4 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="portfolio-5-columns.html">Portfolio 5 Columns</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="blog.html">Blog 2 Columns</a>
                                </li>
                                <li class="menu-item">
                                    <a href="blog-3-columns.html">Blog 3 Columns</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu-item">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Menu Toggle -->
                <a class="menu-toggle mobile-visible">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Mobile Menu Toggle -->
            </div>
        </header>
        <!-- /Header -->

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">
                    <div id="content" class="page-content site-content single-post" role="main">
                        <!-- Home Page Top Part -->
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12">
                                <div class="home-content">
                                    <div class="row flex-v-align">

                                        <div class="col-sm-12 col-md-5 col-lg-5">
                                            <div class="home-photo">
                                                <div class="hp-inner"
                                                     style="background-image: url({{"Site/img/main_photo.jpg"}});">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-7 col-lg-7">
                                            <div class="home-text hp-left">
                                                <div class="owl-carousel text-rotation">
                                                    <div class="item">
                                                        <h4>backend-developer</h4>
                                                    </div>

                                                    <div class="item">
                                                        <h4>Web developer</h4>
                                                    </div>
                                                </div>

                                                <h1>Ali Qadimi</h1>
                                                <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean
                                                    convallis, risus non condimentum gravida, odio mauris ullamcorper
                                                    felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna,
                                                    a placerat sapien pretium eu.</p>

                                                <div class="home-buttons">
                                                    <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
                                                    <a href="#" target="_self" class="btn btn-secondary">Contact</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Home Page Top Part -->

                        <!-- Services -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="p-50"></div>

                                <div class="block-title">
                                    <h2>What I Do</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="info-list-w-icon">
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-display"></i>
                                        </div>

                                        <div class="ci-text">
                                            <h4>Web Design</h4>
                                            <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris
                                                convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia
                                                maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus
                                                ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <div class="info-list-w-icon">
                                    <div class="info-block-w-icon">
                                        <div class="ci-icon">
                                            <i class="linecons linecons-display"></i>
                                        </div>

                                        <div class="ci-text">
                                            <h4>web programing</h4>
                                            <p>Mauris neque libero, aliquet vel mollis nec, euismod sed tellus. Mauris
                                                convallis dictum elit id volutpat. Vivamus blandit, dolor vitae lacinia
                                                maximus, risus velit vehicula odio, a tincidunt turpis turpis tempus
                                                ex.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Services -->

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="p-20"></div>

                                <!-- Testimonials -->
                                <div class="block-title">
                                    <h2>Testimonials</h2>
                                </div>

                                <div id="testimonials_1" class="testimonials owl-carousel" data-mobile-items="1"
                                     data-tablet-items="2" data-items="2">
                                    <!-- Testimonial 1 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{"Site/img/testimonials/testimonial-1.jpg"}}"
                                                     alt="Billy Adams"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Donec eu est vel metus consequat volutpat. Nunc aliquet euismod
                                                    mauris, a feugiat urna ullamcorper non.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Billy Adams</h5>
                                                <p class="testimonial-firm">Rolling Thunder</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                    </div>
                                    <!-- End of Testimonial 1 -->

                                    <!-- Testimonial 2 -->
                                    <div class="testimonial-item">
                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{"Site/img/testimonials/testimonial-2.jpg"}}"
                                                     alt="Gary Johnson"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Nam tempor commodo mi id sodales. Aenean sit amet nibh nec sapien
                                                    consequat porta a sit amet diam.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Gary Johnson</h5>
                                                <p class="testimonial-firm">Locost Accessories</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->
                                    </div>
                                    <!-- End of Testimonial 2 -->

                                    <!-- End of Testimonial 3 -->
                                    <div class="testimonial-item">

                                        <!-- Testimonial Content -->
                                        <div class="testimonial-content">
                                            <!-- Picture -->
                                            <div class="testimonial-picture">
                                                <img src="{{"Site/img/testimonials/testimonial-3.jpg"}}"
                                                     alt="Daniel Pringle"/>
                                            </div>
                                            <!-- /Picture -->

                                            <!-- Testimonial Text -->
                                            <div class="testimonial-text">
                                                <p>Etiam pretium ipsum quis justo dictum accumsan. Phasellus egestas
                                                    odio a velit scelerisque.</p>
                                            </div>
                                            <!-- /Testimonial Text -->

                                            <!-- Testimonial author information -->
                                            <div class="testimonial-author-info">
                                                <h5 class="testimonial-author">Daniel Pringle</h5>
                                                <p class="testimonial-firm">Sagebrush</p>
                                            </div>
                                            <!-- /Testimonial author information -->

                                            <div class="testimonial-icon">
                                                <i class="fa fa-quote-left"></i>
                                            </div>

                                            <div class="testimonial-icon-big">
                                                <i class="fa fa-quote-right"></i>
                                            </div>
                                        </div>
                                        <!-- /Testimonial Content -->

                                    </div>
                                    <!-- End of Testimonial 3 -->
                                </div>
                                <!-- /Testimonials -->

                                <div class="p-40"></div>


                            </div>
                        </div>


                        <div class="p-40"></div>


                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer clearfix">
            <div class="footer-social">
                <ul class="footer-social-links">
                    <li>
                        <a href="#" target="_blank">Twitter</a>
                    </li>

                    <li>
                        <a href="#" target="_blank">Facebook</a>
                    </li>

                    <li>
                        <a href="#" target="_blank">Instagram</a>
                    </li>
                </ul>
            </div>

            <div class="footer-copyrights">
                <p>© 2020 All rights reserved. LMPixels.</p>
            </div>
        </footer>
        <!-- /Footer -->

    </div>
</div>

<script src="{{asset('Site/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('Site/js/imagesloaded.pkgd.min.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{asset('Site/js/bootstrap.min.js')}}"></script>
<script src='{{asset('Site/js/jquery.shuffle.min.js')}}'></script>
<script src='{{asset('Site/js/masonry.pkgd.min.js')}}'></script>
<script src='{{asset('Site/js/owl.carousel.min.js')}}'></script>
<script src="{{asset('Site/js/jquery.magnific-popup.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
<script src="{{asset('Site/js/jquery.googlemap.js')}}"></script>
<script src="{{asset('Site/js/validator.js')}}"></script>
<script src="{{asset('Site/js/main.js')}}"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"76646774da92549d","version":"2022.11.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}'
        crossorigin="anonymous"></script>
</body>
</html>
