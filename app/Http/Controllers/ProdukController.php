<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    public static function products(){
        return view('product', [
            "activateProduct" => "active",
            'products' => Produk::all()
        ]);
    }

    public static function productshome(){
        return view('home', [
            "activateHome" => "active",
            'products' => Produk::all()
        ]);
    }

    public function detail($id){
        $produk = Produk::find($id);

        return view('detailProducts', [
            "activateProduct" => "active",
            'produk' => $produk
        ]);
    }
}
