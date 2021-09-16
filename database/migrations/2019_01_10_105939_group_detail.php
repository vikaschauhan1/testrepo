<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('AXIOM6_GROUP_DETAIL', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USERID')->unsigned();
            $table->foreign('USERID')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->integer('GROUPID')->unsigned();
            $table->foreign('GROUPID')->references('GROUPID')->on('AXIOM6_GROUP_MASTER')->onDelete('cascade');
            $table->string('MOBILENO', 50)->nullable();
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
        Schema::dropIfExists('AXIOM6_GROUP_DETAIL');
    
    }
}
