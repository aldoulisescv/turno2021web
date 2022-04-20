<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Schedule
 * @package App\Models
 * @version January 27, 2021, 2:00 am UTC
 *
 * @property boolean $enabled
 * @property integer $resource_id
 * @property time $start_hour
 * @property time $end_hour
 * @property boolean $sunday
 * @property boolean $monday
 * @property boolean $tuesday
 * @property boolean $wednesday
 * @property boolean $thrusday
 * @property boolean $friday
 * @property boolean $saturday
 */
class Schedule extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'schedules';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabled' => 'integer',
        'resource_id' => 'integer',
        'sunday' => 'boolean',
        'monday' => 'boolean',
        'tuesday' => 'boolean',
        'wednesday' => 'boolean',
        'thrusday' => 'boolean',
        'friday' => 'boolean',
        'saturday' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'resource_id' => 'required',
        'start_hour' => 'required',
        'end_hour' => 'required'
    ];

    
}
