<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogSpamReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_spam_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("blog_post_id")->nullable();
            $table->unsignedBigInteger("blog_comment_id")->nullable();
            $table->enum("type",["post","comment"]);
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('blog_post_id')
                ->references('id')->on('blog_posts')
                ->onDelete('cascade');

            $table->foreign('blog_comment_id')
                ->references('id')->on('blog_comments')
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
        Schema::dropIfExists('blog_spam_reports');
    }
}
