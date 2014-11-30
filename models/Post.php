<?php namespace Responsiv\Zephyr\Models;

use Model;
use DB as Db;

/**
 * Post Model
 */
class Post extends Model
{

    use \Responsiv\Geolocation\Traits\LocationCode;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'responsiv_zephyr_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'country'          => ['RainLab\User\Models\Country'],
        'state'            => ['RainLab\User\Models\State'],
        'user'             => ['RainLab\User\Models\User'],
    ];

    public $attachOne = [
        'image' => ['System\Models\File']
    ];


    public function scopeApplyArea($query, $lat, $lng, $radius = 100, $type = 'km')
    {
        // Maximum 1000, self imposed limit
        if (!floatval($radius) || floatval($radius) > 1000)
            $radius = 1000;

        $unit = ($type == 'km')
            ? 6371 // kms
            : 3959; // miles

        $queryArr = [];
        $queryArr[] = sprintf('( %s * acos(', Db::getPdo()->quote($unit));
        $queryArr[] = sprintf('cos( radians( %s ) )', Db::getPdo()->quote($lat));
        $queryArr[] = '* cos( radians( latitude ) )';
        $queryArr[] = sprintf('* cos( radians( longitude ) - radians( %s ) )', Db::getPdo()->quote($lng));
        $queryArr[] = sprintf('+ sin( radians( %s ) )', Db::getPdo()->quote($lat));
        $queryArr[] = '* sin( radians( latitude ) )';
        $queryArr[] = sprintf(') ) < %s', Db::getPdo()->quote($radius));

        $query->whereRaw(implode('', $queryArr));
        return $query;
    }


}