<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Prospect
 * @package App\Models
 * @version February 1, 2021, 7:25 pm UTC
 *
 * @property string $name
 * @property string $owner
 * @property string $image
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property string $phone
 * @property boolean $sent_wa
 * @property string $facebook
 * @property boolean $sent_fb
 * @property string $instagram
 * @property boolean $sent_ig
 * @property string $notes
 */
class Prospect extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'prospects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'owner' => 'string',
        'image' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'sent_wa' => 'boolean',
        'facebook' => 'string',
        'sent_fb' => 'boolean',
        'instagram' => 'string',
        'sent_ig' => 'boolean',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:prospects',
        'image' => 'required',
        'latitude' => 'required',
        'longitude' => 'required',
    ];

    
}
