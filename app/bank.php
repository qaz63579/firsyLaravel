<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $table = 'news';
    protected $fillable = ['user_id','money'];
}
