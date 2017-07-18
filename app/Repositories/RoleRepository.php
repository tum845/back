<?php

namespace App\Repositories;


use InfyOm\Generator\Common\BaseRepository;
use jeremykenedy\LaravelRoles\Models\Role;

class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'description',
        'level'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Role::class;
    }
}
