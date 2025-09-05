<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clinic extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'clinic_name',
        'created_by',
        'updated_by',
    ];

    public function clinicDetail()
    {
        return $this->hasOne(ClinicDetail::class, 'clinic_id');
    }
}
