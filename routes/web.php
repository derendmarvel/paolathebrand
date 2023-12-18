<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProdukController::class, 'productsKat']);

Route::get('/products', [ProdukController::class, 'products']);

Route::get('/detailProducts/{id}', [ProdukController::class, 'detail']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'show']);

Route::get('/carts', [CartController::class, 'show']);

Route::post('/addToCard', [CartController::class, 'store']);

Route::get('/wishlists', [WishlistController::class, 'show']);

Route::post('/addWishlist', [WishlistController::class, 'store']);

// Route::get('/home', function(){
//     return view('home',[
//         'activateHome' => 'active'
//     ]);
// });

Route::get('/aboutUs', function(){
    return view('aboutUs',[
        'activateAboutUs' => 'active'
    ]);
});
