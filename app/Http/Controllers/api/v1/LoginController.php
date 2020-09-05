<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
class LoginController extends Controller
{
    public function login( Request $request) {

        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(!Auth::attempt( $login )) {
            return response(['message' => 'Invalid credentials.']);
        }
        
    }
}
