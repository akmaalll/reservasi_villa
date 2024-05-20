<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelanggan_id',
        'villa_id',
        'check_in',
        'check_out',
        'total_harga',
        'payment_status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function villa(){
        return $this->belongsTo(Villa::class);
    } 

}
