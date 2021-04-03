<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BlockedDates
 * @package App\Models
 * @version March 31, 2021, 6:51 pm UTC
 *
 * @property string $name
 * @property string $date
 */
class BlockedDates extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'blocked_dates';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required'
    ];

    
}
