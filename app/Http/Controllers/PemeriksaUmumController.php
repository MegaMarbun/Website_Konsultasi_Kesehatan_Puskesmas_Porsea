<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiKeluhan;
use Illuminate\Http\Request;

class PemeriksaUmumController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'email' => 'required',
        //     'jenis_kelamin' => 'required|in:0,1',
        //     'usia' => 'required|integer',
        //     'berat_badan' => 'required|integer',
        //     'keluhan' => 'required'
        // ]);
        

        try {
            KonsultasiKeluhan::create($request->all());

            return redirect('/poli')->with('toast_success', 'Berhasil Melakukan Keluhan');
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->back()->with('toast_error','Terjadi kesalahan, Gagal!');
        }
    }
    public function destroy($id)
    {
        try {
            KonsultasiKeluhan::find($id)->delete();
            return redirect()->back()->with('toast_success', 'Berhasil Menghapus Keluhan');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('toast_error','Terjadi kesalahan, Gagal!');
        }
    }
    public function edit($jenis , $id)
    {
        $data['konsul'] = KonsultasiKeluhan::find($id);
        if ($jenis == 1) {
            $data['title'] = "Pemeriksa Umum";
            $data['id_form'] = 1;
        }
        if ($jenis == 2) {
            $data['title'] = "Penanganan Keluhan Pasien";
            $data['id_form'] = 2;
        }
        if ($jenis == 3) {
            $data['title'] = "PITC";
            $data['id_form'] = 3;
        }
        if ($jenis == 4) {
            $data['title'] = "Kesehatan Ibu dan Anak";
            $data['id_form'] = 4;
        }
        if ($jenis == 5) {
            $data['title'] = "Kesehatan Gigi dan Mulut";
            $data['id_form'] = 5;
        }
        if ($jenis == 6) {
            $data['title'] = "Konseling Gizi";
            $data['id_form'] = 6;
        }
        return view('poli.pemeriksaan_umum', $data);
    }
    public function update(Request $request, $id)
    {
        try {
            KonsultasiKeluhan::find($id)->update($request->all());
            return redirect()->back()->with('toast_success', 'Berhasil Mengubah Keluhan');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('toast_error','Terjadi kesalahan, Gagal!');
        }
    }
}
