<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Market
 * @package App\Models
 * @version May 22, 2017, 3:34 am UTC
 */
class Market extends Model
{
    use SoftDeletes;

    public $table = 'markets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'market_name',
        'market_icon',
        'market_country',
        'market_province',
        'market_regency',
        'market_district',
        'market_location',
        'market_latitude',
        'market_longitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'market_name' => 'string',
        'market_icon' => 'string',
        'market_country' => 'string',
        'market_province' => 'string',
        'market_regency' => 'string',
        'market_district' => 'string',
        'market_location' => 'string',
        'market_latitude' => 'double',
        'market_longitude' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'market_name' => 'required',
        'market_country' => 'required',
        'market_province' => 'required',
        'market_regency' => 'required',
        'market_district' => 'required',
        'market_location' => 'required',
        'market_latitude' => 'required',
        'market_longitude' => 'required'
    ];

    public static $rules_update = [

        'market_name' => 'required',
        'market_country' => 'required',
        'market_province' => 'required',
        'market_regency' => 'required',
        'market_district' => 'required',
        'market_location' => 'required',
        'market_latitude' => 'required',
        'market_longitude' => 'required'
    ];

    
}
