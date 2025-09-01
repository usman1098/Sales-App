<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\StateResource;
use Illuminate\Http\Response;
use App\Models\State;
class StateController extends Controller
{
    public function index(){
        $state = State :: all();
        return response()->json([
            'success' => true,
            'message' => 'All State',
            'data'    => StateResource::collection($state),
        ], Response::HTTP_OK);
    }
}
