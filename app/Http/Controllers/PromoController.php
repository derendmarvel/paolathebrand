<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;

class PromoController extends Controller
{
    public static function promos(){
        return view('home', [
            "activateHome" => "active",
            'promos' => Promo::all()
        ]);
    }

    public function create(){
        return view('Admin.addPromo', [
            'promos' => Promo::all()
        ]);
    }

    public function store(Request $request, Promo $promo){
        $validatedData = $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'image' => 'image'
        ]);

        if($request->file('image')){
            if($promo->image){
                if(Storage::disk('public')->exists($promo->image)){
                    Storage::disk('public')->delete($promo->image);
                }
            }

            $validatedData['image'] = $request->file('image')->store('images', ['disk' => 'public']);

            Promo::create([
                'name' => $validatedData['name'],
                'start_date' => $validatedData['start_date'],
                'end_date' => $validatedData['end_date'],
                'image' => $validatedData['image']
            ]);
        }

        Promo::create([
            'name' => $validatedData['name'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'image' => $validatedData['image']
        ]);

        return redirect()->route('home');
    }

    public function delete(Promo $promo){
        if($promo->image){
            if(Storage::disk('public')->exists($promo->image)){
                Storage::disk('public')->delete($promo->image);
            }
        }

        $promo->delete();

        return redirect()->route('home');
    }
}
