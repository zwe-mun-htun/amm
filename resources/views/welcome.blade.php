<?php
$single_master = Config::get('app_config.blade.user_master');
?>
@extends($single_master)

        @section('content')

            <div class="hero-wrap js-fullheight" style="background-image: url('images/cover1.jpg'); ">
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '100%' }">
                            <h1 class="mb-6" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Explore <br>Myanmar</h1>
                            <p data-scrollax="properties: { translateY: '10%', opacity: 1.6 }">Feel and explore the beauty of Myanmar</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="ftco-section justify-content-end ftco-search">
                <div class="container-wrap ml-auto">
                    <div class="row no-gutters">
                        <div class="col-md-10 tab-wrap">

                            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                    <form action="#" class="search-destination">
                                        <div class="row">
                                            <div class="col-md align-items-end">
                                                <div class="form-group">
                                                    <label for="#">From</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-my_location"></span></div>
                                                        <input type="text" class="form-control" placeholder="From">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md align-items-end">
                                                <div class="form-group">
                                                    <label for="#">Where</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control" placeholder="Where">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md align-items-end">
                                                <div class="form-group">
                                                    <label for="#">Check In</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control checkin_date" placeholder="Check In">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md align-items-end">
                                                <div class="form-group">
                                                    <label for="#">Check Out</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="icon-map-marker"></span></div>
                                                        <input type="text" class="form-control checkout_date" placeholder="From">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md align-items-end">
                                                <div class="form-group">
                                                    <label for="#">Travelers</label>
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                            <select name="" id="" class="form-control">
                                                                <option value="">1</option>
                                                                <option value="">2</option>
                                                                <option value="">3</option>
                                                                <option value="">4</option>
                                                                <option value="">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md align-self-end">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--<section class="ftco-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="intro ftco-animate">
                                <h3><span>01</span> Work</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="intro ftco-animate">
                                <h3><span>02</span>Save</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="intro ftco-animate">
                                <h3><span>03</span> Travel</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">Our Recently Packages</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="destination-entry img" style="background-image: url(images/destination-1.jpg);">
                                <div class="text text-center">
                                    <h3>Bagan</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="destination-entry img" style="background-image: url(images/destination-2-1.jpg);">
                                <div class="text text-center">
                                    <h3>Taunggyi</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="destination-entry img" style="background-image: url(images/destination-3.jpg);">
                                <div class="text text-center">
                                    <h3>Mandalay</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section services-section bg-light">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-yatch"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Special Activities</h3>
                                    <p>Special activities like  Walking Tour Programs ,Tour Guide Training program and other tour activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-around"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Travel Arrangements</h3>
                                    <p> We can plan  your desire tour plan , tickets services , hotels booking  and other special customize services for individuals. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-compass"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Tour Guide</h3>
                                    <p>We use only guide who has certified tour license and well educated in Tourism sectors. They have special skills in customer services and hospitality for our customers .Then we give training program to the  fresh tour guide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-map-of-roads"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Car Rental Services</h3>
                                    <p>We can give car rental services for inbound and outbound tour with fair prices. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">Most Popular Packages</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm col-md-3 col-sm ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-link"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="#">Bagan</a></h3>
                                            <p class="rate">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half-o"></i>
                                                <span>8 Rating</span>
                                            </p>
                                        </div>
                                        <div class="two">
                                            <span class="price">85000MMK</span>
                                        </div>
                                    </div>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <p class="days"><span>2 days 3 nights</span></p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> San Franciso, CA</span>
                                        <span class="ml-auto"><a href="{{URL('package_details')}}">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2><strong>Tips</strong> &amp; Articles</h2>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text">
                                    <span class="tag">Tips, Travel</span>
                                    <h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
                                    <div class="meta mb-3">
                                        <div><a href="#">October 3, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
                                </a>
                                <div class="text">
                                    <span class="tag">Culture</span>
                                    <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <div class="meta mb-3">
                                        <div><a href="#">October 3, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
                                </a>
                                <div class="text">
                                    <span class="tag">Tips, Travel</span>
                                    <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                                    <div class="meta mb-3">
                                        <div><a href="#">October 3, 2018</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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

        @endsection
