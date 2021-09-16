<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TempData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('AXIOM6_TEMP_DATA', function (Blueprint $table) {
            $table->increments('MSGID');
            $table->string('PHONENUMBER', 50)->nullable();
            $table->string('USERID');
            $table->integer('BROADCASTID')->nullable();
            $table->longText('MESSAGE')->nullable();
            $table->string('SMS_COUNT', 3)->nullable();
            $table->string('SMS_CREDIT', 300)->nullable();
            $table->string('COUNTRY_NAME', 300)->nullable();
            $table->string('OPERATOR_NAME', 300)->nullable();
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
        Schema::dropIfExists('AXIOM6_TEMP_DATA');
    }
}
