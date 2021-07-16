@extends('layouts.admin')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Foto Produk</h2>
        <p class="dashboard-subtitle">
            List Foto Produk
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('product-gallery.create')}}" class="btn btn-primary mb-3"> + Tambah Foto Produk</a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Gambar</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr>
                                            <td>{{$product->product->name}}</td>
                                            <td>
                                                <img src="{{Storage::url($product->image)}}" alt="" width="150px" height="100px">
                                            </td>
                                            <td>
                                                <div class= "btn-group">
                                                <div class= "dropdown">
                                                    <button class="btn btn-primay dropdown-toggle mr-1 mb-1" 
                                                        type="button"
                                                        data-toggle="dropdown">
                                                        Aksi
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form action="{{route('product-gallery.destroy', $product->id)}}" method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="dropdown-item text-danger">
                                                                Hapus
                                                            </button>
                                                        </from>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection