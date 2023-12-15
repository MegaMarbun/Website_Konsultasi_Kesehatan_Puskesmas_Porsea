<?php

namespace App\Http\Controllers;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\Post;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/articles.index',[
            'artikels' => Artikel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:500',
                'body' => 'required',
                // 'slug' => 'required|unique:posts'
                'image' => 'required|image'
            ]);
    
            $validatedData ['user_id'] = auth()->user()->id;  
            $validatedData ['excerpt'] = Str::limit(strip_tags($request->body),50);    
            $validatedData['file_path']  = Storage::disk('public_uploads')->put('file_upload', $request->image);
            
            Artikel::create($validatedData);
    
            return redirect('admin/articles')->with('toast_success','Artikel berhasil dibuat');
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect('admin/articles')->with('toast_error','Gagal membuat artikel');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $post){
        return view ('admin/articles.post',[
            "title"=> "Single post",
            "post"=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Artikel::find($id);
        return view('admin/articles.edit', compact('post'));
        // [
        //     // 'post' => $post
        // ]
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        try {
            $post =  Artikel::find($id);
            $validatedData = $request->validate([
                'title' => 'required|max:500',
                'body' => 'required',
                // 'slug' => 'required|unique:posts'
            ]);

            $validatedData ['user_id'] = auth()->user()->id;  
            $validatedData ['excerpt'] = Str::limit(strip_tags($request->body),50);     

            if ($request->image != null) {
                $validatedData['file_path']  = Storage::disk('public_uploads')->put('file_upload', $request->image);
            }
            
            $post->update($validatedData);

            return redirect('admin/articles')->with('toast_success','Artikel berhasil diedit');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Artikel::find($id);
        $post->delete();

        return redirect('admin/articles')->with('toast_success','Artikel berhasil dihapus');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug'=>$slug]); 
    }

}
