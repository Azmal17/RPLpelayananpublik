<?php
  
namespace App\Http\Controllers;
  
use App\Models\Pengaduanuser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class PengaduanuserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pengaduanusers = Pengaduanuser::latest()->paginate(5);
        
        return view('pengaduanusers.index',compact('pengaduanusers'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pengaduanusers.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_pengadu' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'tgl_kunjungan' => 'required|date',
            'isi' => 'required',
        ]);
        
        Pengaduanuser::create($request->all());
         
        // return redirect()->route('pengaduanusers.index')
        //                 ->with('success','Pengaduan berhasil dibuat.');
        return redirect()->route('pengaduanusers.create')
                        ->with('success','Pengaduan berhasil dibuat.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pengaduanuser $pengaduanuser): View
    {
        return view('pengaduanusers.show',compact('pengaduanuser'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduanuser $pengaduanuser): View
    {
        return view('pengaduanusers.edit',compact('pengaduanuser'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduanuser $pengaduanuser): RedirectResponse
    {
        $request->validate([
            'bagian' => 'required',
            'status' => 'required|in:diterima,diproses',
        ]);
        
        $pengaduanuser->update($request->all());
        
        return redirect()->route('pengaduanusers.index')
                        ->with('success','Pengaduan berhasil diupdate.');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduanuser $pengaduanuser): RedirectResponse
    {
        $pengaduanuser->delete();
         
        return redirect()->route('pengaduanusers.index')
                        ->with('success','Pengaduan berhasil dihapus.');
    }
}