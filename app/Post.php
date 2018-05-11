<?php

namespace App;

use App\Constants\PostStatus;
use Illuminate\Database\Eloquent\Model;
use App\Comment;

/**
 * Class Post
 * @package App
 *
 * @property $status string
 * @method published()
 */
class Post extends Model
{

    protected $fillable = ['title', 'short_description', 'long_description', 'status', 'created_by', 'modified_by'];

    protected $table = 'posts';


    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Выбрать только опубликованный записи.
     *
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('status', PostStatus::PUBLISHED()->getKey());
    }

    public function getStatus()
    {
        $status =  PostStatus::values();

        return $status[$this->status]->getValue()??PostStatus::UNKNOWN;
    }
}
