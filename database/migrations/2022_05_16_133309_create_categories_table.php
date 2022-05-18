<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // Start Group Id Categories, Parent Id and users id
            $table->id();
            $table->unsignedBigInteger('parent_id', 3);
            $table->integer('user_id', 5);
            // End Group Id Categories, Parent Id and users id

            // Start Group InFomation Categories
            $table->string('title', 225)->required()->unique();
            $table->string('slug', 225)->required()->unique();
            $table->string('thumbnail', 225);
            $table->string('avatar', 225);
            $table->string('description', 300);
            $table->string('content', 3000);
            // End Group InFomation Categories

            // Start Group Action
            $table->integer('type', 1);
            $table->boolean('state', true);
            $table->boolean('trash', false);
            // End Group Action

            // Start Group meta SEO
            $table->string('canonical', 255);
            $table->string('meta_title', 225);
            $table->string('meta_keywords', 300);
            $table->string('meta_description', 300);
            // End Group meta SEO
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
