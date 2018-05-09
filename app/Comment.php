<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','post_id', 'description'];

    protected $table = 'comments';

    public function posts()
    {
        return $this->belongsTo('App\Post','post_id','id');
    }

}
