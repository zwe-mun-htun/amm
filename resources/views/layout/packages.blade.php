<!DOCTYPE html>
<html lang="en">
<head>
    <title>Around MM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{URL::to('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/')}}">AroundMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="{{URL::to('packages')}}" class="nav-link">Packages</a></li>
                <li class="nav-item "><a href="{{URL::to('custompackages')}}" class="nav-link">Custom Packages</a></li>
                <li class="nav-item"><a href="{{URL::to('about')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{URL::to('contact')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Packages</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar order-md-last ftco-animate">
                <div class="sidebar-wrap ftco-animate">
                    <h3 class="heading mb-4">Find Packages</h3>
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Insert Keywords">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Date from">
                            </div>
                            <div class="form-group">
                                <input type="text" id="checkout_date" class="form-control checkout_date" placeholder="Date to">
                            </div>
                            <div class="form-group">
                                <div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
                                    <input value="1000" min="0" max="120000" step="500" type="range"/>
                                    <input value="50000" min="0" max="120000" step="500" type="range"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="sidebar-wrap ftco-animate">
                    <h3 class="heading mb-4">Star Rating</h3>
                    <form method="post" class="star-rating">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">
                                <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
                            </label>
                        </div>
                    </form>
                </div>
            </div><!-- END-->
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                        <div class="destination">
                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-3.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-link"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="d-flex">
                                    <div class="one">
                                        <h3><a href="#">Paris, Italy</a></h3>
                                        <p class="rate">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i>
                                            <span>8 Rating</span>
                                        </p>
                                    </div>
                                    <div class="two">
                                        <span class="price">$200</span>
                                    </div>
                                </div>
                                <p>Far far away, behind the word mountains, far from the countries</p>
                                <p class="days"><span>2 days 3 nights</span></p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                    <span class="ml-auto"><a href="{{URL::to('package_details')}}">Discover</a></span>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section> <!-- .section -->

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Send Feedback</h2>
                    <p>Send feedback to improve more</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Send" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Around MM</h2>
                    <p>In Myanmar, Travel and tours companies are running on facebook and they are difficult to get customers. As a travelers, there are many tour packages so they cannot choose right and fair packages. So we,Around MM developed tour platform in Myanmar to provide travelers with fair prices and excellent services. We offer other services like tour guide and car rental services. </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About Us</a></li>
                        <li><a href="#" class="py-2 d-block">Call Us</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                        <li><a href="#" class="py-2 d-block">Refund policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Kyan Mar Yay Seik Kan Compound, Corner of Pansodan Road and South of Kannar Road, Seikkan Township 11181 Yangon</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">09 693 560271</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">b2b@ravenmm.digital</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  by <a href="http://www.ravenmm.digital" target="_blank">Raven MM</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{URL::to('js/jquery.min.js')}}"></script>
<script src="{{URL::to('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{URL::to('js/popper.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL::to('js/jquery.waypoints.min.js')}}"></script>
<script src="{{URL::to('js/jquery.stellar.min.js')}}"></script>
<script src="{{URL::to('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::to('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL::to('js/aos.js')}}"></script>
<script src="{{URL::to('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{URL::to('js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::to('js/jquery.timepicker.min.js')}}"></script>
<script src="{{URL::to('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{URL::to('js/google-map.js')}}"></script>
<script src="{{URL::to('js/main.js')}}"></script>

</body>
</html>