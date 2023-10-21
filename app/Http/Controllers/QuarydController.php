<?php

namespace App\Http\Controllers;

use App\Models\Quaryd;
use Illuminate\Http\Request;

class QuarydController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Quaryd::all();
        return view('TampilanQuaryd.quaryd_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TampilanQuaryd.tambah_quaryd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        quaryd::create([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaran,	
            'keuntungan' => $request->keuntungan,
            ]);
            return redirect()-> route('quaryd.index')->with('swal', 'Data Berhasil Ditambah');
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
        $data = quaryd::find($id);
        return view('TampilanQuaryd.edit_quaryd', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = quaryd::findOrFail($id);

        $data->update([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaratesn,	
            'keuntungan' => $request->keuntungan, 
        ]);
        return redirect()-> route('quaryd.index')->with('swal', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = quaryd::findOrFail($id);
        $data ->delete();

        return redirect()->route('quaryd.index')->with('swal','Data Berhasil Dihapus');
    }
}
