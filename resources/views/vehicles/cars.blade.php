<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
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
<style>

    .categories_details:after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        transition: opacity 0.3s ease-in-out;
    }

    .categories_text {
        display: flex;
        margin-top: 240px;
    }

    .categories_details:hover{
        transform: scale(1.2, 1.2);
    }

    .categories_details{
        top: 0px !important;left: 0px !important;right: 0px !important; min-height: 220px;
        position: relative;
        display: inline-block;
        width: 100px;
        height: 100px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.15);
        transition: all 0.3s ease-in-out;
        background: none !important;
        min-width: 100%;
    }

    /* Fade in the pseudo-element with the bigger shadow */
    .categories_details:hover:after {
        opacity: 1;
    }

</style>
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
            </div>
        </div>
    </div>
    <div class="main_menu" id="mainNav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="#"><img src="img/logo-02.png" alt=""><img src="img/logo-02.png" alt=""></a>
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
<section class="home_banner_area blog_banner">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="background: url(../img/banner/header1.jpg) no-repeat scroll center center; background-size: cover"></div>
        <div class="container">
            <div class="blog_b_text text-center">
                <h2 style="font-size: 36px; text-shadow: 4px 4px 4px #000;">RENTING? OUR SERVICE QUALITIES ARE UNMATCHED</h2>
                <p style="text-shadow: 4px 4px 4px #000;">We have a wide range of over 110 cars for all kinds of occasions, be it an executive car, holiday car, group travel cars or an everyday car, we have you <covered class=""></covered></p>
                <a class="white_bg_btn" href="#blog_categorie_area">View More</a>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area" id="blog_categorie_area">
    <div class="container">
        <div class="row">
            @foreach ($vehicles as $vehicle)
            <div class="col-lg-4" style="margin-top: 40px;">
                <div class="categories_post">
                    <img src="../storage/picture/{{$vehicle->picture}}" alt="post" style="height: 220px">
                    <div class="categories_details" style="">
                        <div class="categories_text">
                            <a href="#"><h5 style="color: #000; font-size: 12px">{{$vehicle->title}}</h5></a>
                            <b style="margin-right: 4px;margin-left: 4px; color: #000"> | </b>
                            <p style="color: #000; font-size: 12px">Quantity: {{$vehicle->quantity}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->


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
</body>
</html>