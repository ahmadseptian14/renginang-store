@extends('layouts.app')

@section('title', 'Renginang Store')

@section('content')
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

            @media (max-width: 1023px) {
                .header-3-2 .form div input[type="text"] {
                    width: 100%;
                }
            }

        </style>
        <div class="header-3-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div
                        class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <h1 class="title-text-big">
                            Renginang<br class="d-lg-block d-none" />
                            <span style="color: black">Ciri Khas</span><br class="d-lg-block d-none" />
                            Pandeglang
                        </h1>
                        <p class="text-caption">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dolorem! Quaerat praesentium
                            dolor quo est vero architecto quae, iusto ex!
                        </p>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                            <button class="btn btn-get text-white d-inline-flex">
                                Lihat Product
                            </button>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
                        <img class="d-lg-block d-none hero-right-1" src="image/renginang4.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="best-seller">
        <div class="container">
            <div class="row">
                <h3 class="text-center mb-5">Best Seller</h3>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-6 col-md-3 mb-4">
                        <a href="{{route('details', $product->slug)}}">
                            <div class="card">
                                <img src="{{ Storage::url($product->galleries->first()->image) }}" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Rp. {{ number_format($product->price) }} / kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="h1-00 w-100 bg-white" style="box-sizing: border-box">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-3-2 .btn:focus,
            .content-3-2 .btn:active {
                outline: none !important;
            }

            .content-3-2 {
                padding: 5rem 2rem;
            }

            .content-3-2 .img-hero {
                width: 100%;
                margin-bottom: 3rem;
            }

            .content-3-2 .right-column {
                width: 100%;
            }

            .content-3-2 .title-text {
                font: 600 1.875rem/2.25rem Poppins, sans-serif;
                margin-bottom: 2.5rem;
                letter-spacing: -0.025em;
                color: #121212;
            }

            .content-3-2 .title-caption {
                font: 500 1.5rem/2rem Poppins, sans-serif;
                margin-bottom: 1.25rem;
                color: #121212;
            }

            .content-3-2 .circle {
                font: 500 1.25rem/1.75rem Poppins, sans-serif;
                height: 3rem;
                width: 3rem;
                margin-bottom: 1.25rem;
                border-radius: 9999px;
                background-color: #27c499;
            }

            .content-3-2 .text-caption {
                font: 400 1rem/1.75rem Poppins, sans-serif;
                letter-spacing: 0.025em;
                color: #565656;
            }

            .content-3-2 .btn-learn {
                font: 600 1rem/1.5rem Poppins, sans-serif;
                padding: 1rem 2.5rem;
                background-color: #27c499;
                transition: 0.3s;
                letter-spacing: 0.025em;
                border-radius: 0.75rem;
            }

            .content-3-2 .btn:hover {
                background-color: #45dbb2;
                transition: 0.3s;
            }

            @media (min-width: 768px) {
                .content-3-2 .title-text {
                    font: 600 2.25rem/2.5rem Poppins, sans-serif;
                }
            }

            @media (min-width: 992px) {
                .content-3-2 .img-hero {
                    width: 550px;
                    margin-bottom: 0;
                    margin-right: 100px;
                    box-shadow: 20px 20px black;
                }

                .content-3-2 .right-column {
                    width: 50%;
                }

                .content-3-2 .circle {
                    margin-right: 1.25rem;
                    margin-bottom: 0;
                }
            }

        </style>
        <div class="content-3-2 container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src="image/renginang3.jpg" alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">Keistimewaan Renginang</h2>
                    <ul style="padding: 0; margin: 0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Gurih
                            </h4>
                            <p class="text-caption">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, ipsum.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Renyah dan Garing
                            </h4>
                            <p class="text-caption">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque, voluptatibus.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 4rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    3
                                </span>
                                Murah dan Nikmat
                            </h4>
                            <p class="text-caption">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, temporibus?
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
