<?php namespace wtt\Movies\Models;

use Model;

/**
 * Model
 */
class Movies extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wtt_movies_';

    
    protected $jsonable = ['actors'];






    /* Relation */
     public $belongsToMany = [
        'genres' => [
            'wtt\Movies\Models\Genre',
            'table' => 'wtt_movies_movies_genres',
            'order' => 'genre_title'
        ]
    ];

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];
}
