<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
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

    protected $rules = [
        'slug' => 'required|unique',
        'category_id' => 'required|numeric',
        'name' => 'required',
        'price' => 'required|numeric',
        'status' => 'required|numeric',
    ];

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

    public function getCategoryIdOptions(){
        return [];
    }
}
