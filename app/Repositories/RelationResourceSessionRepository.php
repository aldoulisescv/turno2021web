<?php

namespace App\Repositories;

use App\Models\RelationResourceSession;
use App\Repositories\BaseRepository;

/**
 * Class RelationResourceSessionRepository
 * @package App\Repositories
 * @version January 27, 2021, 2:17 am UTC
*/

class RelationResourceSessionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'resource_id',
        'session_id'
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
        return RelationResourceSession::class;
    }
}
