<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function index(){
        return view('tour-detail');
    }
}
