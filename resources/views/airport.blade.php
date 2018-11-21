@extends('index')
@section('content')

	<section class="main-section">
			<div class="content">
            <!-- Remove This Before You Start -->
             @section('judul')
           <h1>Tabel Pemesanan</h1>
            <hr>
            @endsection
            
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jam Penjemputan</th>
                    <th>Alamat Tujuan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                       
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->jam_penjemputan }}</td>
                        <td>{{ $d->alamat_tujuan }}</td>
                        <td>{{ $d->jenis_kendaraan }}</td>
                            <td>
                            <form action="{{ route('airport.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('airport.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
	</section>

@endsection