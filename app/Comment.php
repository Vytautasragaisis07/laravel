<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['ad_id', 'user_id', 'name', 'comment'];
    public function ads(){
        return $this->belongsTo(Ad::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
