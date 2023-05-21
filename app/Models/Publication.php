<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;
use App\Models\Instagram_post;
use App\Models\Facebook_message;

class Publication extends Model
{
    use HasFactory;
    //protected $fillable = ['content', 'publicationble_type', 'publicationble_id'];
    public function Tweets()
    {
        return $this->morphedByMany(Tweet::class,'publicationable');
    }
    public function Facebook_messages()
    {
        return $this->morphedByMany(Facebook_message::class,'publicationable');
    }
    public function Instagram_posts()
    {
        return $this->morphedByMany(Instagram_post::class,'publicationable');
    }
}
