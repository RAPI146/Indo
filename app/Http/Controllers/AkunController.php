<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('TampilanAkun.akun_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TampilanAkun.tambah_akun');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            // 'level' => $request->level,
            // 'nip' => $request->nip,
        ]);

        return redirect()->route('akun.index')->with('toast_success', 'Data Berhasil Ditambah');
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
        $data = User::findOrFail($id);
        $data->delete();
        
        return redirect()->route('akun.index')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
