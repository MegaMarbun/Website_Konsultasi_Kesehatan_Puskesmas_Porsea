@extends('dokter.layouts.App')

@section('container')
<!-- Beranda Start -->
<div class="container">
    <h2>Pusat Kesehatan Masyarakat</h2>
    <p style="color:black">
        Pelayanan Puskesmas porsea dimasa pandemi,tidak jarang memicu kepadatan pasien yang melanggar prosedur kesehatan yang berlaku.
        fasilitas pelayanan kesehatan yang menyelenggarakan upaya kesehatan masyarakat dan upaya kesehatan perseorangan tingkat pertama, dengan lebih mengutamakan upaya promotif dan preventif, untuk mencapai derajat kesehatan masyarakat yang setinggi-tingginya.Upaya kesehatan tersebut diselenggarakan dengan menitikberatkan kepada pelayanan untuk masyarakat luas guna mencapai derajat kesehatan yang optimal, tanpa mengabaikan mutu pelayanan kepada perorangan. Puskesmas dipimpin oleh seorang kepala Puskesmas yang bertanggung jawab kepada Dinas Kesehatan Kabupaten/Kota.

    </p>
</div>
<!-- Beranda End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <h1>STRUKTUR ORGANISASI PUSKESMAS PORSEA</h1>
                    <img src="{{asset('img/organisasi.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">JADWAL KERJA PUSKESMAS PORSEA</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Senin</td>
                            <td>08.00 - 15.00</td>
                        </tr>
                        <tr>
                            <td>Selasa</td>
                            <td>08.00 - 15.00</td>
                        </tr>
                        <tr>
                            <td>Rabu</td>
                            <td>08.00 - 15.00</td>
                        </tr>
                        <tr>
                            <td>Kamis</td>
                            <td>08.00 - 15.00</td>
                        </tr>
                        <tr>
                            <td>Jumat</td>
                            <td>08.00 - 12.00</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection