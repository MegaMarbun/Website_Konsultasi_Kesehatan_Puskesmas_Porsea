@extends('layouts.App2')
@section('container')
<!-- Contact Start -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">

            @if(session()->has('Berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('Berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <center>
                <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-light rounded p-5">
                        <h1 class="mb-4">Berikan Masukan Anda</h1>
                        <form action="/saran" method="post">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Masukkan nama Anda" value="{{ old('name',Auth::user()->name) }}">
                                        <label for="name">Username</label>
                                    </div>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan email Anda" value="{{ old('email',Auth::user()->email) }}">
                                        <label for="email"> Email</label>
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('saran') is-invalid @enderror" name="saran" placeholder="Ketikkan saran anda disini" value="{{ old('email') }}" id="saran" style="height: 100px"></textarea>
                                        <label for="saran">Saran</label>
                                    </div>
                                    @error('saran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success w-100 py-3">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </center>
            <!-- <div class="col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="rounded w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Contact End -->
@endsection