<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Order_product Model
 */
class OrderProduct extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'order_products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'order_id' => 'required|numeric',
        'product_id' => 'required|numeric',
        'quantity' => 'required|numeric',
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
