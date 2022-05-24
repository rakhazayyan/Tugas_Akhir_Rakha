@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('luxMeasurement.monitoring') }}">monitoring</a>
    <a href="{{ route('luxMeasurement.history') }}">history</a>
</div>
@endsection
