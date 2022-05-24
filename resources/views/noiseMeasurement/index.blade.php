@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('noiseMeasurement.monitoring') }}">monitoring</a>
    <a href="{{ route('noiseMeasurement.history') }}">history</a>
</div>
@endsection
