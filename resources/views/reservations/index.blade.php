<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/favicon.png" type="image/png">
    <title>Mavela-rentals</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/linericon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/lightbox/simpleLightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/animate-css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/flaticon/flaticon.css') }}" rel="stylesheet">



    <!-- main css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body>

<!--================Header Menu Area =================-->
<header class="header_area">
    <div class="top_menu">
        <div class="container">
            <div class="top_inner">
                <div class="float-left" style="margin-left: 230px">
                    <a href="#"><i class="fa fa-phone"></i>  +233 24 880 4343</a>
                    <a href="#"><i class="fa fa-envelope"></i>  info@mavela-rentals.com</a>
                    <a href="#"><i class="fa fa-address-book"></i>  #21 Avenue C, North Legon, Accra</a>
                </div>
           {{--     <div class="float-right">
                    <ul class="list header_socila">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>--}}
            </div>
        </div>
    </div>
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="#"><img src="img/logo-marvel-rentals.png" alt=""><img src="img/logo-marvel-rentals.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/cars')}}">Our cars</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>  DETAILS</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="single-blog.html"> DETAILS</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<form action="{{URL::to('/reservation')}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recapitulation</h3>
                            <blockquote class="generic-blockquote">
                                <label>Hello</label>
                                {{Session()->get('name')}}
                                {{Session()->get('lastname')}}
                                <br>
                                <label>Price Per day: </label> {{Session()->get('price')}} $
                                <br>
                                <label>Number of day:</label> {{Session()->get('diff')}}
                                <br>
                                <label>Total USD :</label> {{Session()->get('tot')}} $
                                <br>
                                <label>Total Cedis :</label> {{Session()->get('dollar')}} ghs
                            </blockquote>

                            <div class="br"></div>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-8 posts-list">
                    <div class="comment-form" style="margin-top: 0px;">
                        <h4 style="color: #faba00; font-weight: bold">Payment</h4>
                        {{--<div class="form-group form-inline">
                            <div class="form-group col-lg-6 col-md-6 name">
                                <label>First day of rental period</label><span style="color: red">*</span>
                                <input type="date" class="form-control" id="date_rent" name="date_rent" required>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 name">
                                <label>Last day of rental period</label><span style="color: red">*</span>
                                <input type="date" class="form-control" id="date_return" name="date_return" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pick-up time</label><span style="color: red">*</span>
                            <input type="time" class="form-control" id="time_pick" name="time_pick" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pick-up location</label><span style="color: red">*</span>
                            <input type="text" class="form-control" id="location_pick"  name="location_pick" required>
                        </div>
                        <div style="text-align: center; margin-top: 14px;">
                            <button type="submit" class="primary-btn submit_btn">Save</button>
                        </div>--}}
                    </div>

                </div>


            </div>

        </div>
        </div>

    </section>

</form>
<!--================Blog Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                    <div class="f_title">
                        <h3>About Us</h3>
                    </div>
                    <p>At MAVELA RENTALS, from dawn to dusk, evening to morning, whenever you want to go, we are always at your service with a comprehensive fleet of all sorts of finest cars. Be it a joyride or for a business purpose, for a day or for a month or for any period, call us to rent a car and leave all your transportation worries.</p>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </aside>
            </div>
            <div class="col-lg-2 col-sm-6">
                <aside class="f_widget news_widget">
                    {{--    <div class="f_title">
                            <h3>Newsletter</h3>
                        </div>
                        <p>Stay updated with our latest news</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>--}}
                </aside>
            </div>
            <div class="col-lg-4">
                <aside class="f_widget social_widget">
                    <div class="f_title">
                        <h3>Call Us</h3>
                    </div>
                    <p>contact: +233 24 880 4343</p>
                    <p>info@mavela-rentals.com</p>
                    <p> #21 Avenue C, North Legon, Accra</p>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/stellar.js') }}"></script>
<script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
<script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>

<script src="{{ asset('vendors/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>


<!--gmaps Js-->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE') }}"></script>
<script src="{{ asset('js/gmaps.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>

<script src="{{ asset('js/jquery-min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>

<script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>

</body>
</html>