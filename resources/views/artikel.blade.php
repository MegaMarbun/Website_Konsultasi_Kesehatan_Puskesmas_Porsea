
@extends('layouts.main')

@section('container')
    <!-- Artikel Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1>PEDULIKAN KESEHATAN ANDA, RAJIN BACA ARTIKEL</h1>
            <hr>
        </div>
            @foreach($posts as $post)
            <div class="row g-5">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    {{-- <img src="https://source.unsplash.com/350x300?healthy,healthcare" width="350px" height="300px"> --}}
                    <img src="{{ asset('uploads/'.$post->file_path) }}" width="350px" height="300px">
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">
                        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                    </h1>
                    <small>{{ $post->created_at }}</small>
                    <p>{{  $post->excerpt }}</p>
                    <p>{{$post->sumber}}</p>
                    <a class="btn btn-success rounded-pill py-3 px-5 mt-3"  href="/posts/{{ $post->slug }}">Baca Selengkapnya. . .</a>
                </div><hr>
            </div><br><br><br>
            @endforeach
            
                            <div class="d-flex justify-content-center">   
                                {{ $posts->links() }}
                            </div>
        </div>
    </div>
    <!-- Artikel End -->
@endsection