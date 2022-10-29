@extends('layouts.main')

@section('container')
<div class="container bg-white">
  <div class="row mb-5 py-5 px-3">
    <div class="col">
      <img src="/img/store.png" alt="Pasar Digital" width="300px">
    </div>
    <div class="col-8">
      <h1 class="pt-5">Pasar Digital</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate suscipit illo porro asperiores reiciendis dolorem labore quas cupiditate, veritatis eveniet dicta non. Fuga rem debitis accusantium totam aliquid. Fuga at vel architecto delectus, aliquid possimus ut perspiciatis sit molestias, eligendi blanditiis quam? A totam tempore dignissimos eaque omnis eligendi consectetur.</p>
    </div>
  </div>
</div>
  <div class="container-fluid">
    <h1 class="text-center mb-3">Daftar Produk</h1>
    <div class="row d-felx justify-content-evenly align-items-center">
      @foreach ($barangToko as $item) 
      <div class="col d-flex justify-content-center">
        <a href="{{ route('barang',$item->id) }}" class="text-decoration-none text-dark">
          <div class="card shadow p-3 mb-5 bg-body rounded-4" style="width: 18rem;">
              <img src="/img/{{ $item->foto }}" class="card-img-top mb-3">
              <div class="card-body py-0">
                <p class="card-title fw-bold">{{ $item->nama_barang }}</p>
                <h5 class="card-text text-warning">{{ $item->harga }}</h5>
              </div>
              <hr>
              <div class="card-body py-0">
                <p class="list-group-item fw-bold opacity-50 m-0">Toko</p>
                <p class="list-group-item m-0 fw-bold">{{ $item->toko->nama_toko}}</p>
                <p class="list-group-item m-0 opacity-50"><i class="bi bi-geo-alt"></i>  {{ $item->toko->alamat_toko}}</p>
              </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>

@endsection