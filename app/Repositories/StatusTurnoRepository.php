<?php

namespace App\Repositories;

use App\Models\StatusTurno;
use App\Repositories\BaseRepository;

/**
 * Class StatusTurnoRepository
 * @package App\Repositories
 * @version March 31, 2021, 9:15 pm UTC
*/

class StatusTurnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StatusTurno::class;
    }
}
