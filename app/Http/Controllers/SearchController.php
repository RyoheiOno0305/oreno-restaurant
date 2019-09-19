<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function freeword_search(){

        return view('gnavi.freeword_search');
    }

    public function genre_search(){
        return view('gnavi.genre_search');
    }
}
