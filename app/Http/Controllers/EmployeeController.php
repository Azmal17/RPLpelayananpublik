<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Employee::where('namadokter','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Employee::paginate(5);
        }

        return view('datadokter',compact('data'));
    }

    public function tambahdokter(){

        return view('tambahdata');
    }

    public function insertdata(Request $request){
        $data = Employee::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotodokter/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('dokter')->with('success','Data berhasil diinput');
    }
    
    public function tampilkandata($id){

        $data = Employee::find($id);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('dokter')->with('success','Data berhasil diupdate');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('dokter')->with('success','Data berhasil didelete');
    }

    public function exportpdf(){
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datadokter-pdf');
        return $pdf->download('data.pdf');   
    }

}
