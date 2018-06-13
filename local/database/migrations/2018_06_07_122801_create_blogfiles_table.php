<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("Filename");
            $table->integer('blog_id');
            $table->integer('blogfileType_id');
            $table->integer('createdby_id');
            $table->integer('modifyby_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogfiles');
    }
}
