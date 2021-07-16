@extends('layouts.admin')

@section('content')

<style>
  .dashboard-title{
    color: black;
  }
  .product-title {
      font-size: 14px;
      line-height: 25px;
      color: #979797;
    }
    .product-subtitle {
      font-size: 18px;
      line-height: 30px;
      color: #0c0d36;
      margin-bottom: 20px;
    }

    h5 {
      font-size: 18px;
      line-height: 27px;
      color: #0c0d36;
    }
</style>
     <!-- Page Content -->
     <div id="page-content-wrapper">
        <div
          class="section-content section-dashboard-home"
          data-aos="fade-up"
        >
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Detail Transaksi</h2>
            </div>
            <div class="dashboard-content" id="transactionDetails">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12 col-md-4">
                          <img
                            src="{{Storage::url($transaction->product->galleries->first()->image ?? '')}}"
                            alt=""
                            class="w-100 mb-3" style="border-radius: 20px"
                          />
                        </div>
                        <div class="col-12 col-md-8">
                          <div class="row" style="">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama Pembeli</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->name}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Nama Produk</div>
                              <div class="product-subtitle">
                                {{$transaction->product->name}}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                                Tanggal Transaski
                              </div>
                              <div class="product-subtitle">
                                {{$transaction->created_at}}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Total Harga</div>
                              <div class="product-subtitle">Rp. {{number_format($transaction->transaction->total_price)}}</div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Jumlah Pesan</div>
                              <div class="product-subtitle">{{number_format($transaction->transaction->total_order)}}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                     <form action="{{route('shipping-update', $transaction->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col-12 mt-4">
                          <h5>
                            Informasi Pengiriman
                          </h5>
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="product-title">Alamat</div>
                              <div class="product-subtitle">
                                {{$transaction->transaction->user->alamat}}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">
                               Provinsi
                              </div>
                              <div class="product-subtitle">
                                {{$transaction->transaction->user->provinsi}}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Kecamatan</div>
                              <div class="product-subtitle">
                                {{$transaction->transaction->user->kecamatan}}
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="product-title">Kode Pos</div>
                              <div class="product-subtitle">{{$transaction->transaction->user->kode_pos}}</div>
                            </div>
                            <div class="col-12">
                              <div class="row">
                                <div class="col-md-3">
                                  <div class="product-title">Status Pengiriman</div>
                                  <select
                                    name="shipping_status"
                                    id="status"
                                    class="form-control"
                                  >
                                  <option value="">{{$transaction->shipping_status}}</option>
                                    <option value="PENDING">Pending</option>
                                    <option value="SHIPPING">Shipping</option>
                                    <option value="SUCCESS">Success</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="row mt-4">
                            <div class="col-12 text-right">
                              <button
                                type="submit"
                                class="btn btn-success btn-lg mt-4"
                              >
                                Simpan Perubahan
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                     </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection