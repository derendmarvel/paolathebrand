<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $id)
    {
        $user = Auth::user();
        $produk = Produk::find($id);

        $existingItem = Cart::where('user_id', $user->id)
                                        ->where('produk_id', $produk->id)
                                        ->first();

        if (!$existingItem){
            Cart::create([
                'user_id' => $user->id,
                'produk_id' => $produk->id,
                'quantity' => $request->input('quantity'),
                'total_price' => (int)$produk->harga * (int)'quantity'
            ]);
        } else {
            $existingItem->quantity = $existingItem->quantity + (int)$request->input('quantity');
            $existingItem->total_price = (int)$produk->harga * (int)'quantity';
        }

        return view('cart', [
            'carts' => Cart::where('user_id', $user->id)->get(),
            'activateCart' => "active"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        return view('cart', [
            'carts' => Cart::all(),
            'activateCart' => "active"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
