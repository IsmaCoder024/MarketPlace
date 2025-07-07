<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\User;


class AdminController extends Controller
{

    //admin markets approving
    public function pendings(){
        $markets = Market::where('isApproved', false)
        ->orderBy('created_at', 'desc')->get(['id','title', 'image_path', 'description']);
        return view('adminApprove',compact('markets'));

    }

    public function approving(Request $request,$id){

        $market = Market::findOrFail($id);

        if($request->has('approve')){
        $market->isAppropiate = true;

        $market->isApproved = true; //admin has seen it

        $market->save();
        }

        elseif($request->has('delete')){  
            $market->isAppropiate = false; //inappropiate market
            $market->delReason = $request->delReason;

            $market->isApproved = true; //though not appropiate, admin has seen it

            $market->save();
        } 

        return redirect()->back();

    }
}
