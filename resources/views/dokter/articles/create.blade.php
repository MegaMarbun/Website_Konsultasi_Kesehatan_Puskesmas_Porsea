@extends('dokter.layouts.App')

@section('container')

<center>
    <h3 style="font-family: Abhaya Libre ExtraBold">Tambah Artikel</h3><hr>
</center>
<div class="col-md-12 col-sm-8 bg-white p-4" >
    <form method="post" action="/dokter/articles" enctype="multipart/form-data" >
    @csrf
        {{-- judul --}}
        <div class="form-group" >
            <label>Judul Artikel</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Judul artikel" required autofocus value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        {{-- slug --}}
        {{-- <div class="form-group" >
            <label>Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug artikel">
        </div> --}}

        <br>
        {{-- isi --}}
        <div class="form-group">
            <label>Isi Artikel</label>
            {{-- <input id="body" type="hidden" name="body">
            <trix-editor input="body"></trix-editor> --}}
            <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="15" required autofocus value="{{ old('body') }}"></textarea>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div><br>
  
        <br>
            <div class="form-group">
                <input type="file" name="image" placeholder="Choose image" id="image">
                @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

        <br>
        <div class="form-group">

            <input type="submit" class="form-control btn btn-primary" style="background-color:MediumSeaGreen;" value="Tambah">

        </div>
    </form>   
</div>

{{-- <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/articles.checkSlug?title=' + title.value)
        .then(response =>response.json())
        .then(data => slug.value = data.slug)
    });
</script> --}}

@endsection
 
