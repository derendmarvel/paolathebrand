<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_date', 'total_price'];

    public function shipment(): BelongsTo{
        return $this->belongsTo(Shipment::class);
    }

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function payment(): BelongsTo{
        return $this->belongsTo(Payment::class);
    }
}
