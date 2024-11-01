<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_account_types', function (Blueprint $table) {
            $table->unsignedBigInteger('account_type_id')->after('user_id');
            $table->foreign('account_type_id')->references('id')->on('account_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_account_types', function (Blueprint $table) {
            $table->dropForeign('account_type_id');
            $table->dropColumn('account_type_id');
        });
    }
};
