<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Payment",
 *      required={"payment_name", "payment_code", "payment_description", "payment_status"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="payment_name",
 *          description="payment_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payment_code",
 *          description="payment_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payment_image",
 *          description="payment_image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="payment_status",
 *          description="payment_status",
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
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'payment_name',
        'payment_code',
        'payment_image',
        'payment_description',
        'payment_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'payment_name' => 'string',
        'payment_code' => 'string',
        'payment_image' => 'string',
        'payment_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'payment_name' => 'required',
        'payment_code' => 'required',
        'payment_description' => 'required',
        'payment_status' => 'required'
    ];

    
}
