<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // join
        // 1. DB Query Builder => bakal di pake di API
        
        // 2. Eloquent (menggunakan model)

        //menampilkan data produk ke view
        $produks = Product::orderBy('nama_produk','ASC')->get();
        $title = '';

        return view('backend.produk.index', compact('produks','title') );
    }
}
