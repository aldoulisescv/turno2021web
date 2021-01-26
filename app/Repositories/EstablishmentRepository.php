<?php

namespace App\Repositories;

use App\Models\Establishment;
use App\Repositories\BaseRepository;

/**
 * Class EstablishmentRepository
 * @package App\Repositories
 * @version January 25, 2021, 7:52 pm UTC
*/

class EstablishmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'enabled',
        'category_id',
        'subcategory_id',
        'name',
        'logo',
        'stepping',
        'street',
        'num_ext',
        'num_int',
        'postal_code',
        'zone',
        'city',
        'state',
        'country',
        'latitude',
        'longitude',
        'email',
        'phone',
        'holidays_extra',
        'holidays_official',
        'help_tooltip'
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
        return Establishment::class;
    }
}
