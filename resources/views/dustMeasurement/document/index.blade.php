@extends('layouts.app')

@section('content')
    <div class="container">
        @auth
        <div class="d-flex justify-content-between">
            <div class="p-2 bd-highlight"><h2>Create or upload documents</h2></div>
            <div class="p-2 bd-highlight"><a href="{{ route('dustMeasurement.createDocument') }}" class="btn btn-primary" role="button">upload</a></div>
        </div>
        @endauth
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col" class="d-flex justify-content-end" style="margin-right: 1rem">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($document as $file)
                <tr>
                    <th scope="row">{{ $file->updated_at }}</th>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->description }}</td>
                    <td class="d-flex justify-content-end">
                        <div class="d-flex">
                            @auth
                                <form action="{{ route('dustMeasurement.deleteDocument',$file->id) }}" method="POST" class="inline-flex ml-1 delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button submit" class="btn btn-link" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            @endauth
                                <button type="button" class="btn btn-link"><a href="{{ route('dustMeasurement.downloadDocument', $file->file) }}">Download</a></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
@endsection
