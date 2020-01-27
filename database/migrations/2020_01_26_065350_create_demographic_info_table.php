<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemographicInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographic_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('faculty_badge')->unsigned()->index();
            $table->string('nationality');
            $table->integer('national_id');
            $table->string('gender');
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('demographic_info');
    }
}
