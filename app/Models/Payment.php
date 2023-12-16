<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'payment_date', 'payment_method'];

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }
}
