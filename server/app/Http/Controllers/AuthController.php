<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\Student;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = Instructor::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        $user = Student::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        $user->token = auth()->login($user);

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
