<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemoveColumnsInBroadcastMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('AXIOM6_BROADCAST_MASTER', function (Blueprint $table) {
            $table->enum('BROADCAST_CATEGORY', ['simple', 'one', 'dynamic', 'reminder'])->default('simple')->after('BROADCAST_SCHEDULE_GMT');
            $table->enum('MESSAGE_CATEGORY', ['alert', 'promotional'])->default('alert')->after('BROADCAST_CATEGORY');
            $table->enum('BROADCAST_TERMINATION', ['domestic', 'international', 'all'])->default('domestic')->after('SENDER_NAME');
            $table->enum('FLASH_MESSAGE_TYPE', ['0', '1'])->default('0')->after('BROADCAST_TERMINATION');
            $table->enum('MESSAGE_CONTENT_TYPE', ['0', '1', '2'])->default('0')->comment('1 for manual 2 for template and 0 otherwise')->after('MESSAGE_TYPE');
            $table->integer('TEMPLATEID')->nullable()->unsigned()->after('MESSAGE_CONTENT_TYPE');
            $table->foreign('TEMPLATEID')->references('TEMPLATEID')->on('AXIOM6_TEMPLATE_MASTER')->onDelete('cascade');
            $table->enum('ALLOW_UNICODE', ['0', '1'])->default('0')->after('TEMPLATEID');
            $table->enum('RECIPIENT_MODE', ['manual', 'upload', 'template'])->default('manual')->after('ALLOW_UNICODE');
            $table->enum('LAST_ACTION_TAKEN', ['add', 'append', 'remove'])->default('add')->after('RECIPIENT_MODE');
            $table->enum('SCRUB_BLACKLIST_NUMBER', ['0', '1'])->default('0')->after('LAST_ACTION_TAKEN');
            $table->enum('CONTAIN_FILEHEADER', ['YES', 'NO'])->after('SCRUB_BLACKLIST_NUMBER');
            $table->enum('REJECT_DUPLICATE', ['YES', 'NO'])->nullable()->after('FILEHEADER');
            $table->enum('APPROVAL_STATUS', ['submitted', 'approved', 'rejected'])->default('approved')->after('REJECT_DUPLICATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('AXIOM6_BROADCAST_MASTER', function (Blueprint $table) {
            $table->dropColumn(['BROADCAST_CATEGORY', 'MESSAGE_CATEGORY', 'BROADCAST_TERMINATION']);
            $table->dropColumn(['FLASH_MESSAGE_TYPE', 'MESSAGE_CONTENT_TYPE', 'TEMPLATEID', 'ALLOW_UNICODE', 'RECIPIENT_MODE', 'LAST_ACTION_TAKEN', 'SCRUB_BLACKLIST_NUMBER']);
            $table->dropColumn(['CONTAIN_FILEHEADER', 'REJECT_DUPLICATE', 'APPROVAL_STATUS']);
        });
    }
}
