<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'created_at', 'updated_at'];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

}
