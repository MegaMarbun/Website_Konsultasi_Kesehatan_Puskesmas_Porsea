@extends('dokter.layouts.App')
@section('container')

<!-- Poli Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1>Kunjungi Poli Tujuan Anda</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-heartbeat text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Pemeriksaan Umum</h4>
                    <p class="mb-4">Pemeriksaan kesehatan umum umumnya melibatkan riwayat kesehatan, pemeriksaan fisik...</p>
                    <a class="btn" href="{{ url('pemeriksaan_umum') }}"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-x-ray text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Penanganan keluhan pasien </h4>
                    <p class="mb-4">Keluhan pasien biasanya mengacu pada 'ekspresi keluhan' dan 'perselisihan ...</p>
                    <a class="btn" href="{{ url('keluhan_pasien') }}"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-brain text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Pelayanan PITC</h4>
                    <p class="mb-4">(PITC) mengacu pada tes dan konseling HIV yang secara rutin direkomendasikan ...</p>
                    <a class="btn" href="/pitc"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-wheelchair text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Kesehatan Ibu dan Anak</h4>
                    <p class="mb-4">Kesehatan ibu dan anak (KIA) mengacu pada kesehatan ibu, bayi, anak... </p>
                    <a class="btn" href="/ibu_anak"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-tooth text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Kesehatan gigi dan mulut</h4>
                    <p class="mb-4">Kesehatan mulut mengacu pada kesehatan gigi, gusi, dan seluruh sistem mulut...</p>
                    <a class="btn" href="/gigi_mulut"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                        <i class="fa fa-vials text-success fs-4"></i>
                    </div>
                    <h4 class="mb-3">Konseling Gizi</h4>
                    <p class="mb-4">Konseling gizi adalah interaksi dua arah di mana pasien dan anggota tim medis ...</p>
                    <a class="btn" href="/gizi"><i class="fa fa-plus text-success me-3"></i>Kunjungi</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Poli End -->

@endsection