<?php

namespace App\Http\Controllers;

use App\Models\NoiseMeasurement;
use Illuminate\Http\Request;

class NoiseController extends Controller
{
    public function index()
    {
        return view('noiseMeasurement.index');
    }

    public function monitoring()
    {
        return view('noiseMeasurement.monitoring');
    }

    public function history()
    {
        $values = NoiseMeasurement::latest()->paginate(20);
        return view('noiseMeasurement.history',compact('values'));
    }

    public function post(Request $request)
    {

    }
}
