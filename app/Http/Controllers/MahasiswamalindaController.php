<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswamalinda;
use App\Models\Prodimalinda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MahasiswamalindaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {   
        $prodi = Prodimalinda::select('id', 'nama_prodi')->get();
        $mahasiswamalindas = Mahasiswamalinda::Join();
        $mahasiswamalindas = Mahasiswamalinda::latest()->paginate(5);
        
        return view('mahasiswamalindas.index',compact('mahasiswamalindas', 'prodi'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $prodi = Prodimalinda::select('id', 'nama_prodi')->get();
        return view('mahasiswamalindas.create', compact('prodi'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'namaprodi' => 'required',
        ]);
        
        Mahasiswamalinda::create($request->all());
         
        return redirect()->route('mahasiswamalindas.index')
                        ->with('success','mahasiswamalinda created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Mahasiswamalinda $mahasiswamalinda): View
    {
        $prodi = Prodimalinda::select('id', 'nama_prodi')->get();
        return view('mahasiswamalindas.show',compact('mahasiswamalinda', 'prodi'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswamalinda $mahasiswamalinda): View
    {
        $prodi = Prodimalinda::select('id', 'nama_prodi')->get();
        return view('mahasiswamalindas.edit',compact('mahasiswamalinda', 'prodi'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswamalinda $mahasiswamalinda): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nik' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'namaprodi' => 'required',
        ]);
        
        $mahasiswamalinda->update($request->all());
        
        return redirect()->route('mahasiswamalindas.index')
                        ->with('success','mahasiswamalinda updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswamalinda $mahasiswamalinda): RedirectResponse
    {
        $mahasiswamalinda->delete();
         
        return redirect()->route('mahasiswamalindas.index')
                        ->with('success','mahasiswamalinda deleted successfully');
    }
}
