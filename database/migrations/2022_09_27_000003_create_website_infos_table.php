<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_infos', function (Blueprint $table) {
            $table->id();
            $table->text('history');
            $table->text('mission');
            $table->text('vision');
            $table->text('about');
            $table->text('objectives');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('city');
            $table->string('zip_code');
            $table->string('tel_number');
            $table->string('email');
            $table->string('fb_page');
            $table->string('website');
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('website_infos');
    }
}
