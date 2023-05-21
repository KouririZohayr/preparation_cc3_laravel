<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications =Publication::all();
        foreach ($publications as $publication) {
            if ($publication->publicationable_type === 'App\Models\Tweet'){
                echo $publication ;
            }elseif($publication->publicationable_type === 'App\Models\Instagram_post'){
                echo $publication ;
            } };
        /* $publications = Publication::with('publicationable')->get();
        foreach ($publications as $publication) {
         if ($publication->publicationable_type === 'App\Models\Tweet') {
         echo $publication->publicationable->tweet_content;
         } elseif ($publication->publicationable_type === 'App\Models\Facebook_message') {
         echo $publication->publicationable->message_content;
         } elseif ($publication->publicationable_type === 'App\Models\Instagram_post') {
         echo $publication->publicationable->post_content;
         }
        } */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
