<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function barang()
    {
        return $this->belongsTo(barang::class);
    }
}
