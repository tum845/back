<?php

namespace App\Repositories;

use App\Models\Cupon;
use InfyOm\Generator\Common\BaseRepository;

class CuponRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cupon_code',
        'cupon_object',
        'cupon_type',
        'cupon_nominal',
        'cupon_is_recuring',
        'cupon_start',
        'cupon_end',
        'cupon_description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Cupon::class;
    }
}
