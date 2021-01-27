<?php

namespace App\Repositories;

use App\Models\Session;
use App\Repositories\BaseRepository;

/**
 * Class SessionRepository
 * @package App\Repositories
 * @version January 27, 2021, 12:23 am UTC
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
