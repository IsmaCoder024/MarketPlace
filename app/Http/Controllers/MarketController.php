<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function view(){
        return view('marketUpload');
    }

    public function create(Request $request){

       // dd(Auth::id()); // Confirm user is authenticated

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|max:2048'

        ]);

        //store the uploaded image in 'storage/app/public/photos'
        $path = $request->file('image')->store('photos','public');
       

        Market::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'isApproved' => $request->isApproved,
            'image_path' => $path,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('uploaded', 'Advertisement succesfull uploaded');

    }

    
    //display all markets
    public function show(){
        $markets = Market::where('isApproved', true)
        ->with('user')
        ->orderBy('created_at', 'desc')
        ->get(['title', 'image_path', 'description','price','user_id']);

        return view('marketDisplay',compact('markets'));
    }


    //show markets to specific seller
    public function showPending(){
        $pendingMarkets = Market::where('isApproved', false)
        ->with('user')
        ->where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get(['title', 'image_path', 'description','price','user_id']);

            return view ('seller.showPending', compact('pendingMarkets'));
        
    }

    public function showApproved(){
        $approvedMarkets = Market::where('isApproved', true) 
        ->where('isAppropiate' , true) 
        ->with('user')
        ->where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get(['title', 'image_path', 'description','price','user_id']);

            return view ('seller.showApproved', compact('approvedMarkets'));
        
    }

    public function showDeleted(){
        $delMarkets = Market::where('isApproved', true) 
        ->where('isAppropiate' , false) 
        ->with('user')
        ->where('user_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get(['title', 'image_path', 'description','price','user_id','delReason']);

            return view ('seller.showDeleted', compact('delMarkets'));
        
    }




    //show all deleted markets to admin
    public function adminDel(){
        $delMarkets = Market::where('isApproved', true) 
        ->where('isAppropiate' , false) 
        ->with('user')
        ->orderBy('created_at', 'desc')
        ->get(['title', 'image_path', 'description','price','user_id']);

        return view('delMarket',compact('delMarkets'));
}

}