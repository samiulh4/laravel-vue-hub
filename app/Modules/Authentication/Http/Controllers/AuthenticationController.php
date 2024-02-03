<?php

namespace App\Modules\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{

    public function authCheck()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json([
                'is_authenticated' => true,
                'data' => $user,
            ], 200);
        } else {
            return response()->json([
                'is_authenticated' => false,
            ], 401);
        }
    } // end -:- authCheck()

} // end -:- AuthenticationController
