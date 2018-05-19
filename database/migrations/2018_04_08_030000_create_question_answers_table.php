<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answers', function (Blueprint $table) {
            $table->unsignedInteger('question_id')->nullable();
            $table->integer('answer_id');
            $table->string('answer');

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->primary(['question_id', 'answer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_answers', function (Blueprint $table) {
            $table->dropForeign('question_answers_question_id_foreign');
        });

        Schema::dropIfExists('question_answers');
    }
}
