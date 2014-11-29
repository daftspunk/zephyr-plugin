<?php namespace Responsiv\Zephyr\Models;

use Model;

/**
 * PostCategory Model
 */
class PostCategory extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'responsiv_zephyr_post_categories';

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