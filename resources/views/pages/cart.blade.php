@extends('layouts.app')

@section('title', 'Carts')
    
@section('content')
<div class="container">
    <!-- Breadcrumb -->
<section class="section-breadcrumb mt-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html" style="text-decoration: none; color: black">Home</a>
      </li>
      <li
        class="breadcrumb-item active"
        aria-current="page"
        style="color: black; font-weight: bold"
      >
        Cart
      </li>
    </ol>
  </nav>
</section>

<section class="shopping-cart">
    <div class="row mt-5 mb-3">
        <h3 style="font-weight: bold">Shopping Cart</h3>
    </div>
  <div class="row">
      <div class="col-12 col-lg-8">
          <div class=" pt-3 px-3 pb-3">
              <table class="table text-center">
                  <thead>
                      <tr>
                          <th>Gambar</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Total Harga</th>
                          <th>Menu</th>
                      </tr>
                  </thead>
                  <tbody>
                    @php $totalPrice = 0 @endphp
                    @php
                        $ongkir = 13000
                    @endphp
                    @forelse ($carts as $cart)
                    <tr>
                      <td><img src="{{Storage::url($cart->product->galleries->first()->image)}}" alt="" style="width:200px;border-radius: 20px; height: 130px;"></td>
                      <td>{{$cart->product->name}}</td>
                      <td>Rp. {{number_format($cart->product->price)}}</td>
                      
                      <td>{{$cart->quantity_order}}</td>
                      <td>Rp. {{number_format($cart->total_price)}}</td>
                      <td>
                        <form action="{{route('cart-delete', $cart->id)}}" method="POST">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-remove-cart">
                            <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  @php $totalPrice += $cart->total_price @endphp
                    @empty
                        <tr>
                          <td class="text-center">Keranjang Kosong</td>
                        </tr>
                    @endforelse
                      
                  </tbody>
              </table>
          </div>
      </div>
      <div class="col-12 col-lg-4">
          <div class="card px-3 py-3">
            <h4 style="font-weight: bold" class="mb-4">Payment Information</h4>
              <table>
                  <thead>
                      <tr>
                          <th class="pb-3">Ongkos Kirim</th>
                          <td class="pb-3">Rp.13.000</td>
                      </tr>
                      <tr>
                        <form action="{{route('checkout')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <th class="pb-3">Total</th>
                          {{-- <input type="hidden" name="total_price" value="{{$cart->quantity_order}}"> --}}
                          <td class="pb-3" style="font-weight: bold; color: red;">Rp. {{number_format($totalPrice+$ongkir ?? 0)}}</td>
                          
                          
                      </tr>
                  </thead>
              </table>
          </div>
      </div>
  </div>
  <div class="row mt-5 mb-3">
    <h3>Shipping Details</h3>
  </div>
  <input type="hidden" name="total_price" value="{{$totalPrice}}">
  <div class="row mb-2">
    <div class="col-12 col-lg-2">
      <div class="form-group">
        <label for="kurir">Kurir</label>
        <select name="kurir" id="kurir" class="form-control">
          <option value="J&T">J&T</option>
          <option value="JNE">JNE</option>
        </select>
      </div>
    </div>
      <div class="col-12 col-lg-4">
          <div class="form-group">
              <label for="alamat">Alamat</label>
              <input
                type="text"
                class="form-control"
                name="alamat"/>
            </div>
      </div>
      <div class="col-12 col-lg-2">
          <div class="form-group">
              <label for="provinsi">Provinsi</label>
              <input
                type="text"
                class="form-control"
                name="provinsi"
              />
            </div>
      </div>
  </div>
  <div class="row">
      <div class="col-12 col-lg-3">
          <div class="form-group">
              <label for="kabupaten">Kabupaten</label>
              <input
                type="text"
                class="form-control"
                name="kabupaten"
              />
            </div>
      </div>
      <div class="col-12 col-lg-3">
          <div class="form-group">
              <label for="kecamatan">Kecamatan</label>
              <input
                type="text"
                class="form-control"
                name="kecamatan"
              />
            </div>
      </div>
      <div class="col-12 col-lg-2">
          <div class="form-group">
              <label for="kode_pos">Kode Pos</label>
              <input
                type="text"
                class="form-control"
                name="kode_pos"
              />
            </div>
      </div>
  </div>
  <div class="row">
    <div class="col-12 col-lg-3 mt-3">
      <div class="d-grid gap-2 ">
        <button class="btn btn-dark px-4" type="submit">Bayar</button>
      </div>
    </div>
  </div>
</form>
</section>
</div>
@endsection