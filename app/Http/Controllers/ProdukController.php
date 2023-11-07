<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    public static function products(){
        return view('home', [
            "activateProduct" => "active",
            'products' => Produk::all()
        ]);
    }
}
