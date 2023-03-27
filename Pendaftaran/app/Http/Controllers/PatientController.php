<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PatientController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $patients = Patient::latest()->paginate(5);
        
        return view('patients.index',compact('patients'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('patients.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'no_rm' => 'required',
            'no_asuransi' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'gol_darah' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'agama' => 'required',
            'status_kawin' => 'required',
        ]);
        
        Patient::create($request->all());
         
        return redirect()->route('patients.index')
                        ->with('success','Patient created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Patient $patient): View
    {
        return view('patients.show',compact('patient'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient): View
    {
        return view('patients.edit',compact('patient'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient): RedirectResponse
    {
        $request->validate([
            'no_rm' => 'required',
            'no_asuransi' => 'required',
            'nama_pasien' => 'required',
            'umur' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'gol_darah' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'agama' => 'required',
            'status_kawin' => 'required',
        ]);
        
        $patient->update($request->all());
        
        return redirect()->route('patients.index')
                        ->with('success','Patient updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient): RedirectResponse
    {
        $patient->delete();
         
        return redirect()->route('patients.index')
                        ->with('success','Patient deleted successfully');
    }
}