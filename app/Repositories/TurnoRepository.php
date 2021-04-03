<?php

namespace App\Repositories;

use App\Models\Turno;
use App\Repositories\BaseRepository;

/**
 * Class TurnoRepository
 * @package App\Repositories
 * @version March 31, 2021, 6:29 pm UTC
*/

class TurnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'email',
        'phone',
        'establishment_id',
        'resource_id',
        'session_id',
        'status_turno_id',
        'date',
        'start_time',
        'end_time'
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
        return Turno::class;
    }
}
