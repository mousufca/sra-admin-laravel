<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->string("slug");
            $table->longText("content");
            $table->string("featured_image");
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("student_id");
            $table->dateTime("published_date");
            $table->enum("status",["draft","published","trash"]);
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')->on('blog_categories')
                ->onDelete('cascade');

            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
