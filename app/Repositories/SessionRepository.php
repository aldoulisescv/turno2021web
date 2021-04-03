<?php

namespace App\Repositories;

use App\Models\Session;
use App\Repositories\BaseRepository;

/**
 * Class SessionRepository
 * @package App\Repositories
 * @version March 31, 2021, 6:44 pm UTC
*/

class SessionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enabled',
        'establishment_id',
        'name',
        'color',
        'duration',
        'cost',
        'max_days_schedule',
        'max_hours_schedule',
        'max_minutes_schedule',
        'min_days_schedule',
        'min_hours_schedule',
        'min_minutes_schedule',
        'standby_time',
        'time_btwn_session',
        'end_date'
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
        return Session::class;
    }
}
