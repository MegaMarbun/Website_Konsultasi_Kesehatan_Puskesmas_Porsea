@extends('layouts.main')

@section('container')


<!-- Spinner Start -->
{{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-success" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> --}}
<!-- Spinner End -->



<!-- Navbar Start -->
{{-- <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="beranda.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-success"><i class="far fa-hospital me-3"></i><b>PusPor Sehat</b></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="beranda.html" class="nav-item nav-link active">Beranda</a>
            <a href="artikel.html" class="nav-item nav-link">Artikel</a>
            <a href="poli.html" class="nav-item nav-link">Poliklinik</a>
            <a href="poli.html" class="nav-item nav-link">Konsultasi</a>
            <a href="saran.html" class="nav-item nav-link">saran</a>
        </div>
        <button class="btn btn-success rounded-50"><a href="" class="  py-4 px-lg-5"><i class="far fa-user"></i> Registrasi</a></button>
        &nbsp;&nbsp;&nbsp;
        <button class="btn btn-success rounded-50"><a href="" class="  py-4 px-lg-5"><i class="far fa-user"></i> Login</a></button>
    </div>
</nav> --}}
<!-- Navbar End -->



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-black mb-3 animated slideInDown">Selamat Datang di Poli {{ $title }}</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Judul -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        </div>
        <center>
            <div class="container-md">
                <div class=" wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Lince Sinaga Amd.Gz</h5>
                            <p class="text-primary">Nakes Poli {{ $title }}</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
</div>
<!-- end judul -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <h1>SEPUTAR POLI {{ Str::upper($title) }}</h1>
                    <p style="color: black;">Konseling gizi adalah interaksi dua arah di mana pasien dan anggota tim medis menafsirkan hasil penilaian gizi,
                        mengidentifikasi masalah gizi pasien, kebutuhan dan tujuan, mendiskusikan cara untuk mencapai tujuan ini, dan menyepakati langkah-langkah masa depan dan frekuensi pemantauan.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="mb-4">KONSULTASIKAN KELUHAN ANDA</h1>
            <form action="{{ url('konsultasi_umum') }}" method="POST">
                @csrf
                <input type="hidden" class="form-control" name="jenis_keluhan" value="{{ $id_form }}">
                <div class="mb-3 mt-3">
                        <label for="username" class="form-label">username*:</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Masukkan username Anda" value="{{ old('username',Auth::user()->username) }}" required autofocus>
                    </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label" required autofocus>Jenis Kelamin*:</label> <br>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="1"> Wanita
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="0"> Pria
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Usia (Tahun)*:</label>
                    <input type="number" min="1" class="form-control" placeholder="Masukkan usia" name="usia" required autofocus>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Berat Badan (Kg)* :</label>
                    <input type="number" min="1" class="form-control" placeholder="Masukkan berat badan anda" name="berat_badan" required autofocus>
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Tinggi Badan (cm) :</label>
                    <input type="number" min="1" class="form-control" placeholder="Masukkan Tinggi anda" name="tinggi_badan">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Golongan Darah:</label>
                    <input type="text" class="form-control" placeholder="Masukkan golongan darah anda" name="gol_darah">
                </div>
                <div class=" mb-3">
                    <label for="comment">Keluhan*:</label>
                    <textarea class="form-control" rows="5" id="comment" name="keluhan" placeholder="ketikkan keluhan anda" required autofocus></textarea>
                </div>
                <center>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </center>
            </form>
        </div>
    </div>
</div>
</div>
<!-- About End -->
@endsection