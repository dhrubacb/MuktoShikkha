<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('blog', function (Blueprint $table) {


                    $table->increments('id');
                    $table->text('blog');
                    $table->string('blog_title');
                    $table->string('email');
                    $table->integer('upvote');
                    $table->integer('downvote');
                    $table->string('created_date');
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
         Schema::drop('blog');
    }
}
