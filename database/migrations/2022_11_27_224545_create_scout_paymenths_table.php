<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scout_paymenths', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('total');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('TakeAppointment_id')->nullable();
            $table->string('transaction_id');
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
        Schema::dropIfExists('scout_paymenths');
    }
};
