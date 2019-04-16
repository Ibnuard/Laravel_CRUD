<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perpus;

class PerpusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $perpus = Perpus::all();

        return view('perpus.index', compact('perpus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('perpus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'p_judul'=>'required',
        'p_penerbit'=> 'required',
        'p_tahun' => 'required|integer',
        'p_pengarang' => 'required'
      ]);
      $perpus = new Perpus([
        'p_judul' => $request->get('p_judul'),
        'p_penerbit'=> $request->get('p_penerbit'),
        'p_tahun'=> $request->get('p_tahun'),
        'p_pengarang'=> $request->get('p_pengarang')
      ]);
      $perpus->save();
      return redirect('/perpus')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $perpus = Perpus::find($id);

        return view('perpus.edit', compact('perpus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
        'p_judul'=>'required',
        'p_penerbit'=> 'required',
        'p_tahun' => 'required|integer',
        'p_pengarang'=> 'required'
      ]);

      $perpus = Perpus::find($id);
      $perpus->p_judul = $request->get('p_judul');
      $perpus->p_penerbit = $request->get('p_penerbit');
      $perpus->p_tahun = $request->get('p_tahun');
      $perpus->p_pengarang = $request->get('p_pengarang');
      $perpus->save();

      return redirect('/perpus')->with('success', 'Data Berhasil di Update');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     $perpus = Perpus::find($id);
     $perpus->delete();

     return redirect('/perpus')->with('success', 'Data berhasil di Hapus');
    }
}
