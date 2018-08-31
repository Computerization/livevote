<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function comments(){
      return $this->hasMany('App\Comment');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    protected $fillable = ['title', 'content', 'content_status', 'comment_status', 'user_id', 'organization_id', 'up_count'];
}
