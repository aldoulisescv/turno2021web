<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RelationResourceSession
 * @package App\Models
 * @version January 27, 2021, 2:17 am UTC
 *
 * @property integer $resource_id
 * @property integer $session_id
 */
class RelationResourceSession extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'relation_resource_sessions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'resource_id',
        'session_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'resource_id' => 'integer',
        'session_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'resource_id' => 'required',
        'session_id' => 'required'
    ];

    
}
