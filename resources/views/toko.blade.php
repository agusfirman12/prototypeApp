@extends('layouts.main')

@section('container')
  <div class="container-fluid">
    <h1 class="text-center mb-3">Daftar Produk</h1>
    <div class="row justify-content-evenly">
      @foreach ($penjual as $item) 
      <div class="col d-flex justify-content-evenly">
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