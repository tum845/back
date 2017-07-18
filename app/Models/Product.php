<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Product",
 *      required={"product_name", "product_image", "product_price_market", "product_price_sale", "product_stock", "product_status", "product_description", "market_id"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_name",
 *          description="product_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_image",
 *          description="product_image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="product_stock",
 *          description="product_stock",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="product_status",
 *          description="product_status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="market_id",
 *          description="market_id",
 *          type="integer",
 *          format="int32"
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
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_name',
        'product_image',
        'product_price_market',
        'product_price_sale',
        'product_price_promo',
        'product_stock',
        'product_status',
        'product_description',
        'market_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_name' => 'string',
        'product_image' => 'string',
        'product_stock' => 'integer',
        'product_status' => 'string',
        'market_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_name' => 'required',
        'product_image' => 'required',
        'product_price_market' => 'required',
        'product_price_sale' => 'required',
        'product_stock' => 'required',
        'product_status' => 'required',
        'product_description' => 'required',
        'market_id' => 'required'
    ];

    public static $rules_update = [
        'product_name' => 'required',
        'product_price_market' => 'required',
        'product_price_sale' => 'required',
        'product_stock' => 'required',
        'product_status' => 'required',
        'product_description' => 'required',
        'market_id' => 'required'
    ];

    public function market ()
    {
        return $this->belongsTo(Market::class);
    }

    
}
