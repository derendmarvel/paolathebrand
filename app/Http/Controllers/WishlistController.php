<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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

    public function store(int $produk_id){
        $user = Auth::user();
        $produk = Produk::find($produk_id);

        $existingWishlist = Wishlist::where('user_id', $user->id)
                                        ->where('produk_id', $produk->id)
                                        ->first();

        if (!$existingWishlist){
            Wishlist::create([
                'user_id' => $user->id,
                'produk_id' => $produk->id
            ]);
        }                           

        return view('wishlist', [
            'wishlists' => Wishlist::where('user_id', $user->id)->get(),
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
        $wishlist->delete();

        return redirect()->route('wishlist');
    }
}
