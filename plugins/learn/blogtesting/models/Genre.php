<?php namespace Learn\Blogtesting\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
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
    public $table = 'learn_blogtesting_genres';


   /* public $belongsToMany =[
        'Blogtesting' =>[
            'learn\blogtesting\Models\Blogtesting',
            'table' =>'learn_blogtesting_testing_genres',
            'order' =>'name'
        ]
    ];
*/



    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
