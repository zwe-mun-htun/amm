
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Around MM | Domestic Tour Packages, Hotels, Buses around Myanmar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="AroundMM Tour Platform" />
    <meta name="description" content="AroundMM is online travel booking platform in Myanmar, provide tour packages, hotel booking and bus tickets.">

    <meta property="og:url" content="{{URL::to('/')}}" />

    <meta property="og:description" content="AroundMM is online travel booking platform in Myanmar, provide tour packages, hotel booking and bus tickets.">

    <meta property="og:image" content="{{URL::to('images/logo-x.jpg')}}">

    @yield("title_meta")
    <title>AroundMM Tour Platform</title>
    @include('layout.include.user_header')
    @yield('css')

</head>
<body>

@include('layout.include.user_nav')

@yield('content')

@include('layout.include.user_footer')

@yield('script')
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