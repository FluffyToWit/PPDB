<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;

class RegistrasiController extends Controller
{
    public function index()
    {
    	return view('registrasi');
 
    }

    public function store(Request $request)
	{
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asalsekolah' => 'required',
            'jurusan' => 'required',
        ]);
      
        Registrasi::create($request->all());
       
        return redirect()->route('registrasi')->with('success','Selamat, Registrasi Berhasil');
	}
}
