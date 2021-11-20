<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // Read
    public function index() {
        $getProduk = Produk::all();
        return view('produk.produk', compact('getProduk'));
    }

    // Delete
    public function destroy($id) {
        $dropProduk = Produk::find($id); // Cari data
        $dropProduk ->  delete(); // Delete data

        return redirect() -> back(); // Redirect back
    }

    // Create
    public function create() {
        $createProduk = Produk::all();
        return view('produk.produktambah');
    }
}
