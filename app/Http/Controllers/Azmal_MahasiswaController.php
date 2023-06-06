<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class Azmal_MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view ('azmallayout.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('azmallayout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        mahasiswa::create($request->except(['_token']));
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function edit($IDMahasiswa)
    {
        $mahasiswa = mahasiswa::find($IDMahasiswa);
        return view ('azmallayout.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($IDMahasiswa, Request $request)
    {
        $mahasiswa = mahasiswa::find($IDMahasiswa);
        $mahasiswa->update($request->except(['_token']));
        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($IDMahasiswa)
    {
        $mahasiswa = mahasiswa::find($IDMahasiswa);
        $mahasiswa->delete();
        return redirect('/mahasiswa');
    }
}
