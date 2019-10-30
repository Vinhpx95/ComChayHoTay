<?php namespace Comchayhotay\Shop\Models;

use Model;

/**
 * Banner Model
 */
class Banner extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'banners';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $rules = [
        'title' => 'required',
        ''
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
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    public $attachMany = [];
}
