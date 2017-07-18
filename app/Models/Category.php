<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 * @package App\Models
 * @version May 22, 2017, 3:11 am UTC
 */
class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'category_name',
        'category_icon',
        'category_color',
        'category_brief',
        'category_priority',
        'category_publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'category_name' => 'string',
        'category_icon' => 'string',
        'category_color' => 'string',
        'category_brief' => 'string',
        'category_publish' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_name' => 'required|min:3',
        'category_icon' => 'required',
        'category_color' => 'required',
        'category_brief' => 'required',
        'category_priority' => 'required|numeric',
        'category_publish' => 'required'
    ];

    
}
