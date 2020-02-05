<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameFacultyBadgeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('contact_info', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });
        Schema::table('demographic_info', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });

        Schema::table('educational_background', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('contact_info', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });
        Schema::table('demographic_info', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });

        Schema::table('educational_background', function (Blueprint $table) {
            $table->renameColumn('faculty_badge', 'faculty_id');
        });
    }
}
