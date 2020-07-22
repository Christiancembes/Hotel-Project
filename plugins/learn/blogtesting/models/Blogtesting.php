<?php namespace Learn\Blogtesting\Models;

use Model;

/**
 * Model
 */
class Blogtesting extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'learn_blogtesting_';

    
    /* Relations */

    public $belongsToMany =[
        'genres' =>[
            'learn\blogtesting\Models\Genre',
            'table' =>'learn_blogtesting_testing_genres',
            'order' =>'genre_title'
        ],    
        'actors'=>[
            'learn\blogtesting\Models\Actor',
            'table' =>'learn_blogtesting_testing_actors',
            'order' =>'first_name'
        ]
    ];



    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
