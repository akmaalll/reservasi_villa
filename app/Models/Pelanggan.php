<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nama',
        'ktp',
        'alamat',
        'no_hp',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
