<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Customer_info Model
 */
class CustomerInfo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'customer_infos';

    public $timestamps = true;

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'name' => 'required',
        'phone' => 'required|regex:/^\d{10}$/',
        'address' => 'required',
        'email' => 'email'
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
