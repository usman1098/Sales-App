<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\RegionResource;
use Illuminate\Http\Response;
use App\Models\Region;
class RegionController extends Controller
{
    public function index(){
        $regions = Region :: all();
        return response()->json([
            'success' => true,
            'message' => 'All Region',
            'data'    => RegionResource::collection($regions),
        ], Response::HTTP_OK);
    }
}
