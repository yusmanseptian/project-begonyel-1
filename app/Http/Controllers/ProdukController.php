<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Exception;
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

    // menampilkan data kategori
    public function listKategori() {
        $data = Kategori::orderBy('nama_kategori','ASC')->get();
        return $data;
    }

    public function create(){
        // ambil data kategori untuk diinputkan ke tabel produk
        $kategoris = $this->listKategori();

        return view('backend.produk.add',compact('kategoris'));
    }

    public function store(Request $request){
        // validasi
        $request->validate([
            'nama_produk' => 'required|min:3',
            'harga' => 'required',
            'gambar' => 'required|image|file|max:2048',
            'kategori_id' => 'required'
        ]);

        try {
            //code...
            $pathGambar = $request->file('gambar')->store('product-images');

            // insert data to produks table
            Product::create([
                'nama_produk' => $request->nama_produk,
                'harga' => $request->harga,
                'kategori_id' => $request->kategori_id,
                'gambar' => $pathGambar,
            ]);

            return redirect('produk')->with(['pesan' => 'Data Berhasil disimpan!']);

        } catch (Exception $err) {
            return redirect()->back()->with(['pesan' => $err->getMessage()]);
        }

    }

}
