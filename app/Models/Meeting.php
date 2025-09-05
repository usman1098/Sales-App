<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'clinic',
        'dentist_name',
        'visit_date',
        'start_time',
        'end_time',
        'duration',
        'visit_type',
        'visit_purpose',
        'meeting_location',
        'lat',
        'long',
        'assinged_by',
        'notes',
        'status',
    ];
}
