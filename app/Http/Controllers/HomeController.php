<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Registrasi::latest()->paginate(5);
      
        return view('pendaftar',compact('siswa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function edit($id)
    {
        $siswa = Registrasi::find($id);
        return view('pendaftarEdit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asalsekolah' => 'required',
            'jurusan' => 'required',
        ]);

        Registrasi::find($id)->update($request->all());

        return redirect()->route('pendaftar')
            ->with('success', 'Siswa berhasil diubah!');
    }

    public function destroy($id)
    {
        Registrasi::find($id)->delete();
        return redirect()->route('pendaftar')
            ->with('success', 'Siswa berhasil dihapus!');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $siswa = Registrasi::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pendaftar', compact('siswa'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
