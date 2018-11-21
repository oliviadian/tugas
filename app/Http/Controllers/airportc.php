<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\airportmodel;

class airportc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = airportmodel::all();
        return view('airport', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airport_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new airportmodel();
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jam_penjemputan = $request->jam_penjemputan;
        $data->alamat_tujuan = $request->alamat_tujuan;
        $data->jenis_kendaraan = $request->jenis_kendaraan;
        $data->save();
        return redirect()->route('airport.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = airportmodel::where('id',$id)->get();
       return view('airport_edit', compact('data'));
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
        $data = airportmodel::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jam_penjemputan = $request->jam_penjemputan;
        $data->alamat_tujuan = $request->alamat_tujuan;
        $data->jenis_kendaraan = $request->jenis_kendaraan;
        $data->save();
        return redirect()->route('airport.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = airportmodel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('airport.index')->with('alert-success', 'Data berhasil dihapus!');
    }
}
