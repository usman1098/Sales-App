<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class State extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'country_id',
        'name',
        'sef_url',
        'publish_status',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
