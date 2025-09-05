<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clinic;
use App\Http\Resources\ClinicResource;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::with(['clinicDetail.city', 'clinicDetail.area'])->get();
        return ClinicResource::collection($clinics);
    }
}
