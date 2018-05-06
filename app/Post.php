<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['id', 'title', 'short_description', 'long_description', 'published', 'created_by','modified_by'];

    protected $table = 'posts';
}
