<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['produk_id','customer_id','quantity'];

    public function produk(): BelongsTo{
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
