<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderProduk extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'produk_id', 'quantity'];

    public function order(): BelongsTo{
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function produk(): BelongsTo{
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }
}
