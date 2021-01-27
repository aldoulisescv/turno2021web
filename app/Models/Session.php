<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Session
 * @package App\Models
 * @version January 27, 2021, 12:23 am UTC
 *
 * @property boolean $enabled
 * @property integer $establishment_id
 * @property string $name
 * @property string $duration
 * @property number $cost
 * @property integer $max_days_schedule
 * @property integer $max_hours_schedule
 * @property integer $max_minutes_schedule
 * @property integer $min_days_schedule
 * @property integer $min_hours_schedule
 * @property integer $min_minutes_schedule
 * @property time $standby_time
 * @property time $time_btwn_session
 * @property string $end_date
 */
class Session extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sessions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'enabled' => 'boolean',
        'establishment_id' => 'integer',
        'name' => 'string',
        'duration' => 'string',
        'cost' => 'float',
        'max_days_schedule' => 'integer',
        'max_hours_schedule' => 'integer',
        'max_minutes_schedule' => 'integer',
        'min_days_schedule' => 'integer',
        'min_hours_schedule' => 'integer',
        'min_minutes_schedule' => 'integer',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'establishment_id' => 'required',
        'name' => 'required',
        'duration' => 'required',
        'cost' => 'required'
    ];

    
}
