<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CityArea extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'city_id',
        'area',
        'publish_status',
        'created_by',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
