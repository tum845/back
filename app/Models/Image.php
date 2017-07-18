<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * @package App\Models
 * @version May 22, 2017, 3:48 am UTC
 */
class Image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'image_name',
        'image_description',
        'image_file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'image_name' => 'string',
        'image_file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image_name' => 'required',
        'image_description' => 'required',
        'image_file' => 'required'
    ];

    
}
