<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterWalletTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('wallets', function (Blueprint $table) {

            $table->string('ext_wallet_id')->nullable();
            $table->string('ext_wallet_coin')->nullable();
            $table->string('ext_wallet_label')->nullable();
            $table->string('ext_wallet_passphrase')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('wallets', function (Blueprint $table) {
            $table->dropColumn('ext_wallet_id');
            $table->dropColumn('ext_wallet_coin');
            $table->dropColumn('ext_wallet_label');
            $table->dropColumn('ext_wallet_passphrase');
        });
    }
}
