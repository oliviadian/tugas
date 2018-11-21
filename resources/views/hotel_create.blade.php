@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
             @section('judul')
            <h1>Input Data Pemesanan</h1>
            <hr>
            @endsection
            
            <form action="{{ route('hotel.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
				<div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
				<div class="form-group">
                    <label for="jumlah_pengunjung">Jumlah Pengunjung:</label>
                    <input type="number" class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung">
                </div>
				<div class="form-group">
                    <label for="jenis_kamar">Jenis Kamar:</label>
                    <textarea class="form-control" id="jenis_kamar" name="jenis_kamar"></textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal_pesanan">Tanggal Pesanan:</label>
                    <input  type="date" class="form-control" id="tanggal_pesanan" name="tanggal_pesanan">
                </div>
                <div class="form-group">
                    <label for="jumlah_hari">Jumlah Hari:</label>
                    <input  type="number" class="form-control" id="jumlah_hari" name="jumlah_hari">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection