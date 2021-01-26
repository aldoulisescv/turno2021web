<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Resource
 * @package App\Models
 * @version January 25, 2021, 7:53 pm UTC
 *
 * @property boolean $enabled
 * @property integer $establishment_id
 * @property string $name
 * @property boolean $selectable
 * @property boolean $order_alpha
 */
class Resource extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'resources';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'enabled',
        'establishment_id',
        'name',
        'selectable',
        'order_alpha'
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
        'selectable' => 'boolean',
        'order_alpha' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'establishment_id' => 'required',
        'name' => 'required'
    ];

    
}
