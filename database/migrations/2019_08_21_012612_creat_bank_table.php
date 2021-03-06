<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('BankAUser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('money');
            $table->timestamps();
        });
        Schema::create('BankBUser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('money');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('BankAUser');
        Schema::dropIfExists('BankBUser');
    }
}
