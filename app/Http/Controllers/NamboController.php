<?php

namespace App\Http\Controllers;

use App\Models\Nambo;
use Illuminate\Http\Request;

class NamboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Nambo::all();
        return view('TampilanNambo.nambo_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TampilanNambo.tambah_nambo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Nambo::create([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaran,	
            'keuntungan' => $request->keuntungan,
            ]);
            return redirect()-> route('nambo.index')->with('swal', 'Data Berhasil Ditambah');
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
        $data = Nambo::find($id);
        return view('TampilanNambo.edit_nambo', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = Nambo::findOrFail($id);

        $data->update([
            'tanggal'=> $request ->tanggal,
            'telur'=> $request->telur,
            'panen'=> $request ->panen,
            'omset'=> $request ->omset,	
            'pengeluaran'=> $request ->pengeluaran,	
            'keuntungan' => $request->keuntungan, 
        ]);
        return redirect()-> route('nambo.index')->with('swal', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Nambo::findOrFail($id);
        $data ->delete();

        return redirect()->route('nambo.index')->with('swal','Data Berhasil Dihapus');
    }
}
