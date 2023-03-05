<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::where('email', $request->get('username'))->first();

        if(!$user || !Hash::check($request->get('password'), $user->password)) {
            throw ValidationException::withMessages([
                'credentials' => 'The credentials are incorrect.'
            ]);
        }

        return [
            'access_token' => $user->createToken($user->name.$user->create_at)->plainTextToken
        ];
    }
}
