<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function freeword_search(){
        return view('gnavi.freeword_search');
    }

    public function genre_search(){
        return view('gnavi.genre_search');
    } 
}
