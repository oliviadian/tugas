<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hotelm;

class hotelc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hotelm::all();
        return view('hotel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('hotel_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new hotelm();
        $data->id = $request->id;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pengunjung = $request->jumlah_pengunjung;
        $data->jenis_kamar = $request->jenis_kamar;
        $data->tanggal_pesanan = $request->tanggal_pesanan;
        $data->jumlah_hari = $request->jumlah_hari;
        $data->save();
        return redirect()->route('hotel.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = hotelm::where('id',$id)->get();
       return view('hotel_edit', compact('data'));
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
        $data = hotelm::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->jumlah_pengunjung = $request->jumlah_pengunjung;
        $data->jenis_kamar = $request->jenis_kamar;
        $data->tanggal_pesanan = $request->tanggal_pesanan;
        $data->jumlah_hari = $request->jumlah_hari;
        $data->save();
        return redirect()->route('hotel.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data = hotelm::where('id', $id)->first();
        $data->delete();
        return redirect()->route('hotel.index')->with('alert-success', 'Data berhasil dihapus!');
    }
}
