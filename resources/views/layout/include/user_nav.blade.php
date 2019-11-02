<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{URL::to('/')}}">AroundMM.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{URL::to('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="{{URL::to('packages')}}" class="nav-link">Tour Packages</a></li>
                <li class="nav-item"><a href="{{URL::to('bus_tickets')}}" class="nav-link">Bus Tickets</a></li>
                <li class="nav-item"><a href="{{URL::to('hotels')}}" class="nav-link">Hotels</a></li>
                <li class="nav-item"><a href="{{URL::to('car_rentals')}}" class="nav-link">Car Rental</a></li>
            </ul>
        </div>
    </div>
</nav>
