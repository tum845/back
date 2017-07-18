<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Account",
 *      required={"amount", "account_type", "transaction_type", "transaction_status"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="amount",
 *          description="amount",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="account_type",
 *          description="account_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="transaction_type",
 *          description="transaction_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="transaction_status",
 *          description="transaction_status",
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
class Account extends Model
{

    public $table = 'account';
    public $timestamps=false;

    public $fillable = [
        'amount',
        'account_type',
        'transaction_type',
        'transaction_date',
        'transaction_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'account_type' => 'string',
        'transaction_type' => 'string',
        'transaction_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'amount' => 'required',
        'account_type' => 'required',
        'transaction_type' => 'required',
        'transaction_status' => 'required'
    ];

    
}
