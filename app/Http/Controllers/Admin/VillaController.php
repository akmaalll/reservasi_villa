<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Villa::all();
        $no = 1;
        // dd($data);

        return view('admin.villa.index', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.villa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/villa'), $imgName);
            $data['gambar'] = $imgName;
        }
        Villa::create($data);
        return redirect()->route('index.villa');
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
        $data = Villa::findOrFail($id);

        return view('admin.villa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $req = $request->all();
        $data = Villa::find($request->id);
        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request->gambar->move(public_path('images/villa'), $imgName);
            $req['gambar'] = $imgName;
        } else {
            $req['gambar'] = $request->gambarLama;
        }

        $data->update($req);

        return redirect()->route('index.villa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Villa::findOrFail($id);
        $data->delete();
        return redirect()->route('index.villa');
    }
}
