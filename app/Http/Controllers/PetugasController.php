<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perpustakaan.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',

        ]);

        $query = DB::table('petugas')->insert([
            'id' => $request['id'],
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'no_telp_petugas' => $request['no_telp_petugas'], 
            'alamat_petugas' => $request['alamat_petugas'],

        ]);

        return redirect('/tabel');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $petugas = DB::table('petugas')->where('id', $id)->get();
        return view('king.officer.show', compact('petugas'));
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
        $query = DB::table('petugas')->where('id', $id)->delete();
            return redirect()->route('tabel.index');
    }
}
