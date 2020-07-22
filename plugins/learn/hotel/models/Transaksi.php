<?php namespace Learn\Hotel\Models;

use Model;

/**
 * Model
 */
class Transaksi extends Model
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
    public $table = 'learn_hotel_hotel_transaksi';

    /*Relation*/

    public $belongsToMany =[
        'hotel' =>[
            'learn\hotel\Models\hotel',
            'table' =>'learn_hotel_hotel_transaksi',
            'order' =>'nama_hotel'
        ],
        'kamars' =>[
            'learn\hotel\Models\kamar',
            'table' =>'learn_hotel_hotel_transaksi',
            'order' =>'type_kmr','hrg'
        ],
        'pelanggans' =>[
            'learn\hotel\Models\pelanggan',
            'table' =>'learn_hotel_hotel_transaksi',
            'order' =>'nama_pelanggan'
        ]
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
