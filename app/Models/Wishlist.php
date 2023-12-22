<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id','produk_id'];

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function produk(): BelongsTo{
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
