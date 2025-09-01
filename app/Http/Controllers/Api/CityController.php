<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Http\Response;
use App\Http\Resources\CityResource;
class CityController extends Controller
{
    public function index(){
        $city = City :: all();
        return response()->json([
            'success' => true,
            'message' => 'All City',
            'data'    => CityResource::collection($city),
        ], Response::HTTP_OK);
    }
}
