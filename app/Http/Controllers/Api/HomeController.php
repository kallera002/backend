<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use Log;

class HomeController extends Controller
{
    protected $auth;

    public function __construct(JWTAuth $auth) {
        $this->auth = $auth;
    }

    public function home(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'data' =>$request->user()
        ], 200);
    }


    public function logout()
    {
        $this->auth->invalidate();

        return response()->json(['status'=> 'success']);
    }
}
