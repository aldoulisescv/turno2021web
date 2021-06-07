<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Help
 * @package App\Models
 * @version June 7, 2021, 11:29 pm UTC
 *
 * @property integer $status_help_id
 * @property integer $user_id
 * @property string $help_type
 * @property string $description
 */
class Help extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'helps';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'status_help_id',
        'user_id',
        'help_type',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'status_help_id' => 'integer',
        'user_id' => 'integer',
        'help_type' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status_help_id' => 'required',
        'user_id' => 'required',
        'help_type' => 'required',
        'description' => 'required'
    ];

    
}
