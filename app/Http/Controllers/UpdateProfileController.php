<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UpdateProfileController extends Controller
{
    public function update(Request $request){
        $validatedData = $request->validate([
            'image' => 'image|file|max:5000',
            'name'=>'required|min:5|max:250',
            'username' => ['required','min:3','max:25','unique:users,username,' .auth()->id()],
            'email' => 'email',
        ]); 

        auth()->user()->update($validatedData);

        return redirect('/profile')->with('Berhasil', 'Profil anda berhasil diubah');
    }


    public function profile(){
        return view('profile.profile',[
            "title" => "update profile",
            "user" => Auth::user()
        ]);
    }

    
}
