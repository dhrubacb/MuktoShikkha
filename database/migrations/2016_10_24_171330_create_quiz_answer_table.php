<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('quiz_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ans_body');
            $table->integer('ans_marks');
            $table->integer('quizAns_id')->unsigned();
            $table->foreign('quizAns_id')->references('id')->on('quiz_question');
            $table->integer('exam_id')->unsigned();
            $table->foreign('exam_id')->references('id')->on('exam');
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
        Schema::drop('quiz_answer');
    }
}
