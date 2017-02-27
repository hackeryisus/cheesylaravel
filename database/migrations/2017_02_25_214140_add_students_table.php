<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname', 20);
            $table->string('lname', 20);
            $table->string('email')->unique();
            $table->integer('phonenumber');
            $table->string('facebook_user');
            $table->string('facebook_link');
            $table->integer('group_id')
                  ->unsigned()
                  ->default(1);
            $table->foreign('group_id')
                  ->references('id')
                  ->on('groups')
                  ->onDelete('cascade');
            $table->integer('image_id')
                  ->unsigned()
                  ->default(1);
            $table->foreign('image_id')
                  ->references('id')
                  ->on('images');
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
        Schema::dropIfExists('students');
    }
}
