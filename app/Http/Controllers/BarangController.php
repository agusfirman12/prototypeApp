<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function ViewHome()
    {
        $barang = barang::orderBy('id', 'ASC');
        if (request('search')) {
            $barang->where('nama_barang', 'like', '%' . request('search') . '%');
        }
        return view('home', ["title" => "Home", 'barangToko' => $barang->get()]);
    }
    public function ViewBarang($id)
    {
        $barang = barang::find($id);
        return view('barang', ["title" => "Barang", 'barangToko' => $barang]);
    }

    public function ViewToko($toko_id, $nama_toko)
    {
        $penjual = barang::where('toko_id', $toko_id)->get();
        return view('toko', ["title" => $nama_toko, 'penjual' => $penjual]);
    }
}
