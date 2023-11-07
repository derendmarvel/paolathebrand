<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'warna', 'size', 'harga', 'foto', 'deskripsi', 'stok'];

    public function kateori() : BelongsTo{
        return $this->belongsTo(Kategori::class);
    }
}
