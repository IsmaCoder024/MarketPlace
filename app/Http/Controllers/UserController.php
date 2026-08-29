<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    

    //User login 
    public function login(Request $request, User $user)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           
        } else {
            // login failed
            
        }
    }


    }
