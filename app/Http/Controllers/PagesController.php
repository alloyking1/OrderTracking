<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //search
    public function searchView(){
        return view('welcome');
    }

    //Home page
    public function homeView(){
        return view('pages/home');
    }
}
