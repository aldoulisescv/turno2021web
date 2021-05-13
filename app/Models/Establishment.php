<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Establishment
 * @package App\Models
 * @version January 25, 2021, 7:52 pm UTC
 *
 * @property boolean $enabled
 * @property integer $category_id
 * @property integer $subcategory_id
 * @property string $name
 * @property string $logo
 * @property integer $stepping
 * @property string $street
 * @property string $num_ext
 * @property string $num_int
 * @property string $postal_code
 * @property string $zone
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $latitude
 * @property string $longitude
 * @property string $email
 * @property string $phone
 * @property string $holidays_extra
 * @property boolean $holidays_official
 * @property boolean $help_tooltip
 */
class Establishment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'establishments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabled' => 'boolean',
        'category_id' => 'integer',
        'subcategory_id' => 'string',
        'name' => 'string',
        'logo' => 'string',
        'stepping' => 'integer',
        'street' => 'string',
        'num_ext' => 'string',
        'num_int' => 'string',
        'postal_code' => 'string',
        'zone' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'holidays_extra' => 'string',
        'holidays_official' => 'boolean',
        'help_tooltip' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'category_id' => 'required',
        'name' => 'required',
        'logo' => 'required',
        'stepping' => 'required',
        'street' => 'required',
        'num_ext' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ];

    
}
