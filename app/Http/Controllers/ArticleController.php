<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\ajouteEvent;
use App\Events\suppEvent;
use App\Events\updateEvent;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles = Article::all();
       return view('article',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $user= Auth::user();
        return view('ajouterArticle' , ["user"=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user= Auth::user();
        $newArticle= new Article([
            "title" => $request->title,
            "contenu" => $request->contenu,
            "user_id" => $user->id
        ]);
        $newArticle->save();

        event(new ajouteEvent($newArticle));
        return view("article");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("article",$article);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view("editeArticle",$article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {

        $article->update([
            "title" => $request->title,
            "contenu" => $request->contenu,
            "user_id" => $request->user_id
        ]);
        event(new updateEvent($article));
        return view("article");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        event(new suppEvent($article));
    }
}
