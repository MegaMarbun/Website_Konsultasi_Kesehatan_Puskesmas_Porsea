@extends('admin.layouts.App')
 @section('container')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <img src="{{ asset('uploads/'.$post->file_path) }}" width="350px" height="300px">
            </div>
            <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">
                    {{ $post->title }}
                </h1>
                <small>{{ $post->created_at }}</small>
                {!! $post->body !!}
                <a class="btn btn-success rounded-pill py-3 px-5 mt-3" href="/admin/articles">kembali ke Artikel</a>
            </div>
        </div><br><br><br>
        </div>
    </div>
</div>

@endsection