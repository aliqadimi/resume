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
    @include('Site.layouts.header')
    <!-- /Header -->

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">

                    <div class="page-title">
                        <h1>Resume</h1>
                        <div class="page-subtitle">
                            <h4> 3 Years of Experience</h4>
                        </div>
                    </div>

                    <div id="content" class="page-content site-content single-post" role="main">
                        <div class="row">

                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Education</h2>
                                </div>

                                <div id="timeline_1" class="timeline clearfix">
                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2019</h5>
                                        <span class="item-company">University of net college bartar</span>
                                        <h4 class="item-title">web developer</h4>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Experience</h2>
                                </div>

                                <div id="timeline_2" class="timeline clearfix">
                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period current">2022 - Current</h5>
                                        <span class="item-company">Viola Payment</span>
                                        <h4 class="item-title">Backend Developer</h4>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2021 - 2022</h5>
                                        <span class="item-company">Web Chare</span>
                                        <h4 class="item-title">Backend Developer</h4>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <h5 class="item-period ">2020 - 2021</h5>
                                        <span class="item-company">Freelancer</span>
                                        <h4 class="item-title">Web Design</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">
                                <div class="p-40"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Coding Skills</h2>
                                </div>

                                <div id="skills_1" class="skills-info skills-first-style">
                                    <!-- Skill 1 -->
                                    <div class="clearfix">
                                        <h4>Html/Css</h4>
                                        <div class="skill-value">100%</div>
                                    </div>

                                    <div id="skill_1" data-value="100" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 1 -->

                                    <!-- Skill 2 -->
                                    <div class="clearfix">
                                        <h4>Bootstrap</h4>
                                        <div class="skill-value">75%</div>
                                    </div>

                                    <div id="skill_2" data-value="75" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 2 -->

                                    <!-- Skill 3 -->
                                    <div class="clearfix">
                                        <h4>Javascript</h4>
                                        <div class="skill-value">85%</div>
                                    </div>
                                    <div id="skill_3" data-value="85" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- Skill 3 -->

                                    <div class="clearfix">
                                        <h4>Docker</h4>
                                        <div class="skill-value">65%</div>
                                    </div>
                                    <div id="skill_3" data-value="65" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <div class="clearfix">
                                        <h4>Php</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_3" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <div class="clearfix">
                                        <h4>WordPress</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_3" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                </div>

                            </div>


                            <div class=" col-xs-12 col-sm-6 ">
                                <div class="block-title">
                                    <h2>Coding Skills</h2>
                                </div>


                                <div id="skills_2" class="skills-info skills-first-style">
                                    <!-- Skill 6 -->
                                    <div class="clearfix">
                                        <h4>Design Pattern</h4>
                                        <div class="skill-value">80%</div>
                                    </div>
                                    <div id="skill_6" data-value="80" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 6 -->
                                    <!-- Skill 6 -->
                                    <div class="clearfix">
                                        <h4>OOP</h4>
                                        <div class="skill-value">79%</div>
                                    </div>
                                    <div id="skill_6" data-value="79" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 6 -->

                                    <!-- Skill 7 -->
                                    <div class="clearfix">
                                        <h4>Laravel</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_7" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 7 -->

                                    <!-- Skill 8 -->
                                    <div class="clearfix">
                                        <h4>Livewire</h4>
                                        <div class="skill-value">85%</div>
                                    </div>
                                    <div id="skill_8" data-value="85" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 8 -->
                                    <!-- Skill 9 -->
                                    <div class="clearfix">
                                        <h4>RestFull Api</h4>
                                        <div class="skill-value">90%</div>
                                    </div>
                                    <div id="skill_9" data-value="90" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 9 -->
                                    <!-- Skill 10 -->
                                    <div class="clearfix">
                                        <h4>TDD</h4>
                                        <div class="skill-value">75%</div>
                                    </div>
                                    <div id="skill_10" data-value="75" class="skill-container">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- /Skill 10 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
