<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_email'    => 'required|email',
            'password' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Validation failed',
                'errors'  => $validator->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::where('employee_email', $request->employee_email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Invalid credentials'
            ], Response::HTTP_UNAUTHORIZED); 
        }

        if ($user->active !== 'yes') { 
            return response()->json([
                'status'  => 'error',
                'message' => 'Please activate your account'
            ], Response::HTTP_FORBIDDEN);
        }

        $token = $user->createToken('MyApp')->plainTextToken;

        return response()->json([
            'status'  => 'success',
            'message' => 'User login successfully',
            'token'   => $token,
            'data'    => new UserResource($user)
        ], Response::HTTP_OK);
    }
}
