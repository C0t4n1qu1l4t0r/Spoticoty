<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_song', function (Blueprint $table) {
            $table->primary(['song_id','playlist_id']);
            $table->bigInteger('song_id')->unsigned();
            $table->bigInteger('playlist_id')->unsigned();
            $table->timestamps();
            $table->foreign('song_id')->references('id')->on('songs');
            $table->foreign('playlist_id')->references('id')->on('playlists');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_song');
    }
};
