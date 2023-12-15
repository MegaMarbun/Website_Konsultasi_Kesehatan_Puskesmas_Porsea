
@extends('dokter.layouts.App')
@section('container')

<center>
    <h1 style="font-family: Abhaya Libre ExtraBold">ARTICLES</h1><hr>
</center>
@if($message = Session::get('berhasil'))
<div class="alert alert-success" role="alert">
    {{ session('berhasil') }}
  </div>
    @endif
    <div class="col-md-12 bg-white p-4">
        <a href="/dokter/articles/create"><button class="btn btn-success mb-3">Tambah Artikel</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    {{-- <th>Image</th> --}}
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikels as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->excerpt }}</td>
                        {{-- <td><img src="/storage/{{$article->image}}" alt="" height='100px' width='150px'></td>--}}
                        <td> 
                            {{-- view --}}
                            <a href="/dokter/posts/{{ $post->slug }}">
                                <button class="btn btn-primary">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </a>
                            {{-- edit --}}
                            <a href="/dokter/articles/{{ $post->id }}/edit">
                                <button class="btn btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </a>
                            {{-- delete  --}}
                            <form action="/dokter/articles/{{ $post->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            
                                    <button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection