<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AXIOM6_USER_MASTER', function (Blueprint $table) {
            $table->increments('USERID');
            $table->string('USERNAME');
            $table->string('NAME');
            $table->string('EMAIL', 191)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('PASSWORD');
            $table->rememberToken();
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
        Schema::dropIfExists('AXIOM6_USER_MASTER');
    }
}
