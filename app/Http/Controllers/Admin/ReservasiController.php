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
    public function index(Request $request)
    {
        $data = Reservasi::with('villa', 'pelanggan')->get();
        $no = 1;

        $query = Reservasi::with('villa', 'pelanggan');

        if ($request->has('start_date') && $request->has('end_date')) {
            $startDate = $request->input('start_date');
            $endDate = $request->input('end_date');
            $query->whereBetween('check_in', [$startDate, $endDate])
                ->orWhereBetween('check_out', [$startDate, $endDate])
                ->orWhere(function ($q) use ($startDate, $endDate) {
                    $q->where('check_in', '<=', $startDate)
                        ->where('check_out', '>=', $endDate);
                });
        }

        $filteredData = $query->get();
        return view('admin.transaksi.pembayaran.index', compact('data', 'no', 'filteredData'));
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

        return redirect()->route('index.reservasi');
    }

    public function updatePaymentStatus(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        if ($request->has('payment_status')) {
            $reservasi->payment_status = $request->input('payment_status');
            $reservasi->save();

            return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui status pembayaran.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Reservasi::findOrFail($id);
        $data->delete();
        return redirect()->route('index.reservasi');
    }
}
