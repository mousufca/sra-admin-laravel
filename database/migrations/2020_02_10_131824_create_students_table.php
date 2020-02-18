<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("username")->unique();
            $table->string("password");
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->enum("status",["pending","active","suspended","blocked"]);
            $table->unsignedBigInteger("college_id");
            $table->string("profile")->nullable();
            $table->string("id_card");
            $table->string("bio")->nullable();
            $table->json("social")->nullable();
            $table->timestamps();


            $table->foreign('college_id')
                ->references('id')->on('colleges')
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
        Schema::dropIfExists('students');
    }
}
