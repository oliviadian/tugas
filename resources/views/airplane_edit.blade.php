@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
             @section('judul')
            <h1>Edit Pemesanan</h1>
            <hr>
            @endsection
            
            @foreach($data as $datas)
            <form action="{{ route('airplane.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $datas->email }}">
                </div>
                <div class="form-group">
                    <label for="jumlah_pengunjung">Jumlah Pengunjung:</label>
                    <input type="number" class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung" value="{{ $datas->jumlah_pengunjung }}">
                </div>
                <div class="form-group">
                    <label for="kode_maskapai">Kode Maskapai:</label>
                    <input  class="form-control" id="kode_maskapai" name="kode_maskapai" value="{{ $datas->kode_maskapai }}">
                </div>
                <div class="form-group">
                    <label for="jam_berangkat">Waktu:</label>
                    <input type="time" class="form-control" id="jam_berangkat" name="jam_berangkat" value="{{ $datas->jam_berangkat }}">
                </div>
                 <div class="form-group">
                    <label for="asal">Asal:</label>
                    <input type="text" class="form-control" id="asal" name="asal" value="{{ $datas->asal }}">
                </div>
                 <div class="form-group">
                    <label for="tujuan">Tujuan:</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $datas->tujuan }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection