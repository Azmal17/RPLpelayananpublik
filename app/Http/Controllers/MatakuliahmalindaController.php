<?php

namespace App\Http\Controllers;
  
use App\Models\Matakuliahmalinda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MatakuliahmalindaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $matakuliahmalindas = Matakuliahmalinda::latest()->paginate(5);
        
        return view('matakuliahmalindas.index',compact('matakuliahmalindas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('matakuliahmalindas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
        ]);
        
        Matakuliahmalinda::create($request->all());
         
        return redirect()->route('matakuliahmalindas.index')
                        ->with('success','matakuliahmalinda created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Matakuliahmalinda $matakuliahmalinda): View
    {
        return view('matakuliahmalindas.show',compact('matakuliahmalinda'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matakuliahmalinda $matakuliahmalinda): View
    {
        return view('matakuliahmalindas.edit',compact('matakuliahmalinda'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matakuliahmalinda $matakuliahmalinda): RedirectResponse
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
        ]);
        
        $matakuliahmalinda->update($request->all());
        
        return redirect()->route('matakuliahmalindas.index')
                        ->with('success','matakuliahmalinda updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matakuliahmalinda $matakuliahmalinda): RedirectResponse
    {
        $matakuliahmalinda->delete();
         
        return redirect()->route('matakuliahmalindas.index')
                        ->with('success','matakuliahmalinda deleted successfully');
    }
}
