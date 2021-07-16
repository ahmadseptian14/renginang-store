@extends('layouts.app')

@section('title', 'Products')
    
@section('content')
<div class="container">
    <!-- All Products -->
    <section class="all-product">
        <div class="row">
            <h3 class="mt-5 mb-5">All Products</h3>
        </div>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-6 col-md-3 mb-4">
                <a href="{{route('details', $product->slug)}}">
                    <div class="card">
                        <img
                            src="{{Storage::url($product->galleries->first()->image)}}"
                            class="card-img-top"
                        />
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">Rp. {{number_format($product->price)}} / Pack</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
                <h4>Tidak Ada Produk</h4>
            @endforelse
            
        </div>
    </section>
</div>

@endsection