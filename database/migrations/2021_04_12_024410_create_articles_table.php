<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('title', 255)->nullable();
            $table->string('slug')->nullable();
            $table->string('content')->nullable();
            $table->string('notes', 1000)->nullable();
            $table->integer('created_by')->unsigned()->nullable()->index();
            $table->string('body')->nullable();
            $table->string('image')->nullable();
            $table->string('active')->nullable();
            $table->string('featured')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('category_id')->unsigned()->nullable()->index();
            $table->integer('comment_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
