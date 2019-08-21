<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAReceipt extends Model
{
    //
    protected $table = 'BankAReceipt';
    protected $fillable = ['user_id','money'];
}
