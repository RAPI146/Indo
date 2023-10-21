<?php

namespace App\Http\Controllers;

use App\Models\p4m;
use Illuminate\Http\Request;

class p4mController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = p4m::all();
        return view('tampilan.p4m_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tampilan.tambah_p4m');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       p4m::create([
        'tanggal'=> $request ->tanggal,
        'telur'=> $request->telur,
    	'panen'=> $request ->panen,
        'omset'=> $request ->omset,	
        'pengeluaran'=> $request ->pengeluaran,	
        'keuntungan' => $request->keuntungan,
        ]);
        return redirect()-> route('p4m.index')->with('swal', 'Data Berhasil Ditambah');
    
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
        $data = p4m::find($id);
        return view('tampilan.edit_p4m', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = p4m::findOrFail($id);

        $data->update([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaratesn,	
            'keuntungan' => $request->keuntungan, 
        ]);
        return redirect()-> route('p4m.index')->with('swal', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = p4m::findOrFail($id);
        $data ->delete();

        return redirect()->route('p4m.index')->with('swal','Data Berhasil Dihapus');
    }
}
