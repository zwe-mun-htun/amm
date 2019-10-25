<?php
$single_master = Config::get('app_config.blade.user_master');
?>
@extends($single_master)
        @section('content')

            <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                        <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Story</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="ftco-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="intro">
                                <h3><span>01</span> Work</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="intro">
                                <h3><span>02</span> Save</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="intro">
                                <h3><span>03</span> Travel</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text">
                                            <strong class="number" data-number="50">0</strong>
                                            <span>Happy Customers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text">
                                            <strong class="number" data-number="10">0</strong>
                                            <span>Destination Places</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                    <div class="block-18 text-center">
                                        <div class="text">
                                            <strong class="number" data-number="7">0</strong>
                                            <span>Partners</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-about d-md-flex">
                <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
                <div class="one-half ftco-animate">
                    <div class="heading-section ftco-animate ">
                        <h2 class="mb-4">The Best Tour Platform</h2>
                    </div>
                    <div>
                        <p>In Myanmar, Travel and tours companies are running on facebook and they are difficult to get customers. As a travelers, there are many tour packages so they cannot choose right and fair packages. So we,Around MM developed tour platform in Myanmar to provide travelers with fair prices and excellent services. We offer other services like tour guide and car rental services. </p>
                    </div>
                </div>
            </section>

            <!--<section class="ftco-section testimony-section">
              <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                  <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Our satisfied customer says</h2>
                    <p>Want to get  once more chances to travel with us</p>
                  </div>
                </div>
                <div class="row ftco-animate">
                  <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Mark Web</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Mark Web</p>
                            <span class="position">Interface Designer</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Mark Web</p>
                            <span class="position">UI Designer</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Mark Web</p>
                            <span class="position">Web Developer</span>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                          <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                            <span class="quote d-flex align-items-center justify-content-center">
                              <i class="icon-quote-left"></i>
                            </span>
                          </div>
                          <div class="text">
                            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <p class="name">Mark Web</p>
                            <span class="position">System Analyst</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>-->

            <section class="ftco-section services-section bg-light">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-yatch"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Special Acivities</h3>
                                    <p>Special activities like  Walking Tour Programs ,Tour Guide Training program and other tour activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block">
                                <div class="icon"><span class="flaticon-around"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Travel Arrangements</h3>
                                    <p>We can plan  your desire tour plan , tickets services , hotels booking  and other special customize services for individuals.</p>
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
                                    <h3 class="heading mb-3">Car Rental  Services</h3>
                                    <p>We can give car rental services for inbound and outbound tour with fair prices.</p>
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
                                <h2>You can give feedback</h2>
                                <p>Give us feedback to improve </p>
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







