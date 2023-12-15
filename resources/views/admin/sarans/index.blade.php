@extends('admin.layouts.App')
@section('container')

<center>
    <h1 style="font-family: Abhaya Libre ExtraBold">Saran</h1>
    <hr>
</center>
@if($message = Session::get('berhasil'))
<div class="alert alert-success" role="alert">
    {{ session('berhasil') }}
</div>
@endif
<div class="col-md-12 bg-white p-4">
    <table class="table table-responsive table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <!-- <th>No.</th> -->
                <th>Nama</th>
                <th>Email</th>
                <th>Saran</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sarans as $saran)
            <tr>
                <!-- <td>{{$loop->iteration}}</td> -->
                <td>{{ $saran->name }}</td>
                <td>{{ $saran->email }}</td>
                <td>{!! $saran->saran !!}</td>
                <td>{{-- delete  --}}
                    <form action="/admin/sarans/{{ $saran->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf

                        <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <div class="alert alert-danger">
                Data saran belum Tersedia.
            </div>
            @endforelse
        </tbody>
    </table>
</div>
@endsection