<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Cupon",
 *      required={"cupon_code", "cupon_object", "cupon_type", "cupon_is_recuring", "cupon_start", "cupon_end", "cupon_description"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="cupon_code",
 *          description="cupon_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cupon_object",
 *          description="cupon_object",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cupon_type",
 *          description="cupon_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cupon_is_recuring",
 *          description="cupon_is_recuring",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="cupon_start",
 *          description="cupon_start",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="cupon_end",
 *          description="cupon_end",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="cupon_description",
 *          description="cupon_description",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Cupon extends Model
{
    use SoftDeletes;

    public $table = 'cupons';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cupon_code' => 'string',
        'cupon_object' => 'string',
        'cupon_type' => 'string',
        'cupon_nominal' => 'decimal',
        'cupon_is_recuring' => 'boolean',
        'cupon_start' => 'date',
        'cupon_end' => 'date',
        'cupon_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cupon_code' => 'required',
        'cupon_object' => 'required',
        'cupon_type' => 'required',
        'cupon_is_recuring' => 'required',
        'cupon_start' => 'required',
        'cupon_end' => 'required',
        'cupon_description' => 'required'
    ];

    public function getStart ($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }
    
}
