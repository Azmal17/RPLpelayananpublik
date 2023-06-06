<?php

namespace App\Http\Controllers;

use App\Models\Mhsgg;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class MhsggsController extends Controller
{
    public function index(): View
    {
        $mahasiswa = Mhsgg::latest()->paginate(5);

        return view('mhsgege.index', compact ('mahasiswa'))
        -> with ('i', ((request()->input('page', 1) - 1) * 5));
    }

    public function create(): View
    {
        return view('mhsgege.create');
    }

    public function store(Request $request): Redirectresponse
    {
        $request->validate([
            'nim'=>'required',
            'nama_mhs'=>'required',
            'tgl_lahir'=>'required',
            'jk'=>'required',
            'prodi'=>'required',
            'agama'=>'required',
            'nik'=>'required',
            'telp'=>'required',
            'alamat'=>'required'

        ]);
        Mhsgg::create($request->all());

        return redirect()->route('mhsgege.index')
        ->with('success', 'Data berhasil dibuat');
    }

    public function show(Mhsgg $mahasiswa): View
    {
        return view('mhsgege.show', compact('mahasiswa'));
    }

    public function edit(Mhsgg $mahasiswa): View
    {
        return view('mhsgege.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mhsgg $mahasiswa): Redirectresponse
    {
        $request->validate([
            'nim'=>'required',
            'nama_mhs'=>'required',
            'tgl_lahir'=>'required',
            'jk'=>'required',
            'prodi'=>'required',
            'agama'=>'required',
            'nik'=>'required',
            'telp'=>'required',
            'alamat'=>'required'
        ]);
        $mahasiswa->update($request->all());
        return redirect()->route('mhsgege.index')
        ->with('success', 'Data berhasil di update');
    }

    public function destroy(Mhsgg $mahasiswa): Redirectresponse
    {
        $mahasiswa->delete();

        return redirect()->route('mhsgege.index')
        ->with('success', 'Data berhasil dihapus');
    }
}
