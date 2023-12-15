<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{



    public function index(){
        return view('login.login',[
            'title'=> 'Login'
        ]);
    }
    
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->isAdmin()) {
                return redirect()->intended('/admin/Home');
            } elseif (Auth::user()->isDoctor()) {
                return redirect()->intended('/dokter/Home');
            }else{
                  // Authentication passed...
            return redirect()->intended('/beranda');
            }
          
        }else{
            return back()->with('loginError', 'Maaf,Login gagal');
        }
        // dd("something wrong,Please make sure that you enter the correct Password or E-mail");

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
