<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'data' =>$request->user()
        ], 200);
    }
}
