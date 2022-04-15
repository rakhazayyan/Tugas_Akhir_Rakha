<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // if authentication needed
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('fileData.index');
    }

    public function monitoring()
    {
        return view('monitoring.index');
    }
}
