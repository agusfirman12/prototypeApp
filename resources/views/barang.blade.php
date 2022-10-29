@extends('layouts.main')

@section('container')
<div class="navigasi mb-3 fs-5">
    <a href="/" class="text-decoration-none">Beranda</a> >
    <a href="{{ route('barang',$barangToko->id) }}" class="text-decoration-none text-black">{{ $barangToko->nama_barang }}</a>
</div>
<div class="row">
    <div class="col">
        <div class="container-fluid bg-white p-3">
            <div class="row">
                <div class="col-4">
                    <img src="/img/{{ $barangToko->foto }}" width="250px">
                </div>
                <div class="col">
                    <h3>{{ $barangToko->nama_barang }}</h3>
                    <p>Deskripsi</p>
                    <p>{{ $barangToko->deskripsi }}</p>
                    <div class="d-flex">
                        <p>Tersedia </p>
                        <p class="mx-1" style="color: rgb(65, 224, 91)">{{ $barangToko->stok }}</p>
                        <p>Unit</p>
                    </div>
                    <hr>
                    <h5>Harga </h5>
                    <h4 class="text-warning">{{ $barangToko->harga }}</h4>
                    <div class="row mt-4 mb-4">
                        <div class="col-5">
                            <button type="button" class="btn btn-warning text-white" style="width: 200px">Pesan Sekarang</button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-primary text-white" style="width: 200px">Nego Harga</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="container bg-white p-3">
            <p class="mb-0 fw-bold">Nama Toko</p>
            <a href="/toko/{{ $barangToko->toko_id }}/{{ $barangToko->toko->nama_toko }}" class="text-decoration-none mb-3">
                <h5>{{ $barangToko->toko->nama_toko }}</h5>
            </a>
            <p class="fw-bold mb-0">Alamat</p>
            <p><i class="bi bi-geo-alt"></i> {{ $barangToko->toko->alamat_toko }}</p>
            <a href="/toko/{{ $barangToko->toko_id }}/{{ $barangToko->toko->nama_toko }}"><button type="button" class="btn btn-outline-info">Info</button></a>
        </div>
    </div>
</div>
@endsection