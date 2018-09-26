<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->unsignedinteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->OnDelete('CASCADE');
            $table->unsignedinteger('id_galeri');
            $table->foreign('id_galeri')->references('id')->on('galeris')->OnDelete('CASCADE');
            $table->text('content');
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
        Schema::dropIfExists('artikels');
    }
}
