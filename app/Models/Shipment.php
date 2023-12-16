<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['shipment_date', 'address', 'city', 'country'];

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }
}
