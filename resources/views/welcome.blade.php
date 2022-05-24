@extends('layouts.app')

@section('content')
<div class="center">
    <h1>
        <a href="{{ route('dustMeasurement.index') }}">Dust</a>
        <a href="{{ route('noiseMeasurement.index') }}">Noise</a>
        <a href="{{ route('luxMeasurement.index') }}">Lux</a>
    </h1>
</div>
@endsection
