<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInTemplateMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('AXIOM6_TEMPLATE_MASTER', function (Blueprint $table) {
            $table->enum('TEMPTYPE', ['static', 'dynamic'])->default('static')->after('TEMPLATEMESSAGE');
            $table->enum('TEMP_STATUS', [0, 1])->default(0)->after('LASTMODIFIEDDATE');
            $table->enum('APPROVAL_STATUS', ['submitted', 'approved', 'rejected'])->default('approved')->after('TEMPSTATUS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AXIOM6_TEMPLATE_MASTER', function (Blueprint $table) {
            $table->dropColumn(['TEMPTYPE', 'TEMPSTATUS', 'APPROVAL_STATUS']);
        });  
    }
}
