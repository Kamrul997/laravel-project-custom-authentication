<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 'password' => 'required',
        ]);

        if ($validator->fails()) 
        {
          return redirect()->back()->withErrors($validator);
        }
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];

        $result = Auth::attempt($credentials);
        // dd($credentials);

        if ($result) 
        {
            return redirect()->route('home');
        } 
        else 
        {
            return redirect()->back()->with('danger', 'Email and/or Password invalid.');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.user');
    }


}
