<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use App\Http\Requests\insertData;

class pengaduanController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = pengaduan::where('nama_pengadu', 'LIKE', '%' .$request->search.'%');
        }else{
            $data = pengaduan::all();
        }
        return view('dataPengaduan', compact('data'));
    }

    public function tambahData()
    {
        return view('tambahData');
    }

    public function insertData(Request $request)
    {
        //dd($request->all());
        $data = pengaduan::create($request->all());
        return redirect()->route('dataPengaduan')->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function tampilData($id)
    {
        $data = pengaduan::find($id);
        //dd($data);
        return view('tampilData', compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $data = pengaduan::find($id);
        $data->update($request->all());
        return redirect()->route('dataPengaduan')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function delete($id)
    {
        $data = pengaduan::find($id);
        $data->delete();
        return redirect()->route('dataPengaduan')->with('success', 'Data Berhasil Dihapus!');
    }

    
}
