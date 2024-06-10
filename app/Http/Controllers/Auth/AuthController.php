<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        Pelanggan::create($data);
        return redirect()->route('login');
    }

    public function prosesLogin(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);


        if (Auth::guard('web')->attempt($credentials)) {
            // dd(Auth::guard('web')->attempt($credentials));
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        if (Auth::guard('pelanggan')->attempt($credentials)) {
            // dd(Auth::guard('web')->attempt($credentials));
            $request->session()->regenerate();

            return redirect()->intended(route('user.reservasi'));
        }

        return back()->withErrors([
            'username' => 'username atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('user'));
    }
}
