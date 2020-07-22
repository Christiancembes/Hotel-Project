<?php namespace Learn\Hotel\Models;

use Model;

/**
 * Model
 */
class Pegawai extends Model
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
    public $table = 'learn_hotel_pegawais';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
