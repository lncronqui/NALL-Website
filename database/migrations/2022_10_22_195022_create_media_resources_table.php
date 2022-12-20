<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->text('abstract');
            $table->string('url')->nullable()->unique();
            $table->string('doi')->nullable()->unique();
            $table->integer('page')->nullable();
            $table->date('date');
            $table->foreignId('resource_type_id')->constrained();
            $table->foreignId('access_type_id')->contrained();
            $table->foreignId('institution_id')->constrained();
            $table->string('encoded_by');
            $table->string('approved_by')->nullable();
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
        Schema::dropIfExists('media_resources');
    }
};
