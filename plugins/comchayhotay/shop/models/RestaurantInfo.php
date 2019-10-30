<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Restaurant_info Model
 */
class RestaurantInfo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'restaurant_infos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'phone1' => 'required|regex:/^\d{10}$/',
        'phone2' => 'required|regex:/^\d{10}$/',
        'open_time' => 'required',
        'email' => 'required|email',
        'facebook' => 'required',
        'zalo' => 'required',
        'address' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
