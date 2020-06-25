<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {

            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->primary(['post_id', 'tag_id']);

            // Chave estrangeira da tabela -- Post --
            $table->foreign('post_id')->references('id')->on('posts');
            $table->index('post_id');

            // Chave estrangeira da tabela -- Tag --
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->index('tag_id');

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
        Schema::dropIfExists('posts_tags');
    }
}
