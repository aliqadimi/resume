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

                    <div class="page-title">
                        <h1>Blog</h1>
                        <div class="page-subtitle">
                            <h4> My Diary</h4>
                        </div>
                    </div>

                    <div id="content" class="page-content site-content single-post" role="main">

                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 ">

                                <div class="blog-masonry three-columns clearfix">
                                    <!-- Blog Post 1 -->
                                    <div class="item">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <div class="category">
                                                    <a href="#" title="View all posts in WordPress">WordPress</a>
                                                </div>
                                                <a href="blog-post-1.html">
                                                    <img src="/Site/img/blog/blog_post_1.jpg"
                                                         alt="How to Make a WordPress Plugin Extensible" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">04 Dec 2019</div>
                                                <a href="blog-post-1.html">
                                                    <h4 class="blog-item-title">How to Make a WordPress Plugin
                                                        Extensible</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Blog Post 1 -->

                                    <!-- Blog Post 2 -->
                                    <div class="item">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <div class="category">
                                                    <a href="#" title="View all posts in Design">Design</a>
                                                </div>

                                                <a href="blog-post-1.html">
                                                    <img src="/Site/img/blog/blog_post_2.jpg"
                                                         alt="6 Easy Steps to Better Icon Design" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">04 Dec 2019</div>
                                                <a href="blog-post-1.html">
                                                    <h4 class="blog-item-title">6 Easy Steps to Better Icon Design</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Blog Post 2 -->

                                    <!-- Blog Post 3 -->
                                    <div class="item">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <div class="category">
                                                    <a href="#" title="View all posts in UI">UI</a>
                                                </div>
                                                <a href="blog-post-1.html">
                                                    <img src="/Site/img/blog/blog_post_3.jpg"
                                                         alt="Creative and Innovative Navigation Designs" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">04 Dec 2019</div>
                                                <a href="blog-post-1.html">
                                                    <h4 class="blog-item-title">Creative and Innovative Navigation
                                                        Designs</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Blog Post 3 -->
                                </div>

                                <a class="btn btn-primary" href="#">See All Posts</a>
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
@include('Site.layouts.script')
</body>
</html>
