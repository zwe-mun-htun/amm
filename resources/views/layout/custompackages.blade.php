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
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Custom Packages and Car Rental Services</h1>
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
                <p><span>Phone:</span> <a href="tel://1234567920">09 693 560271</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">b2b@ravenmm.digital</a></p>
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
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <select name="package_id" id="activities" class="form-control" style="font-family:Pyidaungsu; padding: 20px;">
                            <optgroup label="Request Type">

                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inp_long_desc">Full description</label>
                        <textarea class="form-control" name="desc" id="inp_long_desc" rows="6" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>

@endsection