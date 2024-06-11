<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request){
        return view('website.index');
     }
}
