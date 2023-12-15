@extends('layouts.App')

@section('container')
<!-- post Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <img src="{{ asset('uploads/'.$post->file_path) }}" width="350px" height="350px">
            </div>
            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">
                    {{ $post->title }}
                </h1>
                <small>{{ $post->created_at }}</small><br>
                {!! $post->body !!}
                <h1 class="mb-4">
                    {{ $post->sumber }}
                </h1>
                <br><a class="btn btn-success rounded-pill py-3 px-5 mt-3" href="/artikel">kembali ke Artikel</a>
            </div>
        </div><br><br><br>
    </div>
</div>
</div>
<!-- post End -->
@endsection