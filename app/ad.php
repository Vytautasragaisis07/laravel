<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    protected $fillable = ['title', 'description', 'price', 'email', 'phone', 'location', 'catid'];
}