<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instagram_post extends Model
{
    use HasFactory;
    public function publicationble() {
        return $this->morphTo();
    }
}
