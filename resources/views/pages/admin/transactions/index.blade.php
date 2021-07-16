@extends('layouts.admin')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Transaksi</h2>
        <p class="dashboard-subtitle">
            List Transaksi
        </p>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100 table-bordered table-striped" id="example1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Waktu</th>
                                        <th>Status Transaksi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($buyTransactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->transaction->user->name}}</td>
                                        <td>{{$transaction->created_at}}</td>
                                        <td>
                                            <form action="{{route('update-status-transaction', $transaction->transaction->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                            <div class="product-subtitle text-danger">
                                                <select
                                                      name="transaction_status"
                                                      id="status"
                                                      class="form-control"
                                                    >
                                                    <option value="">{{$transaction->transaction->transaction_status}}</option>
                                                      <option value="PENDING">Pending</option>
                                                      <option value="SUCCESS">Success</option>
                                                    </select>
                                                </div>

                                                <button
                                                    type="submit"
                                                    class="btn btn-success btn-lg mt-2">
                                                    Update
                                                </button>
                                            </form>
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
                                                        <a class="dropdown-item" href="{{route('transaction-details', $transaction->id)}}">
                                                            Lihat
                                                        </a>
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
