<?php

namespace App\Http\Controllers;

use App\Models\LuxMeasurement;
use Illuminate\Http\Request;

class LuxController extends Controller
{
    public function index()
    {
        return view('luxMeasurement.index');
    }

    public function monitoring()
    {
        return view('luxMeasurement.monitoring');
    }

    public function history()
    {
        $values = LuxMeasurement::latest()->paginate(20);
        return view('luxMeasurement.history',compact('values'));
    }

    public function post(Request $request)
    {

    }
}
