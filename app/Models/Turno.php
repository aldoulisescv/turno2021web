<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Turno
 * @package App\Models
 * @version January 27, 2021, 2:34 am UTC
 *
 * @property integer $user_id
 * @property integer $establishment_id
 * @property integer $resource_id
 * @property integer $session_id
 * @property integer $status_turno_id
 * @property string $date
 * @property time $start_time
 * @property time $end_time
 */
class Turno extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'turnos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'establishment_id',
        'resource_id',
        'session_id',
        'status_turno_id',
        'date',
        'start_time',
        'end_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'establishment_id' => 'integer',
        'resource_id' => 'integer',
        'session_id' => 'integer',
        'status_turno_id' => 'integer',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'establishment_id' => 'required',
        'resource_id' => 'required',
        'session_id' => 'required',
        'status_turno_id' => 'required',
        'date' => 'required',
        'start_time' => 'required',
        'end_time' => 'required'
    ];

    
}
