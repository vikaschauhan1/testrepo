<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInGroupmMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('AXIOM6_GROUP_MASTER', function (Blueprint $table) {
            $table->enum('GROUP_RECIPIENT_TYPE', ['domestic', 'international', 'all'])->default('domestic')->after('GROUP_NAME');
            $table->enum('GROUP_ADD_RECIPIENT_TYPE', ['manual', 'upload'])->nullable()->after('GROUP_RECIPIENT_TYPE');
            $table->enum('LAST_ACTION', ['add', 'append', 'remove'])->default('add')->after('GROUP_ADD_RECIPIENT_TYPE');
            $table->enum('APPROVAL_STATUS', ['submitted', 'approved', 'rejected'])->default('approved')->after('FILENAME');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AXIOM6_GROUP_MASTER', function (Blueprint $table) {
            $table->dropColumn(['GROUP_RECIPIENT_TYPE', 'GROUP_ADD_RECIPIENT_TYPE', 'LAST_ACTION', 'APPROVAL_STATUS']);
        });       
    }
}
