<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMethodologyQuestionnaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methodology_questionnaire', function (Blueprint $table) {
            $table->unsignedInteger('methodology_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('answer_id');
            $table->float('points');

            $table->foreign('methodology_id')->references('id')->on('methodologies')->onDelete('cascade');
            $table->foreign('question_id')->references('question_id')->on('question_answers')->onDelete('cascade');

            $table->primary(['methodology_id', 'question_id', 'answer_id'], 'methodology_questionnaire_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('methodology_questionnaire', function (Blueprint $table) {
            $table->dropForeign('methodology_questionnaire_methodology_id_foreign');
            $table->dropForeign('methodology_questionnaire_question_id_foreign');
        });

        Schema::dropIfExists('methodology_questionnaire');
    }
}
