<?php

namespace App\Repositories;

use App\Models\Prospect;
use App\Repositories\BaseRepository;

/**
 * Class ProspectRepository
 * @package App\Repositories
 * @version February 1, 2021, 7:25 pm UTC
*/

class ProspectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'owner',
        'image',
        'latitude',
        'longitude',
        'address',
        'phone',
        'sent_wa',
        'facebook',
        'sent_fb',
        'instagram',
        'sent_ig',
        'notes'
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
        return Prospect::class;
    }
}
