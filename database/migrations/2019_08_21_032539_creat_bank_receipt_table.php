<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatBankReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BankAReceipt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->integer('money');
            $table->timestamps();
        });
        Schema::create('BankBReceipt', function (Blueprint $table) {
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
        //
    }
}
