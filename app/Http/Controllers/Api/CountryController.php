<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Response;
use App\Models\Country;
class CountryController extends Controller
{
     public function index(){
        $country = Country :: all();
        return response()->json([
            'success' => true,
            'message' => 'All Country',
            'data'    => CountryResource::collection($country),
        ], Response::HTTP_OK);
    }
}
