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

    <style>
        .banner_content h2 {
            text-shadow: 4px 4px 4px #000;
        }
        .banner_content p {
            text-shadow: 4px 4px 4px #000;
        }
    </style>
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
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
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
<section class="home_banner_area" style="background: url(../img/banner/header5.jpeg) no-repeat scroll center center;background-size: cover;">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner_content">
                        <h2>WE MAKE RENTING AS EASY AS A.B.C.</h2>
                        <p style="font-size: 15px;">
                            Rent a car with us today at our highly affordable prices & enjoy premium services.</p>
                        <a class="banner_btn" href="#services">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_box">
                        <div class="home_item">
                            <a href="{{url('/')}}"><i class="fa fa-home"></i></a>
                        </div>
                        <div class="home_item">
                           <a href="#services"><i class="fa fa-tasks"></i></a>
                        </div>
                        <div class="home_item">
                           <a  href="{{url('cars')}}"><i class="fa fa-automobile"></i></a>
                        </div>
                        <div class="home_item">
                            <a href="{{url('contact')}}"><i class="fa fa-phone-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->


<!--================Our Blog Area =================-->
<section class="our_blog_area p_120" id="services">
    <div class="container" >
        <div class="main_title">
            <h2>Our services</h2>
            <p>RENTING? OUR SERVICE QUALITY ARE UNMATCHED.</p>
            <p> We have a wide range of over 110 cars for all kinds of occasions, be it an executive car, holiday car, group travel cars or an everyday car, we have you covered.</p>
        </div>
        <div class="blog_inner row">
            @foreach ($vehicles as $vehicle)
            <div class="col-lg-4">
                <div class="o_blog_item">
                    <div class="blog_img">
                        <img class="img-fluid"  src="../storage/picture/{{$vehicle->picture}}" alt="" style="height: 230px;">
                    </div>
                    <div class="blog_text">
                        <div class="blog_cat">
                                <a class="active" href="{{ route('vehicles.edit', $vehicle->id) }}">Rent</a>
                                <a><span style="font-weight: bold">Price:</span> $ {{$vehicle->price}}/day</a>
                                <a><span style="font-weight: bold">Quantity:</span> {{$vehicle->quantity}}</a>
                        </div>
                        <a href="#"><h4>{{$vehicle->title}}</h4></a>
                        <p><b>Details</b></p>
                        <p>Fuel Type: {{$vehicle->fuel}}.</p>
                        <p>Number of Seats: {{$vehicle->seat}}</p>

                        <span>Year:</span> <b>{{$vehicle->year}}</b>

                        <br> <br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--================End Our Blog Area =================-->

<!--================Footer Area =================-->
<footer class="footer_area p_120">
    <div class="container">
        <div class="row footer_inner">
            <div class="col-lg-6 col-sm-6">
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
                  {{--  <div class="f_title">
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
                    <p>contact:  +233 24 880 4343</p>
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