<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =["title","contenu","user_id"];
    use HasFactory;
    public function articles(){
        return $this->belongsTo(User::class , "user_id");
    }
}
