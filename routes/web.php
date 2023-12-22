<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\GetApiController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ProdukController::class, 'productsKat'])->name('home');

Route::get('/products', [ProdukController::class, 'products'])->name('products');

Route::get('/detailProducts/{id}', [ProdukController::class, 'detail']);

Route::get('/kategori/{kategori}', [KategoriController::class, 'show']);

Route::get('/carts', [CartController::class, 'show'])->middleware('visitor');

Route::post('/addToCard/{id}', [CartController::class, 'store'])->middleware('visitor');

Route::get('/wishlists', [WishlistController::class, 'show'])->middleware('visitor');

Route::post('/addWishlist/{id}', [WishlistController::class, 'store'])->middleware('visitor');

Route::get('/produk/create', [ProdukController::class, 'create'])->middleware('admin');
Route::post('/produk/store', [ProdukController::class, 'store'])->middleware('admin');

Route::get('/promo/create', [PromoController::class, 'create'])->middleware('admin');
Route::post('/promo/store', [PromoController::class, 'store'])->middleware('admin');
Route::delete('/promo/delete/{promo}', [PromoController::class, 'delete'])->middleware('admin');

Route::get('/kategori/create', [KategoriController::class, 'create'])->middleware('admin');
Route::post('/kategori/store', [KategoriController::class, 'store'])->middleware('admin');

Route::get('/getApi', [GetApiController::class, 'index'])->middleware('visitor');

Route::get('/checkout', [OrderController::class, 'index'])->middleware('visitor');
Route::get('/cekOngkir', [OrderController::class, 'cekOngkir'])->middleware('visitor');

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
