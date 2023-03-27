<?php

namespace App\Http\Controllers;
use App\Models\rawatjalan;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(){
        $data = rawatjalan::all();
        return view('rawatjalan', compact('data'));
    }
    
    public function tambahdatarawatjalan(){
        return view('tambahdatarawatjalan');
    }

    public function tambahdatarawatjalan2(Request $request){
        rawatjalan::create($request->all());
        return redirect()->route('rawatjalan')->with('success','Data berhasil ditambahkan');
    } 

    public function tampilkandata($id){
        $data = rawatjalan::find($id);
        return view('tampildatarawatjalan', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = rawatjalan::find($id);
        $data->update($request -> all());
        return redirect()->route('rawatjalan')->with('success','Data berhasil di edit');
    }

    public function deletedata($id){
        $data = rawatjalan::find($id);  
        $data ->delete();
        return redirect()->route('rawatjalan')->with('success','Data berhasil di hapus');
    }
} 
