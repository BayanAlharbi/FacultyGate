<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('full_time', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('faculty_id')->unsigned()->index();
            $table->integer('yearly_appraisal');
            $table->integer('business_leave');
            $table->text('administrative_duties');
            $table->integer('number_of_invigilator');
            $table->integer('total_invigilator_hour');
            $table->text('committee_membership');
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
        Schema::dropIfExists('full_time');
    }
}
