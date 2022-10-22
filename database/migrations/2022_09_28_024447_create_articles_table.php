<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('abstract');
            $table->string('journal_title');
            $table->string('url')->unique();
            $table->string('doi')->unique();
            $table->foreignId('pub_type_id')->constrained();
            $table->integer('page');
            $table->date('date');
            $table->foreignId('institution_id')->constrained();
            $table->unsignedBigInteger('encoded_by');
            $table->foreign('encoded_by')->references('id')->on('users');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->foreign('approved_by')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}