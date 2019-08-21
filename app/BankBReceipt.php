<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBReceipt extends Model
{
    //
    protected $table = 'BankBReceipt';
    protected $fillable = ['user_id','money'];
}
