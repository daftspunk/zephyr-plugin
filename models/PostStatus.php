<?php namespace Responsiv\Zephyr\Models;

use Model;

/**
 * PostStatus Model
 */
class PostStatus extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'responsiv_zephyr_post_statuses';

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