<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_id');

            $table->string('subject_id');
          
            $table->string('chapter_id');
            $table->string('chapter_name');
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
        //
          Schema::drop('chapter'); 
    }
}
