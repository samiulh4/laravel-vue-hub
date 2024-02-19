<?php

namespace App\Modules\Authentication\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
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
        try {
            $authUserEmail = Auth::user()->email;
            $user = Users::where('email', $authUserEmail)->first();

            $user->name = $request->name;
            $user->gender_code = $request->gender_code;
            $user->country_code = $request->country_code;
            $user->bio = $request->bio;
            $user->updated_by = Auth::user()->id;

            if ($request->hasFile('avatar')) {
                $avatar = $request->file('avatar');
                $avatar_name = 'USER_' . date('Ymd') . time() . '.' . $avatar->getClientOriginalExtension();
                $avatar_path = 'uploads'.DIRECTORY_SEPARATOR.'users'.DIRECTORY_SEPARATOR.'avatar';
                $avatar_db_url = DIRECTORY_SEPARATOR.$avatar_path.DIRECTORY_SEPARATOR.$avatar_name;
                if (!file_exists(public_path($avatar_path))) {
                    mkdir(public_path($avatar_path), 0755, true);
                }
                if ($avatar->move(public_path($avatar_path), $avatar_name)) {
                    $oldAvatar =  $user->avatar;
                    $user->avatar = $avatar_db_url;
                    if (file_exists(public_path($oldAvatar))) {
                        unlink(public_path($oldAvatar));
                    }
                }
            }

            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'User Profile Data Update Successfully.',
                'data' => $user,
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }// end -:- updateAuthUser()
} // end -:- AuthenticationController
