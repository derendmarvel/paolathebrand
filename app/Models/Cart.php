<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['quantity'];

    public function produk(): BelongsTo{
        return $this->belongsTo(Produk::class);
    }

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }
}
