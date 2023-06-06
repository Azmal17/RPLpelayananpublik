<?php

namespace App\Http\Controllers;

use App\Models\Nilaimalinda;
use App\Models\Matakuliahmalinda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class NilaimalindaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {   
        $kategori = Matakuliahmalinda::select('id', 'nama_mk')->get();
        $nama = Matakuliahmalinda::select('id', 'nama_mk')->get();
        $nilaimalindas = Nilaimalinda::Join();
        $nilaimalindas = Nilaimalinda::latest()->paginate(5);
        
        return view('nilaimalindas.index',compact('kategori', 'nilaimalindas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        
        $kategori = Matakuliahmalinda::select('id', 'nama_mk')->get();
        return view('nilaimalindas.create', compact('kategori'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'namamhs' => 'required',
            'nama_mk' => 'required',
            'skor' => 'required',
        ]);
        
        Nilaimalinda::create($request->all());
         
        return redirect()->route('nilaimalindas.index')
                        ->with('success','nilaimalinda created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Nilaimalinda $nilaimalinda): View
    {
        $kategori = Matakuliahmalinda::select('id', 'nama_mk')->get();
        return view('nilaimalindas.show',compact('nilaimalinda','kategori'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilaimalinda $nilaimalinda): View
    {
        $kategori = Matakuliahmalinda::select('id', 'nama_mk')->get();
        return view('nilaimalindas.edit',compact('nilaimalinda','kategori'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilaimalinda $nilaimalinda): RedirectResponse
    {
        $request->validate([
            'nama_mk' => 'required',
            'skor' => 'required',
        ]);
        
        $nilaimalinda->update($request->all());
        
        return redirect()->route('nilaimalindas.index')
                        ->with('success','nilaimalinda updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilaimalinda $nilaimalinda): RedirectResponse
    {
        $nilaimalinda->delete();
         
        return redirect()->route('nilaimalindas.index')
                        ->with('success','nilaimalinda deleted successfully');
    }
}
