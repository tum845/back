<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{
    protected $fillable = [
        'user_id',
        'source',
        'source_id',
        'avatar'
    ];


    public function user ()
    {

        return $this->belongsTo (User::class);

    }
}
