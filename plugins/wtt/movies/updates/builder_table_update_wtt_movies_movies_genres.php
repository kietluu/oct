<?php namespace wtt\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWttMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::table('wtt_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movie_id','genre_id']);
            $table->renameColumn('movie_id', 'movies_id');
            $table->primary(['movies_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::table('wtt_movies_movies_genres', function($table)
        {
            $table->dropPrimary(['movies_id','genre_id']);
            $table->renameColumn('movies_id', 'movie_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
}
