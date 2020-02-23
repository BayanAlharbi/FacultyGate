<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researches', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->integer('faculty_id')->unsigned()->index();
            $table->integer('pbl');
            $table->integer('research_proposal_supervised');
            $table->integer('research_proposal_cosupervised');
            $table->integer('irb_approval');
            $table->integer('research_presentation');
            $table->integer('publication');
            $table->integer('student_involvement');
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
        Schema::dropIfExists('researches');
    }
}
