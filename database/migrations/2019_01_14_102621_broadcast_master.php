<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BroadcastMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('AXIOM6_BROADCAST_MASTER', function (Blueprint $table) {
            $table->increments('BROADCASTID');
            $table->string('BROADCAST_NAME')->nullable();
            $table->date('BROADCAST_CREATETIME');
            $table->date('BROADCAST_SCHEDULE');
            $table->date('BROADCAST_SCHEDULE_GMT');
            $table->string('SENDER_NAME')->nullable();
            $table->integer('USERID')->unsigned()->nullable();
            $table->foreign('USERID')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->string('BROADCAST_COUNTRYCODE')->nullable();
            $table->string('MESSAGE_TYPE')->nullable();
            $table->char('BROADCAST_STATUS', 1)->nullable();
            $table->string('BROADCAST_REJECT_REASON', 300)->nullable();
            $table->string('BROADCAST_PRIORITY', 300)->nullable();
            $table->string('BROADCAST_CREDITS', 300)->nullable();
            $table->integer('BROADCAST_MSISDN_COUNT')->nullable();
            $table->string('BROADCAST_DND', 300)->nullable();
            $table->string('CONTENT_TYPE', 300)->nullable();
            $table->string('SIURL', 300)->nullable();
            $table->string('BROADCAST_SMS_COUNT', 300)->nullable();
            $table->string('DEPARTMENTCODE', 300)->nullable();
            $table->string('SENDERID', 300)->nullable();
            $table->string('SUB_DEPARTMENTCODE', 300)->nullable();
            $table->string('ATTACHED_GROUP_ID', 300)->nullable();
            $table->string('EMAIL_TEMPLATE_ID', 50)->nullable();
            $table->char('BROADCAST_TYPE', 1)->nullable();
            $table->binary('BROADCAST_MESSAGE')->nullable();
            $table->string('FILENAME', 250)->nullable();
            $table->string('REJECTEDCNT', 10)->nullable();
            $table->string('INSTFLAG', 10)->nullable();
            $table->string('FILEHEADER', 10)->nullable();
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
