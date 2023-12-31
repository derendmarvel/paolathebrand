<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Promo;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public static function products(){
         return view('product', [
             "activateProduct" => "active",
             'products' => Produk::all(),
             'promos' => Promo::all()
         ]);
     }

    public static function productsKat(){
        return view('home', [
            'products' => Produk::where('kategori_id', 2)->take(3)->get(),
            'activateHome' => 'active',
            'products2' => Produk::where('warna', "Black")->take(3)->get(),
            'promos' => Promo::all()
        ]);
    }

    public function detail($id){
        $produk = Produk::find($id);

        return view('detailProducts', [
            "activateProduct" => "active",
            'produk' => $produk
        ]);
    }

    public function adminDetail($id){
        $produk = Produk::find($id);

        return view('detailProductsAdmin', [
            "activateProduct" => "active",
            'produk' => $produk
        ]);
    }

    public function create(){
        $categories = Kategori::all();
        return view('Admin.addProduct', compact('categories'), [
            "activateAddProduct" => "active"
        ]);
    }

    public function store(Request $request, Produk $produk){
        $validatedData = $request->validate([
            'nama' => 'required',
            'warna' => 'required',
            'size' => 'required',
            'harga' => 'required',
            'foto' => 'image',
            'deskripsi' => 'required',
            'stok' => 'required',
            'link' => 'required',
            'kategori_id' => 'required',
        ]);

        if($request->file('foto')){
            if($produk->image){
                if(Storage::disk('public')->exists($produk->image)){
                    Storage::disk('public')->delete($produk->image);
                }
            }

            $validatedData['foto'] = $request->file('foto')->store('images', ['disk' => 'public']);

            Produk::create([
                'nama' => $validatedData['nama'],
                'warna' => $validatedData['warna'],
                'size' => $validatedData['size'],
                'harga' => $validatedData['harga'],
                'foto' => $validatedData['foto'],
                'deskripsi' => $validatedData['deskripsi'],
                'stok' => $validatedData['stok'],
                'link' => $validatedData['link'],
                'kategori_id' => $validatedData['kategori_id'],
            ]);
        }

        Produk::create([
            'nama' => $validatedData['nama'],
            'warna' => $validatedData['warna'],
            'size' => $validatedData['size'],
            'harga' => $validatedData['harga'],
            'foto' => $validatedData['foto'],
            'deskripsi' => $validatedData['deskripsi'],
            'stok' => $validatedData['stok'],
            'link' => $validatedData['link'],
            'kategori_id' => $validatedData['kategori_id'],
        ]);

        return redirect()->route('products');
    }
}
