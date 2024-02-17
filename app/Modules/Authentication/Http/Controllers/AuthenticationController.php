<?php

namespace App\Modules\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Modules\User\Models\Users;

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

    public function authWebUpdateUser(Request $request)
    {
        $validated = $request->validate([
            'gender_code' => 'required',
            'country_code' => 'required',
        ]);

        $authUserEmail = Auth::user()->email;
        $user = Users::where('email', $authUserEmail)->first();
        $user->bio = $request->bio;
        $user->save();
        return response()->json([
            'message' => 'User Profile Data Update Successfully.',
            'data' => $user,
        ], 200);
    }// end -:- updateAuthUser()
} // end -:- AuthenticationController
