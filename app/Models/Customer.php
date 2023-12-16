<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone_number', 'address', 'email', 'password'];

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }

    public function payments(): HasMany{
        return $this->hasMany(Payment::class);
    }

    public function carts(): HasMany{
        return $this->hasMany(Cart::class);
    }

    public function wishlists(): HasMany{
        return $this->hasMany(Wishlist::class);
    }

    public function shipments(): HasMany{
        return $this->hasMany(Shipment::class);
    }
}
