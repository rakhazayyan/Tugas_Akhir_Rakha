@extends('layouts.app')

@section('content')
<div class="container">
    <div class="table w-full mt-8 bg-white rounded p-5">

        <form action="{{ route('dustMeasurement.storeDocument') }}" class="dropzone" id="my-awesome-dropzone" method="post" enctype="multipart/form-data"v>
            @csrf
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Name</label>
                <div class="col-8">
                    <input id="name" name="name" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Description</label>
                <div class="col-8">
                    <input id="description" name="description" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">File</label>
                <div class="col-8">
                    <input id="file" name="file" type="file" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color: red">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

    </div>
</div>
{{-- <script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
</script> --}}
@endsection
