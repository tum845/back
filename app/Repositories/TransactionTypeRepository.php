<?php

namespace App\Repositories;

use App\Models\TransactionType;
use InfyOm\Generator\Common\BaseRepository;

class TransactionTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TransactionType::class;
    }
}
