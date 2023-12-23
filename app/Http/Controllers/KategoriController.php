<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;

class KategoriController extends Controller
{
    public function show(Kategori $kategori){
        return view('show', [
            'kategori' => $kategori
        ]);
    }

    public function create(){
        return view('Admin.addKategori', [
            'activateAddCategory' => "active"
        ]);
    }

    public function store(Request $request){
        Kategori::create([
            'kategori' => $request->kategori
        ]);

        return redirect()->route('home');
    }
}
