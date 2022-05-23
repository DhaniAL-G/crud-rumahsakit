<?php

namespace App\Http\Controllers;
use App\Models\rumahsakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rumahsakitController extends Controller
{
    public function index() {
      
        $rumahsakit = rumahsakit::all();
        return view('rumahsakit.index',['rumahsakit' => $rumahsakit]);
    }
    
    public function add(){

        return view('rumahsakit/create ');
    }

    public function store(Request $request)
    {
        DB::table('rumahsakit')->insert([
            'idpasien' => $request->idpasien,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_penyakit' => $request->jenis_penyakit,
            'lama_inap' => $request->lama_inap,            
        ]);
        return redirect('rumahsakit');
    }
    public function delete($idpasien){
        $rumahsakit=rumahsakit::find($idpasien);
        // echo $rumahsakit;
        $rumahsakit->delete($idpasien);
        return Redirect('/rumahsakit');

    }
    public function edit ($idpasien){
    $rumahsakit = \App\Models\rumahsakit::find($idpasien);
    return view('rumahsakit/edit',['rumahsakit' => $rumahsakit]);
    }
    public function update (Request $request,$idpasien){
        $rumahsakit = \App\Models\rumahsakit::find($idpasien);
        $rumahsakit->update($request->all());
        return redirect('/rumahsakit')->with('sukses','Data Berhasil diupdate');
    }

  
}