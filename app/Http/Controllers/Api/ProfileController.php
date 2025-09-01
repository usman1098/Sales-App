<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        return response()->json([
            'success' => true,
            'message' => 'Profile retrieved',
            'data'    => new UserResource($user),
        ], Response::HTTP_OK);
    }
}
