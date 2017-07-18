<?php

namespace App\Repositories;

use App\User;
use InfyOm\Generator\Common\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'regid',

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
