<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CityArea;
use Illuminate\Http\Response;
use App\Http\Resources\CityAreaResource;


class CityAreaController extends Controller
{
    public function index(){
        $cityArea = CityArea :: all();
        return response()->json([
            'success' => true,
            'message' => 'All City Area',
            'data'    => CityAreaResource::collection($cityArea),
        ], Response::HTTP_OK);
    }
}
