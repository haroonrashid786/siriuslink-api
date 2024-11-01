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
        Schema::create('announce_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('project_announcement_date')->nullable();
            $table->string('project_closing_date')->nullable();
            $table->longText('project_description')->nullable();
            $table->string('show_my_identity')->nullable();
            $table->string('general_announcer')->nullable();
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
        Schema::dropIfExists('announce_projects');
    }
};
