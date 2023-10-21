<?php

namespace App\Http\Controllers;

use App\Models\GunungPutri;
use Illuminate\Http\Request;

class GunungPutriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GunungPutri::all();
        return view('TampilanGunungPutri.gunungputri_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TampilanGunungPutri.tambah_gunungputri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        gunungputri::create([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaran,	
            'keuntungan' => $request->keuntungan,
            ]);
            return redirect()-> route('gunungputri.index')->with('swal', 'Data Berhasil Ditambah');
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
        
        $data = GunungPutri::find($id);
        return view('TampilanGunungPutri.edit_gunungputri', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = GunungPutri::findOrFail($id);

        $data->update([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaran,	
            'keuntungan' => $request->keuntungan, 
        ]);
        return redirect()-> route('gunungputri.index')->with('swal', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = GunungPutri::findOrFail($id);
        $data ->delete();

        return redirect()->route('gunungputri.index')->with('swal','Data Berhasil Dihapus');
    }
}
