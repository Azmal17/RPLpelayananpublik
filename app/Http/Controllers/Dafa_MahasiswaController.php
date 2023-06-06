<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dafa_Mahasiswa;

class Dafa_MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Dafa_Mahasiswa::all();
        
        return view ('dafa_mahasiswa.index', compact(['mahasiswa']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dafa_mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dafa_Mahasiswa::create($request->all());
        return redirect('dafa_mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_mahasiswa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_mahasiswa)
    {
        $mahasiswa = Dafa_Mahasiswa::find($id_mahasiswa);
        
        return view('dafa_mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_mahasiswa)
    {
        $mahasiswa = Dafa_Mahasiswa::find($id_mahasiswa);
        $mahasiswa->update($request->all());
        
        return redirect()->route('dafa_mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_mahasiswa)
    {
        $mahasiswa = Dafa_Mahasiswa::find($id_mahasiswa);
        $mahasiswa->delete();
         
        return redirect()->route('dafa_mahasiswa.index');
    }
}
