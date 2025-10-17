<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //User registration
    public function create(Request $request, User $user)
    {

        //validating the inputs usibg validator
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'email' => 'required|string|max:30',
            'regNumber' => 'string|max:20',
            'phoneNumber' => 'required|string|max:10',
            'businessName' => 'required|string|max:40',
            'password' => 'required|string|max:20',

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Failed, Check your credentials');
        }

        //create instance of user with the validated inputs 
        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'regNumber' => $request->regNumber,
            'phoneNumber' => $request->phoneNumber,
            'businessName' => $request->businessName,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('login')->with('success', 'Registration successful, you may now login.');

        if ($validator->fails()) {

            return redirect()->back()->with('error', 'Failed, Check your credentials.');

        }




    }


    //User login 
    public function log(Request $request, User $user)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // login success
            return redirect()->intended('display');
        } else {
            // login failed
            return redirect()->back()->with('logError', 'Invalid credentials');
        }
    }


    //display admin login page
    public function adminShow()
    {
        return view('adminLogin');
    }

    //Admin login
    public function adminLog(Request $request)
    {

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:8'
        ]);

        $admin = User::where('email', $request->email)->where('role', 'admin')->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            Auth::login($admin); // Log in the admin manually
            return redirect()->route('adminNav')->with('success', 'Welcome, Admin!');

        } else {
            return redirect()->back()->with('logError', 'Invalid credentials');
        }




    }








}
