<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Post extends Model
{

    protected $fillable = ['title', 'short_description', 'long_description', 'published', 'created_by','modified_by'];

    protected $table = 'posts';

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
