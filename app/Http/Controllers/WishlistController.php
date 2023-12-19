<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Produk;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateWishlistRequest;

class WishlistController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $produks = Produk::get();

        foreach ($produks as $produk){
            if($produk['id'] == $id){
                Wishlist::create([
                    'produk_id' => $produk->id
                ]);
            }
        }

        $customers = Customer::get();
        // $users = User::get();

        $currentUser = Auth::user()->name;

        foreach ($customers as $customer){
            if($customer->nama == $currentUser){
                Wishlist::create([
                    'customer_id' => $customer['id']
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlist)
    {
        return view('wishlist', [
            'wishlists' => Wishlist::all(),
            'activateWishlist' => "active"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
