<?php

namespace App\Models;
use App\Models\Clinic;
use App\Models\City;
use App\Models\CityArea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClinicDetail extends Model
{
    use SoftDeletes;
    protected $fillable = [
    'clinic_id',
    'city_id',
    'area_id',
    'clinic_address',
    'created_by',
    'updated_by',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function area()
    {
        return $this->belongsTo(CityArea::class, 'area_id');
    }

}
