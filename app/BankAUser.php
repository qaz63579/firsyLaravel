<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAUser extends Model
{
    //
    protected $table = 'BankAUser';
    protected $fillable = ['money'];
}
