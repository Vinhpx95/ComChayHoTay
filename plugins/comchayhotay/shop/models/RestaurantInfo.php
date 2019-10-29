<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Restaurant_info Model
 */
class RestaurantInfo extends Model
{
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
