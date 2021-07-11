<?php

namespace App\Http\Controllers;
use PDF;
use App\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Daftar::latest()->paginate(5);

        return view('daftar.index',compact('daftar'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asalsmp' => 'required',
            'jurusan' => 'required',
        ]);
  
        Daftar::create($request->all());
   
        return redirect()->route('daftar.index')
            ->with('success','Selamat, Anda sudah terdaftar di SMK Semangat 45');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function show(Daftar $daftar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftar $daftar)
    {
        return view('daftar.edit',compact('daftar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftar $daftar)
    {
        $request->validate([
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'asalsmp' => 'required',
            'jurusan' => 'required',
        ]);
  
        $daftar->update($request->all());
   
        return redirect()->route('daftar.index')
            ->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Daftar  $daftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftar $daftar)
    {
        $daftar->delete();
  
        return redirect()->route('daftar.index')
            ->with('success','Data sudah dihapus');
    }
    public function cetak($id)
    {
        $daftar = Daftar::find($id);

        $cetak = PDF::loadview('daftar.cetak', compact('daftar'));
        return $cetak->stream();
    }
}
