<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('account_number')->nullable();
            $table->bigInteger('deposit')->nullable();
            $table->bigInteger('transfer')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('name_rek')->nullable();
            $table->string('image')->nullable();
            $table->string('bank_transfer')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposits');
    }
}
