<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'warna', 'size', 'harga', 'foto', 'deskripsi', 'stok', 'link'];

    protected $sizelist = ['S', 'M', 'L'];

    public function wishlists(): HasMany{
        return $this->hasMany(Wishlist::class);
    }

    public function carts(): HasMany{
        return $this->hasMany(Cart::class);
    }

    public function kateori() : BelongsTo{
        return $this->belongsTo(Kategori::class);
    }

    public function promo() : BelongsTo{
        return $this->belongsTo(Promo::class);
    }
}
