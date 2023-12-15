<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiKeluhan;
use Illuminate\Http\Request;

class ConsultationsControler extends Controller
{
    function index(){

        return view('konsultasi.konsultasi',[
            "title"=> "konsultasi",
            'poli_1' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 1)->get(),
            'poli_2' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 2)->get(),
            'poli_3' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 3)->get(),
            'poli_4' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 4)->get(),
            'poli_5' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 5)->get(),
            'poli_6' => KonsultasiKeluhan::with('dokter')->where('jenis_keluhan', 6)->get()
        ]);
    }

}
