<?php

namespace App\Http\Controllers;
use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index(){
        return view('saran',[
            'title'=>'saran'
        ]);
    }


    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name'=>'required|min:5|max:250',
            'email' => 'required|email',
            'saran' => 'required'
        ]); 

        Saran::create($validatedData);
        
        return redirect('/saran')->with('Berhasil', 'Terimakasih atas masukan anda');
    }
}
