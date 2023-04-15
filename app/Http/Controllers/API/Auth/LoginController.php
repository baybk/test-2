<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /** 
        * @OA\Post( 
            * path="/api/login",
            * summary="Sign in",
            * description="Login by email, password",
            * operationId="authLogin",
            * tags={"auth"},
            * @OA\RequestBody(
                * required=true,
                * description="Pass user credentials",
                * @OA\JsonContent(
                    * required={"email","password"},
                    * @OA\Property(property="email", type="string", format="email", example="user@gmail.com"),
                    * @OA\Property(property="password", type="string", format="password", example="123456"),
                * ),
            * ),

            * @OA\Response(
                * response=401,
                * description="Wrong credentials response",
                * @OA\JsonContent( 
                    * @OA\Property(property="message", type="string", example="Unauthenticated") 
                * )
            * ) 
        * ) 
    */
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $userData = new UserResource($user);
            $access_token =  $user->createToken('APPLICATION')->accessToken;
            return $this->sendSuccess(
                [
                    'user' => $userData,
                    'access_token' => $access_token
                ],
                __('auth.login_success')
            );
        }

        return $this->sendError(
            [
            ],
            __('auth.un_authenticated'),
            401
        );
    }

    public function logout(Request $request)
    {
        if (Auth::guard('api')->check()) {
            $token = Auth::guard('api')->user()->token()->revoke();
            return $this->sendSuccess(
                ['data' => __('auth.logout_success')],
                __('auth.logout_success')
            );
        }
        return $this->sendSuccess(
            ['state' => 1],
            __('auth.logout_success')
        );
    }
}
