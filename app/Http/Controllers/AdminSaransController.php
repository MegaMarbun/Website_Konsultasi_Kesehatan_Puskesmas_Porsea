<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminSaransController extends Controller
{
    public function index()
    {
        $sarans = Saran::latest()->get();
        return view('admin/sarans.index', compact('sarans'));
    }
    public function show()
    {
        $sarans = Saran::latest()->paginate(10);
        return view('admin/sarans', compact('sarans'));
    }

    public function destroy($id)
    {
        $sarans = Saran::find($id);
        $sarans->delete();

        return redirect('admin/sarans')->with('toast_success','Saran berhasil dihapus');
    }
}
