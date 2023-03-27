<?php

namespace App\Http\Controllers;

use App\Models\Inap;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class InapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $inaps = Inap::latest()->paginate(5);
        
        return view('inaps.index',compact('inaps'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('inaps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_registrasi' => 'required',
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'kode_dokter' => 'required',
            'nama_dokter' => 'required',
            'no_kamar' => 'required',
            'no_rujukan' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
        ]);
        
        Inap::create($request->all());
         
        return redirect()->route('inaps.index')
                        ->with('success','Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inap $inap): View
    {
        return view('inaps.show',compact('inap'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inap $inap): View
    {
        return view('inaps.edit',compact('inap'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inap $inap): RedirectResponse
    {
        $request->validate([
            'no_registrasi' => 'required',
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'kode_dokter' => 'required',
            'nama_dokter' => 'required',
            'no_kamar' => 'required',
            'no_rujukan' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
        ]);
        
        $inap->update($request->all());
        
        return redirect()->route('inaps.index')
                        ->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inap $inap): RedirectResponse
    {
        $inap->delete();
         
        return redirect()->route('inaps.index')
                        ->with('success','Data deleted successfully');
    }
}
