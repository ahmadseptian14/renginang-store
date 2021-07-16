@extends('layouts.admin')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Produk</h2>
        <p class="dashboard-subtitle">
            Daftar Produk
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('product.create')}}" class="btn btn-primary mb-3"> + Tambah Produk Baru</a>
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100 table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Price</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>Rp.{{number_format($product->price)}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>
                                            <div class= "btn-group">
                                                <div class= "dropdown">
                                                    <button class="btn btn-primay dropdown-toggle mr-1 mb-1" 
                                                        type="button"
                                                        data-toggle="dropdown">
                                                        Aksi
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('product.edit', $product->id)}}">
                                                            Edit
                                                        </a>
                                                        <form action="{{route('product.destroy', $product->id)}}" method="POST">
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
                                        <tr>	
                                            <td colspan="7" class="text-center">Tidak Ada Produk</td>
                                        </tr>
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