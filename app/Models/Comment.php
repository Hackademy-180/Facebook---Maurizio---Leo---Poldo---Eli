<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =["description","user_id","post_id"];
    public function user(){
        return $this->belongsTo(user::class);
    }
     public function post(){
        return $this->belongsTo(post::class);
    }
}
