<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletkeysTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('wallet_keys', function (Blueprint $table) {

            $table->increments('id');
            $table->morphs('wallet');
            $table->json('ext_keys');
            $table->json('ext_keys_signatures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('wallet_keys');
    }
}
