<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\airplanem;

class airplanec extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = airplanem::all();
        return view('airplane', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airplanecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new airplanem();
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pengunjung = $request->jumlah_pengunjung;
        $data->kode_maskapai = $request->kode_maskapai;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->save();
        return redirect()->route('airplane.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = airplanem::where('id',$id)->get();
       return view('airplane_edit', compact('data'));
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
        $data = airplanem::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pengunjung = $request->jumlah_pengunjung;
        $data->kode_maskapai = $request->kode_maskapai;
        $data->jam_berangkat = $request->jam_berangkat;
        $data->asal = $request->asal;
        $data->tujuan = $request->tujuan;
        $data->save();
        return redirect()->route('airplane.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = airplanem::where('id', $id)->first();
        $data->delete();
        return redirect()->route('airplane.index')->with('alert-success', 'Data berhasil dihapus!');
    }
}
