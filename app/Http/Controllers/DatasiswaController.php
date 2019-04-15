<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datasiswa;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $datasiswa = Datasiswa::all();

        return view('index', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        'datasiswa_name'=>'required',
        'datasiswa_nomor'=> 'required|integer',
        'datasiswa_kelas' => 'required'
      ]);
      $datasiswa = new Datasiswa([
        'datasiswa_name' => $request->get('datasiswa_name'),
        'datasiswa_nomor'=> $request->get('datasiswa_nomor'),
        'datasiswa_kelas'=> $request->get('datasiswa_kelas')
      ]);
      $datasiswa->save();
      return redirect('/datasiswa')->with('success', 'Stock has been added');
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
        $datasiswa = Datasiswa::find($id);

        return view('edit', compact('datasiswa'));
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
        'datasiswa_name'=>'required',
        'datasiswa_nomor'=> 'required|integer',
        'datasiswa_kelas' => 'required'
      ]);

      $datasiswa = Datasiswa::find($id);
      $datasiswa->datasiswa_name = $request->get('datasiswa_name');
      $datasiswa->datasiswa_nomor = $request->get('datasiswa_nomor');
      $datasiswa->datasiswa_kelas = $request->get('datasiswa_kelas');
      $datasiswa->save();

      return redirect('/datasiswa')->with('success', 'Stock has been updated');
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
     $datasiswa = Datasiswa::find($id);
     $datasiswa->delete();

     return redirect('/datasiswa')->with('success', 'Stock has been deleted Successfully');
    }
}
