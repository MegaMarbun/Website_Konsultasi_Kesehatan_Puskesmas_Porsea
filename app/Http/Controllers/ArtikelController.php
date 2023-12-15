<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use\App\Models\artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel',[
            "title"=>"Artikel",
            "posts"=>\Illuminate\Support\Facades\DB::table('artikels')->paginate(5)
        ]);
    }

    public function show(Artikel $post){
        return view ('post',[
            "title"=> "Single post",
            "post"=> $post
        ]);
    }
}
