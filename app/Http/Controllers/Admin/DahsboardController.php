<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Reservasi;
use App\Models\Villa;
use Illuminate\Http\Request;

class DahsboardController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        $transaksi = Reservasi::all();
        $villa = Villa::all();

        return view('admin.dashboard.index', compact('pelanggan', 'transaksi', 'villa'));
    }
}
