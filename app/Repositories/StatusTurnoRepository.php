<?php

namespace App\Repositories;

use App\Models\StatusTurno;
use App\Repositories\BaseRepository;

/**
 * Class StatusTurnoRepository
 * @package App\Repositories
 * @version January 27, 2021, 2:21 am UTC
*/

class StatusTurnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
