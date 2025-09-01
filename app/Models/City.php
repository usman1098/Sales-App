<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'state_id',
        'name',
        'sef_url',
        'type',
        'publish_status',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function cityAreas()
    {
        return $this->hasMany(CityArea::class);
    }
}
