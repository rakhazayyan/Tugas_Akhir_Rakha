@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">date</th>
            <th scope="col">value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($values as $value)
                <tr>
                    <th scope="row">{{ $value->created_at }}</th>
                    <td>{{ $value->value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $values->links() !!}
    </div>
</div>
@endsection
