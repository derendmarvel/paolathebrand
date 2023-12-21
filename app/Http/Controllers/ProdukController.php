<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Promo;
use Illuminate\Http\Request;
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
            // 'count' => 0
        ]);
    }

    public static function productsKat(){
        return view('home', [
            'products' => Produk::where('kategori_id', 2)->get(),
            'activateHome' => 'active',
            'products2' => Produk::all(),
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

    public function addProduct(){
        return view('/admin/addProduct');
    }

    public function insert(Request $request){
        $produk = Produk::find();

        return view('detailProductsAdmin', [
            "activateProduct" => "active",
            'produk' => $produk
        ]);
    }
}
