<?php
  
namespace App\Http\Controllers;
  
use App\Models\Prodimalinda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class ProdimalindaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $prodimalindas = Prodimalinda::latest()->paginate(5);
        
        return view('prodimalindas.index',compact('prodimalindas'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('prodimalindas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
        ]);
        
        Prodimalinda::create($request->all());
         
        return redirect()->route('prodimalindas.index')
                        ->with('success','prodimalinda created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Prodimalinda $prodimalinda): View
    {
        return view('prodimalindas.show',compact('prodimalinda'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodimalinda $prodimalinda): View
    {
        return view('prodimalindas.edit',compact('prodimalinda'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodimalinda $prodimalinda): RedirectResponse
    {
        $request->validate([
            'kode_prodi' => 'required',
            'nama_prodi' => 'required',
        ]);
        
        $prodimalinda->update($request->all());
        
        return redirect()->route('prodimalindas.index')
                        ->with('success','prodimalinda updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodimalinda $prodimalinda): RedirectResponse
    {
        $prodimalinda->delete();
         
        return redirect()->route('prodimalindas.index')
                        ->with('success','prodimalinda deleted successfully');
    }
}