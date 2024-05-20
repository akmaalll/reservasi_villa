<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use App\Models\Reservasi;
use App\Models\Villa;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reservasi::with('villa', 'pelanggan')->get();
        $no = 1;
        return view('admin.transaksi.pembayaran.index', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tamu = Pelanggan::all();
        $villa = Villa::all();
        return view('admin.transaksi.pemesanan.index', compact('tamu', 'villa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $req = $request->all();
        $villa = Villa::findOrFail($request->villa_id);
        $checkIn = \Carbon\Carbon::parse($request->input('check_in'));
        $checkOut = \Carbon\Carbon::parse($request->input('check_out'));

        if ($checkOut->lessThanOrEqualTo($checkIn)) {
            return back()->withErrors(['check_out' => 'Check-out date must be after check-in date']);
        }

        // Calculate the total number of days
        $days = $checkOut->diffInDays($checkIn);

        // Calculate the total price
        $totalPrice = $villa->harga * $days;

        $reservasi = Reservasi::create([
            'pelanggan_id' => $request->input('pelanggan_id'),
            'villa_id' => $request->input('villa_id'),
            'check_in' => $request->input('check_in'),
            'check_out' => $request->input('check_out'),
            'total_harga' => $totalPrice,
            'payment_status' => $request->input('payment_status'),
        ]);

        // dd($reservasi);

        return redirect()->route('index.reservasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
