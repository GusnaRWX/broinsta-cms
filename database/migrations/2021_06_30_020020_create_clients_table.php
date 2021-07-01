<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('no_akun');
            $table->string('password');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('withdraw')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('pemilik_rek')->nullable();
            $table->string('rebate')->nullable();
            $table->string('rebate_rek')->nullable();
            $table->string('pemilik_rek_rebate')->nullable();
            $table->string('ktp_penerima')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
