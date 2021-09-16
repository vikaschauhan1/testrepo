<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TemplateMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AXIOM6_TEMPLATE_MASTER', function (Blueprint $table) {
            $table->increments('TEMPLATEID');
            $table->string('TEMPLATENAME', 50)->nullable();
            $table->longText('TEMPLATEMESSAGE')->nullable();
            $table->integer('TEMPSTATUS');
            $table->date('CREATIONDATE')->nullable();
            $table->integer('CREATIONBY')->unsigned();
            $table->foreign('CREATIONBY')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->integer('LASTMODIFIEDBY')->nullable()->unsigned();
            $table->foreign('LASTMODIFIEDBY')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->date('LASTMODIFIEDDATE')->nullable();
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
        Schema::dropIfExists('AXIOM6_TEMPLATE_MASTER');
    }
}
