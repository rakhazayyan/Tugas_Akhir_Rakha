@extends('layouts.app')

@section('content')

    <div class="div">
        <h1>
            Alat pemantau debu
        </h1>
        <p>
            deskrirpsi
        </p>
    </div>
    <div class="container">
        <div class="d-flex justify-content-around">
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Monitoring</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="{{ route('dustMeasurement.monitoring') }}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card text-center" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">document</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    <a href="{{ route('dustMeasurement.document') }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
