<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // memanggil tampilan frontend di folder layout 
    public function index()
    {
        return view('v_web');
    }
}
