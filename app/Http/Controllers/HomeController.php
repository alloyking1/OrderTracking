<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // count 
        $count = Delivery::count();
        $complete = Delivery::where('OrderStatus','1')->get();
        $completeOrders = $complete->count();

        return view('home', compact('count','completeOrders'));
    }
}
