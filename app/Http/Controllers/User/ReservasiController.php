<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Reservasi;
use App\Models\Villa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villa = Villa::all();
        return view('user.reservasi.index', compact('villa'));
    }

    public function villa()
    {
        $villa = Villa::all();
        return view('user.reservasi.villa', compact('villa'));
    }

    public function detail($id)
    {
        $villa = Villa::findOrFail($id);
        return view('user.reservasi.detail', compact('villa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function profil()
    {
        // Ambil ID pelanggan yang sedang login
        $pelangganId = Auth::guard('pelanggan')->user()->id;

        // Query untuk mengambil data reservasi berdasarkan ID pelanggan
        $reservasi = Reservasi::where('pelanggan_id', $pelangganId)->get();
        return view('user.reservasi.profile', compact('reservasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $villa = Villa::findOrFail($request->villa_id);
        $checkIn = \Carbon\Carbon::parse($request->input('check_in'));
        $checkOut = \Carbon\Carbon::parse($request->input('check_out'));

        // validasi checkout
        if ($checkOut->lessThanOrEqualTo($checkIn)) {
            return back()->withErrors(['check_out' => 'Check-out date must be after check-in date']);
        }
        // menghitung hari dri check in ke check out
        $days = $checkOut->diffInDays($checkIn);

        // menghitung harga berdasarkan hari
        $totalPrice = $villa->harga * $days;

        $reservasi = Reservasi::create([
            'pelanggan_id' => $request->pelanggan_id,
            'villa_id' => $request->villa_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_harga' => $totalPrice,
            'metode_pembayaran' => $request->payment_status,
            'payment_status' => 'belum_bayar',
        ]);
        // dd($reservasi);

        return redirect()->route('user.profil');
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
