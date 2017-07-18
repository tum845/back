<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profile
 * @package App\Models
 * @version May 22, 2017, 4:13 am UTC
 */
class Profile extends Model
{
    use SoftDeletes;

    public $table = 'profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'profile_phone',
        'profile_province',
        'profile_regency',
        'profile_district',
        'profile_address',
        'profile_birthday',
        'profile_genre',
        'profile_job',
        'profile_latitude',
        'profile_longitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'profile_phone' => 'string',
        'profile_province' => 'string',
        'profile_regency' => 'string',
        'profile_district' => 'string',
        'profile_birthday' => 'date',
        'profile_genre' => 'string',
        'profile_job' => 'string',
        'profile_latitude' => 'double',
        'profile_longitude' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'profile_phone' => 'required',
        'profile_province' => 'required',
        'profile_regency' => 'required',
        'profile_district' => 'required',
        'profile_address' => 'required',
        'profile_genre' => 'required',
        'profile_latitude' => 'required',
        'profile_longitude' => 'required'
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
    
}
