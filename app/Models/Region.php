<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use  SoftDeletes;

    protected $fillable = ['region','active','created_by'];
}
