<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('Landing_Page');
    }

    public function detail()
    {
        return view('Detail_Postingan');
    }
}