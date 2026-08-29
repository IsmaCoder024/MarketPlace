<?php

namespace App\Http\Controllers;

use App\Models\UserRating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function index()
    {
        // $ratings = UserRating::with('user', 'product')->get();
        // return response()->json($ratings);
    }

    public function rate(Request $request)
    {

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $user_rating = UserRating::create([
            'rating' => $request->rating,
            'user_id' => $request->user()->id,
            'product_id' => $request->product_id,
        ]);

        return response()->json([
            'message' => 'Rating created successfully',
            'rating' => $user_rating
        ]);

    }

    public function remove(UserRating $user_rating)
    {
        $user_rating->delete();

        return response()->json([
            'message' => 'Rating removed successfully'
        ]);
    }

    public function change(UserRating $user_rating, Request $request)
    {
        $user_rating->update([
            'rating' => $request->rating
        ]);

        return response()->json([
            'message' => 'Rating updated successfully',
            'rating' => $user_rating,
        ]);
    }

}
