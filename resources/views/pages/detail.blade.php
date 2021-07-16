@extends('layouts.app')

@section('title', 'Detail Product')

@section('content')
    <div class="container">
        <!-- Breadcrumb -->
        <section class="section-breadcrumb mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html" style="text-decoration: none; color: black">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: black; font-weight: bold">
                        Product Detail
                    </li>
                </ol>
            </nav>
        </section>

        <section class="detail-product">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 col-lg-6">
                        <img src="{{ Storage::url($product->galleries->first()->image) }}" alt="" class="mb-2"
                            width="500px" height="350px">

                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="product-dscription">
                            <h3>{{ $product->name }}</h3>
                            <h5 style="color: salmon;" class="mb-4">Rp. {{ number_format($product->price) }} /Pack</h5>
                            <p>Stok {{$product->quantity}}</p>
                            <h4>Deskripsi</h4>
                            <p>{{ $product->description }}</p>
                        </div>
                        @auth
                            <form action="{{ route('details-add', $product->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="number" name="quantity_order" class="form-control px-4" required
                                        placeholder="Jumlah / Pack">
                                </div>
                                @if ($product->quantity == 0)
                                <div class="d-grid gap-2">
                                  <button class="btn btn-add" type="submit" disabled>Stok Kosong</button>
                              </div>
                                @else
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-add" type="submit">Masukan Keranjang</button>
                                    </div>
                                @endif
                            </form>
                        @else
                            <a class="btn btn-dark nav-link px-4 text-white btn-block mb-3" href="{{ route('login') }}">Sign
                                In to Add</a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>

        <section class="other-product">
            <div class="row mt-5 mb-3">
                <h3>Other Product</h3>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-6 col-md-3 mb-4">
                        <a href="{{ route('details', $product->slug) }}">
                            <div class="card">
                                <img src="{{ Storage::url($product->galleries->first()->image) }}" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">Rp. {{ $product->price }} /Kg</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
