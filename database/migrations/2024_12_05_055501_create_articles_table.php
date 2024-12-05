<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->comment('Here store article title');
            $table->text('description')->comment('Here store article content');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->comment('Here store user id number');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade')->comment('Here store category id');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade')->comment('Here store tag id');
            $table->boolean('status')->default(0)->comment('1 = published, 0 = draft');
            $table->string('image', 255)->nullable()->comment('Here store article image');
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
        Schema::dropIfExists('article');
    }
}
