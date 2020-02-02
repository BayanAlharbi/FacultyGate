<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalBackgroundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_background', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('faculty_badge')->unsigned()->index();
            $table->string('major_field');
            $table->string('subspecialty_field');
            $table->string('degree_name')->nullable();
            $table->string('graduate_institution')->nullable();
            // $table->integer('year', 4)->unsigned()->nullable();
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
        Schema::dropIfExists('educational_background');
    }
}
