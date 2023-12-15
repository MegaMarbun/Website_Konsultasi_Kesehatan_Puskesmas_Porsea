<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi.registrasi',[
            'title' => 'registrasi' 
        ]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name'=>'required|min:5|max:250',
            'username' => ['required','min:3','max:25','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:250'
        ]); 


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        return redirect('/login')->with('Berhasil', 'Registrasi berhasil, Silahkan Login');
    }
}
