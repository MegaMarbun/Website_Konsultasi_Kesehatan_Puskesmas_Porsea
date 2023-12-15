<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiKeluhan;
use Illuminate\Http\Request;

class AdminConsultationController extends Controller
{
    public function index()
    {
        $consultations = KonsultasiKeluhan::latest()->paginate(10);
        // dd("nani");
        return view('admin/consultations/index', compact('consultations'));
    }
    public function show()
    {
        $consultations = KonsultasiKeluhan::latest()->paginate(10);
        // dd("nani");
        return view('admin/consultations/index', compact('consultations'));
    }
}
