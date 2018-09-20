<?php namespace wtt\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWttMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('wtt_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('wtt_movies_genres');
    }
}
