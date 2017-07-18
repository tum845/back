<?php

namespace App\Repositories;

use App\Models\Market;
use InfyOm\Generator\Common\BaseRepository;

class MarketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'market_name',
        'market_icon',
        'market_country',
        'market_province',
        'market_regency',
        'market_district',
        'market_location'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Market::class;
    }
}
