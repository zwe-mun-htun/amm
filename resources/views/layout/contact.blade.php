<?php
$single_master = Config::get('app_config.blade.user_master');
?>
@extends($single_master)

@section('content')



<div class="hero-wrap js-fullheight" style="background-color: goldenrod">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Get in touch with us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span>Kyan Mar Yay Seik Kan Compound, Corner of Pansodan Road and South of Kannar Road, Seikkan Township 11181 Yangon </p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">09693560271, 09751782245</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:b2b@ravenmm.digital">b2b@ravenmm.digital</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Website</span> <a href="#">http://www.aroundmm.com</a></p>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last pr-md-5">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6">
                <iframe  id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61110.64005498254!2d96.15438257180847!3d16.805755837877022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed7e4959337b%3A0x4bf5ccc4dae9b3d8!2sAroundMM!5e0!3m2!1sen!2smm!4v1572031721571!5m2!1sen!2smm" width="400" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>
    @endsection





