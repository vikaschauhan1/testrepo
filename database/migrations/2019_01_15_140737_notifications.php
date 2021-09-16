<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('AXIOM6_NOTIFICATIONS', function (Blueprint $table) {
            $table->increments('NOTIFICATIONID', 10);
            $table->integer('ENTITY_ID');
            $table->enum('ENTITY_TYPE', ['group', 'template','broadcast'])->nullable();
            $table->enum('APPROVAL_STATUS', ['submitted', 'approved', 'rejected'])->default('submitted');
            $table->longText('REJECTION_REASON')->nullable();
            $table->integer('CREATED_BY')->nullable()->unsigned();
            $table->foreign('CREATED_BY')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->date('CREATED_DATE')->nullable();
            $table->integer('UPDATED_BY')->nullable()->unsigned();
            $table->foreign('UPDATED_BY')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
            $table->date('UPDATED_DATE')->nullable();
            $table->enum('IS_READ', [0, 1])->default(0);
            $table->integer('USERID')->nullable()->unsigned();
            $table->foreign('USERID')->references('USERID')->on('AXIOM6_USER_MASTER')->onDelete('cascade');
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
        Schema::dropIfExists('AXIOM6_NOTIFICATIONS');  
    }
}
