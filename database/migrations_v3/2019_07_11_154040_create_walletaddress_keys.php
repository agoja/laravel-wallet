<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletaddressKeys extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('wallet_addresses', function (Blueprint $table) {

            $table->increments('id');
            $table->morphs('wallet');
            $table->string('ext_address_id');
            $table->string('ext_address');
            $table->string('ext_chain')->nullable();
            $table->string('ext_index')->nullable();
            $table->string('ext_coin');
            $table->string('ext_wallet');
            $table->longText('ext_reddem_script');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('wallet_addresses');
    }
}
