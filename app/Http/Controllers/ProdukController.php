<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Promo;
use App\Models\Kategori;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public static function products(){
         return view('product', [
             "activateProduct" => "active",
             'products' => Produk::all(),
             'promos' => Promo::all(),
             'wishlists' => Wishlist::where('user_id', Auth::user()->id)->get()
         ]);
     }

    public static function productNoLogin(){
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
        } else {
            Produk::create([
                'nama' => $validatedData['nama'],
                'warna' => $validatedData['warna'],
                'size' => $validatedData['size'],
                'harga' => $validatedData['harga'],
                'deskripsi' => $validatedData['deskripsi'],
                'stok' => $validatedData['stok'],
                'link' => $validatedData['link'],
                'kategori_id' => $validatedData['kategori_id'],
            ]);
        }
        return redirect()->route('products');
    }

    public function edit(Produk $produk){
        $produk = Produk::where('id', $produk->id)->first();
        $categories = Kategori::all();
        return view('Admin.editProduct', compact('produk', 'categories'));
    }

    public function update(Request $request, Produk $produk){
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

        if ($request->file('foto')){
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['foto'] = $request->file('foto')->store('images', ['disk' => 'public']);
            $produk->update([
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
        } else {
            $produk->update([
                'nama' => $validatedData['nama'],
                'warna' => $validatedData['warna'],
                'size' => $validatedData['size'],
                'harga' => $validatedData['harga'],
                'deskripsi' => $validatedData['deskripsi'],
                'stok' => $validatedData['stok'],
                'link' => $validatedData['link'],
                'kategori_id' => $validatedData['kategori_id'],
            ]);
        }

        // $produk->update([
        //     'nama' => $request->nama,
        //     'warna' => $request->warna,
        //     'size' => $request->size,
        //     'harga' => $request->harga,
        //     'deskripsi' => $request->deskripsi,
        //     'stok' => $request->stok,
        //     'link' => $request->link,
        //     'kategori_id' => $request->kategori_id,
        // ]);

        return redirect()->route('products');
    }

    public function destroy(Produk $produk){
        if($produk->foto){
            if(Storage::disk('public')->exists($produk->foto)){
                Storage::disk('public')->delete($produk->foto);
            }
        }

        $produk->delete();

        return redirect()->route('products');
    }
}

