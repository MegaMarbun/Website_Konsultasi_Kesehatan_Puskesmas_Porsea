<?php

namespace App\Http\Controllers;

use App\Models\KonsultasiKeluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DokterConsultationsController extends Controller
{
    public function index()
    {
        $consultations = KonsultasiKeluhan::latest()->paginate(10);
        // dd("nani");
        return view('dokter/consultation/index', compact('consultations'));
    }
    public function show()
    {
        $consultations = KonsultasiKeluhan::latest()->paginate(10);
        // dd("nani");
        return view('dokter/consultation/index', compact('consultations'));
    }

    public function edit(KonsultasiKeluhan $consultation)
    {
        return view('dokter/consultation/edit', compact('consultation'));
    }

    public function update(Request $request, KonsultasiKeluhan $consultation)
    {
        // try {
         
            $updated_consultation = $consultation->update([
                'solusi' => $request->solusi,
                'id_user' => Auth::user()->id
            
            ]);
            //  dd("ada");
            if ($updated_consultation) {
                // dd("ada");
                //redirect dengan pesan sukses
                return redirect()->route('consultation.index')->with(['success' => 'Consultation Berhasil Diupdate!']);
                // dd("ada");
            } else {
                //redirect dengan pesan error
                return redirect()->back()->with(['error' => 'Consultation Gagal Diupdate!']);
            }
        // } catch (\Exception $e) {

        //     return $e->getMessage();
        // }
    }
    public function destroy($id)
    {
        $consultation = KonsultasiKeluhan::findOrFail($id);
        Storage::disk('local')->delete('public/consultation/' . $consultation->nama);
        $consultation->delete();

        if ($consultation) {
            //redirect dengan pesan sukses
            return redirect()->route('consultations.index')->with(['success' => 'Consultation Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('consultations.index')->with(['error' => 'Consultation Gagal Dihapus!']);
        }
    }
}
