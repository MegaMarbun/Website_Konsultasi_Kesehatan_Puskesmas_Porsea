<?php

use App\Http\Controllers\AdminConsultationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSaransController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DokterArtikelController;
use App\Http\Controllers\DokterConsultationsController;
use App\Http\Controllers\DokterProfileController;
use App\Http\Controllers\DokterSaranController;
use App\Http\Controllers\PemeriksaUmumController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\SaranController;
use App\Models\KonsultasiKeluhan;

//halaman beranda
Route::get('/', function () {
    return view('beranda',[
        "title"=> "Beranda"
    ]);
})->middleware('auth');
//halaman Profil
Route::get('/profile', function () {
    return view('profile.profile',[
        "title"=>"profile"
    ]);
})->middleware('auth');


//halaman artikel
Route::get('/artikel',[ArtikelController::class, 'index'])->middleware('auth');
//halaman single post
Route::get('posts/{post:slug}', [ArtikelController::class, 'show'])->middleware('auth');
Route::get('dokter/posts/{post:slug}', [DokterArtikelController::class, 'show'])->middleware('auth');
Route::get('admin/posts/{post:slug}', [AdminController::class, 'show'])->middleware('auth');

Route::get('generate-pdf', [AdminPDFController::class, 'generatePDF']);

//halaman poli
Route::get('/poli', function () {
    return view('poli',[
        "title"=>"Poli"
    ]);
})->middleware('auth');

Route::get('/dokter/profile/', function () {
    return view('dokter.profile.index');
})->middleware('auth');
Route::put('/dokter/update',[DokterProfileController::class,'update'])->name('dokter.profile.index')->middleware('auth');

Route::get('/admin/profile/', function () {
    return view('admin.profile.index');
})->middleware('auth');
Route::put('/admin/update',[AdminProfileController::class,'update'])->name('admin.profile.index')->middleware('auth');

//halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
//Halaman Logout
Route::post('/logout', [LoginController::class, 'logout']);
//halaman registrasi
Route::get('/registrasi', [registrasiController::class, 'index']);
Route::post('/registrasi', [registrasiController::class, 'store']);
//halaman berandash
Route::get('/beranda',[BerandaController::class, 'index'])->middleware('auth');
//halaman edit profil
Route::put('update',[UpdateProfileController::class,'update'])->name('profile.profile')->middleware('auth');


//halaman konsultasi
Route::get('/konsultasi', function () {
    return view('konsultasi.konsultasi',[
        "title"=> "konsultasi",
        'poli_1' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 1)->get(),
        'poli_2' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 2)->get(),
        'poli_3' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 3)->get(),
        'poli_4' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 4)->get(),
        'poli_5' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 5)->get(),
        'poli_6' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 6)->get()
    ]);
})->middleware('auth');


//halaman saran
Route::get('/saran', [SaranController::class, 'index'])->middleware('auth');
Route::post('/saran', [SaranController::class, 'store']);
Route::resource('/dokter/sarans',DokterSaranController::class);
// Route::resource('/dokter/profile/',DokterProfileController::class);

//sub-poli
Route::get('/pemeriksaan_umum', function () {
    return view('poli.pemeriksaan_umum',
    [
        "title"=>"Pemeriksa Umum",
        "id_form" => 1,
        'konsul' => new KonsultasiKeluhan()
    ]);
});
Route::get('/keluhan_pasien', function () {
    return view('poli.keluhan_pasien',
    [
        "title"=>"Penanganan Keluhan Pasien",
        'id_form' => 2,
        'konsul' => new KonsultasiKeluhan()
    ]);
});
Route::get('/pitc', function () {
    return view('poli.pitc',[
        "title"=>"PITC",
        'id_form' => 3,
        'konsul' => new KonsultasiKeluhan()
    ]);
});
Route::get('/ibu_anak', function () {
    return view('poli.ibu_anak',[
        "title"=>"Kesehatan Ibu dan Anak",
        'id_form' => 4,
        'konsul' => new KonsultasiKeluhan()
    ]);
});
Route::get('/gigi_mulut', function () {
    return view('poli.gigi_mulut',[
        "title"=>"Kesehatan Gigi dan Mulut",
        'id_form' => 5,
        'konsul' => new KonsultasiKeluhan()
    ]);
});
Route::get('/gizi', function () {
    return view('poli.gizi',[
        "title"=>"Konseling Gizi",
        'id_form' => 6,
        'konsul' => new KonsultasiKeluhan()
    ]);
});

Route::post('konsultasi_umum', [PemeriksaUmumController::class , 'store']);
Route::get('konsul_delete/{id}', [PemeriksaUmumController::class , 'destroy']);
Route::get('konsul/{jenis}/{id}', [PemeriksaUmumController::class , 'edit']);
Route::post('konsultasi_umum/edit/{id}', [PemeriksaUmumController::class, 'update']);


//admin
Route::get('/articles/checkSlug',[AdminController::class,'checkSlug']);

Route::resource('/admin/articles',AdminController::class)->middleware('auth');
// Route::put('/articles',[AdminController::class,'update']);


Route::get('/dokter/Home', function () {
    return view('dokter/Home');
});
Route::get('/dokter/saran', function () {
    return view('dokter/saran');
});
Route::get('/dokter/poly', function () {
    return view('dokter/poly');
});

Route::resource('/dokter/articles',DokterArtikelController::class);
Route::resource('/dokter/consultation',DokterConsultationsController::class);
// Route::get('/dokter/consultation/edit', [DokterConsultationsController::class, 'update']);

Route::get('/admin/Home', function () {
    return view('admin/Home');
});

Route::get('/admin/poly', function () {
    return view('admin/poly');
});
Route::get('/admin/beranda', function () {
    return view('admin/home');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::resource('/admin/consultations',AdminConsultationController::class);
Route::resource('/admin/sarans',AdminSaransController::class);
