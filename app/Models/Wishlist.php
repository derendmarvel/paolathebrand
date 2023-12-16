<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{
    use HasFactory;

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function produk(): BelongsTo{
        return $this->belongsTo(Produk::class);
    }
}
