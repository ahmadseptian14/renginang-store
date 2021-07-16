<section class="h-100 w-100" style="
    box-sizing: border-box;
    position: relative;
    background-image: linear-gradient(to right, rgba(255, 252, 250, 1), rgba(255, 255, 255, 1));
   ">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-2 .modal-backdrop.show {
            background-color: #000;
            opacity: 0.6;
        }

        .header-3-2 .modal-item.modal {
            top: 2rem;
        }

        .header-3-2 .navbar {
            padding: 2rem 2rem;
        }

        .header-3-2 .navbar-light .navbar-nav .nav-link {
            font: 300 0.875rem/1.5rem Poppins, sans-serif;
            color: #303030;
            padding: 0rem 1.25rem 0rem 0rem;
            margin-right: 0;
            margin-left: 0;
        }

        .header-3-2 .navbar-light .navbar-nav .nav-link:hover {
            font: 500 0.875rem/1.5rem Poppins, sans-serif;
            color: #243142;
        }

        .header-3-2 .navbar-light .navbar-nav .active {
            position: relative;
            width: fit-content;
        }

        .header-3-2 .navbar-light .navbar-nav .active>.nav-link,
        .header-3-2 .navbar-light .navbar-nav .nav-link.active,
        .header-3-2 .navbar-light .navbar-nav .nav-link.show,
        .header-3-2 .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 500;
        }

        .header-3-2 .navbar-light .navbar-toggler-icon {
            background-image: urlurl("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-3-2 .btn:focus,
        .header-3-2 .btn:active {
            outline: none !important;
        }

        .header-3-2 .btn-fill {
            font: 500 0.875rem/1.25rem Poppins, sans-serif;
            border: 1px solid black;
            background-color: black;
            border-radius: 999px;
            padding: 0.75rem 1.5rem;
            transition: 0.3s;
        }

        .header-3-2 .btn-fill:hover {
            background-color: black;
            border: 1px solid black;
        }

        .header-3-2 .btn-no-fill {
            font: 500 0.875rem/1.25rem Poppins, sans-serif;
            color: #303030;
            padding: 0.75rem 2rem;
        }

        .header-3-2 .btn-no-fill:hover {
            color: #243142;
        }

        .header-3-2 .modal-item .modal-dialog .modal-content {
            border-radius: 8px;
        }

        .header-3-2 .responsive li {
            padding: 1rem;
        }

        .header-3-2 .hr {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .header-3-2 .hero {
            padding: 4rem 2rem;
        }

        .header-3-2 .left-column {
            margin-bottom: 0.75rem;
            width: 100%;
        }

        .header-3-2 .title-text-big {
            font: 600 2.25rem / normal Poppins, sans-serif;
            margin-bottom: 1.25rem;
            color: #243142;
        }

        .header-3-2 .text-caption {
            font: 300 1rem/1.5rem Poppins, sans-serif;
            letter-spacing: 0.025em;
            color: #303030;
            margin-bottom: 5rem;
        }

        .header-3-2 .btn-get {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 2rem;
            border-radius: 999px;
            border: 1px solid black;
            background-color: black;
            transition: 0.3s;
        }

        .header-3-2 .btn-get:hover {
            background-color: black;
            border: 1px solid black;
        }

        .header-3-2 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.5rem;
            border-radius: 999px;
            background-color: transparent;
            border: 1px solid #5d6e86;
            color: #5d6e86;
            transition: 0.3s;
        }

        .header-3-2 .btn-outline:hover {
            border: 1px solid black;
            color: black;
        }

        .header-3-2 .btn-outline:hover div path {
            fill: black;
        }

        .header-3-2 .btn-outline:hover div rect {
            stroke: black;
        }

        .header-3-2 .right-column {
            width: 100%;
        }

        .header-3-2 .hero-right {
            right: 2rem;
            bottom: 0;
        }

        .header-3-2 .card-outer {
            padding-left: 0;
            z-index: 1;
        }

        .header-3-2 .card {
            transition: 0.4s;
            top: 0px;
            left: 0px;
            background-color: #FFFFFF;
            padding: 1.25rem;
            border-radius: 0.75rem;
            width: 100%;
            margin-top: 2.5rem;
            box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
        }

        .header-3-2 .card:hover {
            top: -3px;
            left: -3px;
            transition: 0.4s;
            box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
        }

        .header-3-2 .card-name {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            margin-bottom: 0.25rem;
        }

        .header-3-2 .card-job {
            font: 300 0.75rem/1rem Poppins, sans-serif;
            color: #aaa6a6;
            margin-bottom: 0;
        }

        .header-3-2 .card-price-left {
            font: 500 1rem/1.5rem Poppins, sans-serif;
            margin-bottom: 0.125rem;
            color: black;
        }

        .header-3-2 .card-caption {
            font: 300 0.75rem/1rem Poppins, sans-serif;
            color: #aaa6a6;
            margin-bottom: 0;
        }

        .header-3-2 .card-price-right {
            font: 500 1rem/1.5rem Poppins, sans-serif;
            margin-bottom: 0.125rem;
            color: #1b8171;
        }

        .header-3-2 .btn-hire {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 0.75rem 4rem;
            border-radius: 0.75rem;
            margin-bottom: 0.125rem;
            border: 1px solid black;
            background-color: black;
            transition: 0.3s;
        }

        .header-3-2 .btn-hire:hover {
            background-color: black;
            border: 1px solid black;
        }

        .header-3-2 .form {
            border-radius: 999px;
            background-color: #fff3f2;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0rem 1rem;
            padding-right: 0.5rem;
            outline: none;
        }

        .header-3-2 .form div input[type="text"] {
            background-color: #fff3f2;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0rem 0.5rem;
            outline: none;
            width: 100%;
        }

        .header-3-2 .center-search {
            bottom: 0.5rem;
        }

        .header-3-2 .hero-right-1 {
            width: 500px;
            height: 350px;
            box-shadow: 20px 20px black;
            margin-left: 100px;
        }

        .header-3-2 .title-text-big {
            font-size: 3.75rem;
            line-height: 1.25;
        }

        .cart-badge {
            display: inline-block;
            min-width: 2em;
            /* em unit */
            padding: 0.0em;
            em unit padding-right: 15px;
            border-radius: 50%;
            font-size: 15px;
            text-align: center;
            background: black;
            font-weight: bold;
            color: #fefefe;
            margin-left: -10px;
        }

        @media (max-width: 1023px) {
            .header-3-2 .form div input[type="text"] {
                width: 100%;
            }
        }

    </style>
    <div class="header-3-2 container-xxl mx-auto p-0 " style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="logo" style="text-decoration: none; color: #000; font-weight: bold;">
                Renginang Store
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Mobile -->
            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content bg-white border-0">
                        <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                            <a class="modal-title" id="targetModalLabel"
                                style="text-decoration: none; color: #000; font-weight: bold;">
                                Renginang Store
                            </a>
                            <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                            <ul class="navbar-nav responsive ml-auto mt-2 mt-lg-0">
                                <li class="nav-item active position-relative">
                                    <a class="nav-link main" style="color: #243142;"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="#">Our Team</a>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                            <button class="btn btn-default btn-no-fill">Sign In</button>
                            <button class="btn btn-fill text-white">Register</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav mt-2 mt-lg-0" style="margin-left: auto;">
                    <li class="nav-item active position-relative">
                        <a class="nav-link main=" style="color: #243142;" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#">Our Team</a>
                    </li>
                </ul>
                @if (Auth::user())
                    <div class="dropdown">
                        <a class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false" style="text-decoration: none; color: black">
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"">Logout</a>
                      
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('cart') }}" class="nav-link" style="margin-left: 20px">
                                @php
                                    $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                                @endphp
                                @if ($carts > 0)
                                    <img src="{{ asset('image/shopping-cart.png') }}" width="40px" />
                                    <div class="cart-badge">{{ $carts }}</div>
                                @else
                                    <img src="{{ asset('image/shopping-cart.png') }}" alt="" width="40px" />

                                @endif
                            </a>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('login') }}" class="btn btn-default btn-no-fill">Sign In</a>
                    <a href="{{ route('register') }}" class="btn btn-fill text-white">Register</a>
                @endif
            </div>
        </nav>
        <div class="hr">
            <hr style="
       border-color: #F4F4F4;
       background-color: #F4F4F4;
       opacity: 1;
       margin: 0 !important;
      " />
        </div>
    </div>
</section>
