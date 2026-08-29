<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with('ratings')->get()->all();
        return response()->json($products);
    }

    public function timeDiffernce(){

    } 
        
}
