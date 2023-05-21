<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Post = Post::all();
        return view('TabllePoste',['posts'=>$Post]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('PostCreat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            "title" => $request->title,
            "content" =>$request->content,
            "user_id" =>$request->user_id,
        ]);
        return redirect('/Post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post ,$id )
    {
       $post = Post::find($id);
       return view('PostEdite',['post'=>$post]);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post,$id )
    {
        $post = Post::find($id);
        return view('PostEdite',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post , $id)
    {
        $post=Post::find($id);
        $post->update([
            "title" => $request->title,
            "content" =>$request->content
        ]);
         return redirect('/Post');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
