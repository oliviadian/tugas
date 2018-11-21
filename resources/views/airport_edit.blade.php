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
            <form action="{{ route('airport.update', $datas->id) }}" method="post">
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
                    <label for="jam_penjemputan">Jam Penjemputan:</label>
                    <input type="time" class="form-control" id="jam_penjemputan" name="jam_penjemputan" value="{{ $datas->jam_penjemputan }}">
                </div>
                 <div class="form-group">
                    <label for="alamat_tujuan">Alamat Tujuan:</label>
                    <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" value="{{ $datas->alamat_tujuan }}">
                </div>
                 <div class="form-group">
                    <label for="jenis_kendaraan">Jenis Kendaraan:</label>
                    <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="{{ $datas->jenis_kendaraan }}">
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