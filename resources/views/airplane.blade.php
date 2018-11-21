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
            <body>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Pengunjung</th>
                    <th>Kode Maskapai</th>
                    <th>Waktu</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
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
                        <td>{{ $d->jumlah_pengunjung }}</td>
                        <td>{{ $d->kode_maskapai }}</td>
                        <td>{{ $d->jam_berangkat }}</td>
                        <td>{{ $d->asal }}</td>
                        <td>{{ $d->tujuan }}</td>
                        <td>
                            <form action="{{ route('airplane.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('airplane.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </body>
        </div>
	</section>

@endsection