<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['shipment', 'user_id', 'payment', 'order_date', 'total_price', 'status', 'order_weight'];

    public function shipment(): BelongsTo{
        return $this->belongsTo(Shipment::class, 'shipment_id', 'id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payment(): BelongsTo{
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function orderProduks(): HasMany{
        return $this->hasMany(OrderProduk::class);
    }
}
