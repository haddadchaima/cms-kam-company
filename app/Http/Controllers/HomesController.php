<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::featuredProducts();

        return view('home', compact('products'));
    }
}
