<?php

namespace App\Repositories;

use App\Models\Help;
use App\Repositories\BaseRepository;

/**
 * Class HelpRepository
 * @package App\Repositories
 * @version June 7, 2021, 11:29 pm UTC
*/

class HelpRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status_help_id',
        'user_id',
        'help_type',
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
        return Help::class;
    }
}
