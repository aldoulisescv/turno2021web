<?php

namespace App\Repositories;

use App\Models\BlockedDates;
use App\Repositories\BaseRepository;

/**
 * Class BlockedDatesRepository
 * @package App\Repositories
 * @version March 31, 2021, 6:51 pm UTC
*/

class BlockedDatesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'date'
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
        return BlockedDates::class;
    }
}
