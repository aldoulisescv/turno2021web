<?php

namespace App\Repositories;

use App\Models\Schedule;
use App\Repositories\BaseRepository;

/**
 * Class ScheduleRepository
 * @package App\Repositories
 * @version January 27, 2021, 2:00 am UTC
*/

class ScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enabled',
        'resource_id',
        'start_hour',
        'end_hour',
        'sunday',
        'monday',
        'tuesday',
        'wednesday',
        'thrusday',
        'friday',
        'saturday'
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
        return Schedule::class;
    }
}
