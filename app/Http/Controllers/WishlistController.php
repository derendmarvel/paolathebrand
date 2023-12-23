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
    public function create($id)
    {
        // return view('createWishlist', ['id' => $id]);
        // return redirect()->route('addWishlist', array('id' => $id));
    }

    /**
     * Store a newly created resource in storage.
     */

    // public function perantara($id){
    //     return redirect()->route('/addWishlist/'.$id);
    // }

    public function store($id)
    {
        $customers = Customer::all();
        // $users = User::get();

        $currentUser = Auth::user()->name;

        $produks = Produk::all();

        foreach ($customers as $customer){
            if($customer->nama == $currentUser){
                $addCustomer = $customer['id'];
            }

            foreach ($produks as $produk){
                if($produk['id'] == $id){
                    $addProduk = $produk['id'];
                }
            }

            // $wish = new Wishlist();
            // $wish->customer_id = $addCustomer;
            // $wish->produk_id = $addProduk;
            // $wish->save();

            Wishlist::create([
                'customer_id' => $addCustomer,
                'produk_id' => $addProduk
            ]);
        }

        return view('wishlist', [
            'wishlists' => Wishlist::all(),
            'activateWishlist' => "active"
        ]);
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
