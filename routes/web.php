<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\GetApiController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;
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

Route::get('/', [ProdukController::class, 'productsKat']);

Route::get('/products', [ProdukController::class, 'products'])->name('products');
Route::get('/productNoLogin', [ProdukController::class, 'productNoLogin'])->name('productNoLogin');

Route::get('/detailProducts/{id}', [ProdukController::class, 'detail'])->name('produk.detail');

Route::get('/kategori/{kategori}', [KategoriController::class, 'show']);

Route::get('/cart', [CartController::class, 'show'])->middleware('visitor')->name('cart');

Route::post('/addToCart/{id}', [CartController::class, 'store'])->middleware('visitor');
Route::delete('/cart/destroy/{cart}', [CartController::class, 'destroy'])->middleware('visitor')->name('cart.destroy');

Route::get('/wishlists', [WishlistController::class, 'show'])->middleware('visitor')->name('wishlist');

// Route::get('/createWishlist/{id}', [WishlistController::class, 'create'])->middleware('visitor');
Route::post('/addWishlist/{id}', [WishlistController::class, 'store'])->middleware('visitor')->name('addWishlist');
Route::delete('/wishlist/destroy/{wishlist}', [WishlistController::class, 'destroy'])->middleware('visitor')->name('wishlist.destroy');

Route::get('/produk/create', [ProdukController::class, 'create'])->middleware('admin');
Route::post('/produk/store', [ProdukController::class, 'store'])->middleware('admin');
Route::get('/produk/edit/{produk}', [ProdukController::class, 'edit'])->middleware('admin')->name('produk.edit');
Route::put('/produk/update/{produk}', [ProdukController::class, 'update'])->middleware('admin')->name('produk.update');
Route::delete('/produk/destroy/{produk}', [ProdukController::class, 'destroy'])->middleware('admin')->name('produk.destroy');

Route::get('/promo/create', [PromoController::class, 'create'])->middleware('admin');
Route::post('/promo/store', [PromoController::class, 'store'])->middleware('admin');
Route::delete('/promo/delete/{promo}', [PromoController::class, 'delete'])->middleware('admin');

Route::get('/category/create', [KategoriController::class, 'create'])->middleware('admin');
Route::post('/kategori/store', [KategoriController::class, 'store'])->middleware('admin');

Route::get('/getApi', [GetApiController::class, 'index'])->middleware('visitor');

Route::get('/checkout', [OrderController::class, 'index'])->middleware('visitor');
Route::post('/cekOngkir', [OrderController::class, 'cekOngkir'])->middleware('visitor');
Route::post('/finalOrder', [OrderController::class, 'store'])->middleware('visitor')->name('finalOrder');

Route::get('/orders', [OrderController::class, 'adminView'])->middleware('admin');
Route::get('/history', [OrderController::class, 'visitorView'])->middleware('visitor')->name('history');

Route::get('/complete', function(){
    return view ('complete');
});

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

Route::get('/home', [ProdukController::class, 'productsKat'])->name('home');
