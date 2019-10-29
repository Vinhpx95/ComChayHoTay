<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'products';

    public $timestamps = true;

    public $attachMany = [
        'images' => 'System\Models\File'
    ];

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
    public $hasMany = [
        'ingredients' => 'Comchayhotay\Shop\Models\Ingredient'
    ];
    public $belongsTo = [
        'category' => ['Comchayhotay\Shop\Models\Category', 'key' => 'category_id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
}
