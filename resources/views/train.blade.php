@extends('index')
@section('content')

	<section class="main-section">
			<div class="content">
            <!-- Remove This Before You Start -->
              
             
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
                    <th>Jumlah Pesanan</th>
                    <th>Nama Kereta</th>
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
                        <td>{{ $d->jumlah_pesanan }}</td>
                        <td>{{ $d->nama_kereta }}</td>
                        <td>{{ $d->jam_berangkat }}</td>
                        <td>{{ $d->asal }}</td>
                        <td>{{ $d->tujuan }}</td>
                            <td>
                            <form action="{{ route('train.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('train.edit',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
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