<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('AXIOM6_GROUP_MASTER', function (Blueprint $table) {
            $table->increments('GROUPID');
            $table->integer('USERID')->unsigned()->nullable();
            $table->foreign('USERID')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->string('GROUP_NAME', 50)->nullable();
            $table->integer('GROUP_SIZE')->nullable();
            $table->date('GROUP_CREATION_DATE')->nullable();
            $table->integer('STATUS')->nullable();
            $table->date('LAST_MODIFY_DATE')->nullable();
            $table->string('LAST_ACTION_TAKEN', 1)->nullable();
            $table->string('GROUP_COUNTRY_CODE', 6)->nullable();
            $table->string('GROUP_TYPE', 1)->nullable();
            $table->string('REJECTEDCNT', 7)->nullable();
            $table->string('FILENAME', 7)->nullable();
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
        Schema::dropIfExists('AXIOM6_GROUP_MASTER');  
    }
}
