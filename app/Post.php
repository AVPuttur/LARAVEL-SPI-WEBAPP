<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
	public $timestamps = true;

    protected $fillable = ['title', 'article', 'image', 'links'];
}
