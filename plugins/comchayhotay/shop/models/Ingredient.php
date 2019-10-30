<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Ingredient Model
 */
class Ingredient extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ingredients';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'name' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'products' => 'Comchayhotay\Shop\Models\Product'
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
