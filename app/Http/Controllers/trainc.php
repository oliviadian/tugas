<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainmodel;

class trainc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = trainmodel::all();
        return view('train', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('train_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new trainmodel();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pesanan = $request->jumlah_pesanan;
        $data->nama_kereta = $request->nama_kereta;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->save();
        return redirect()->route('train.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = trainmodel::where('id',$id)->get();
       return view('train_edit', compact('data'));
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
        $data = trainmodel::where('id',$id)->first();
       $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pesanan = $request->jumlah_pesanan;
        $data->nama_kereta = $request->nama_kereta;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->save();
        return redirect()->route('train.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = trainmodel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('train.index')->with('alert-success', 'Data berhasil dihapus!');
    }
}
