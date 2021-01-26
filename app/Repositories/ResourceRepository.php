<?php

namespace App\Repositories;

use App\Models\Resource;
use App\Repositories\BaseRepository;

/**
 * Class ResourceRepository
 * @package App\Repositories
 * @version January 25, 2021, 7:53 pm UTC
*/

class ResourceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enabled',
        'establishment_id',
        'name',
        'selectable',
        'order_alpha'
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
        return Resource::class;
    }
}
