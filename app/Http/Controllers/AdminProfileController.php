<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function update(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'image' => 'image|file|max:5000',
            'name'=>'required|min:5|max:250',
            'username' => ['required','min:3','max:25','unique:users,username,' .auth()->id()],
            'email' => 'required|email|unique:users',
        ]); 

        auth()->user()->update($validatedData);

        return redirect('/admin/profile/')->with('Berhasil', 'Profil anda berhasil diubah');
    }


    public function index(){
        
        return view('/admin/profile/index',[
            "title" => "update profile",
            "user" => Auth::user()
        ]);
    }
}
