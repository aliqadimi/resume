<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AliQadimi-Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="AliQadimi-Resume"/>
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, portfolio"/>
    <meta name="author" content="qadimi"/>
    @include('Site.layouts.css')
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
    @include('Site.layouts.header')
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
                                                    <a href="{{route('download')}}" target="_blank"
                                                       class="btn btn-primary">Download CV</a>
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
                                    @if($feedbacks == null)
                                        @foreach($feedbacks  as $feedback)
                                            <div class="testimonial-item">
                                                <!-- Testimonial Content -->
                                                <div class="testimonial-content">
                                                    <!-- Picture -->
                                                    <div class="testimonial-picture">
                                                        <img
                                                            src="{{asset('/uploads/UserProfile/'. $feedback->userimage($feedback->user_id)  )}}"
                                                            alt="{{$feedback->username($feedback->user_id)}}"/>
                                                    </div>
                                                    <!-- /Picture -->

                                                    <!-- Testimonial Text -->
                                                    <div class="testimonial-text">
                                                        <p>{{$feedback->description}}</p>
                                                    </div>
                                                    <!-- /Testimonial Text -->

                                                    <!-- Testimonial author information -->
                                                    <div class="testimonial-author-info">
                                                        <h5 class="testimonial-author">{{$feedback->username($feedback->user_id)}}</h5>
                                                        <p class="testimonial-firm">{{$feedback->userrole($feedback->user_id)}}</p>
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
                                        @endforeach
                                    @else
                                        <p>doesnt exits</p>
                                @endif
                                <!-- End of Testimonial 1 -->
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

@include('Site.layouts.script')
</body>
</html>
