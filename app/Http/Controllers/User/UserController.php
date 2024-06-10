<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Villa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villa = Villa::all();
        return view('user.index', compact('villa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function villa()
    {
        $villa = Villa::all();
        return view('user.villa', compact('villa'));
    }

    public function detail($id)
    {
        $villa = Villa::findOrFail($id);
        return view('user.detail', compact('villa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
