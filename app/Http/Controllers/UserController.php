<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function create(Request $request, User $user){

        //validating the inputs
        $request->validate([
            'firstName' =>'required|string|max:20',
            'lastName' =>'required|string|max:20',
            'email' =>'required|string|max:30',
            'regNumber' =>'required|string|max:20',
            'phoneNumber' =>'required|string|max:10',
            'level' =>'required|string',
            'password' =>'required|string|max:20',

        ]);

        //create instance of user with the validated inputs 
        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'regNumber' => $request->regNumber,
            'phoneNumber' => $request->phoneNumber,
            'level' => $request->level,
            'password' => Hash::make($request->password),

        ]);


        return redirect()->route('about');
        
    }

    
     
    public function log(Request $request, User $user){

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // login success
            return redirect()->intended('about');
        } else {
            // login failed
            return back()->withErrors(['login' => 'Invalid credentials']);
        }
    }
        


}
