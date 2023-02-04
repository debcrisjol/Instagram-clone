@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
        <div class="row d-flex flex-column justify-content-center">

            <div class="row m-3">
                <h1>Add New Post</h1>
            </div>
            <div class="form-group row m-3">
                <label for="caption" class="col-form-label">Post Caption</label>


                <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="row m-3">
                <label for="image" class="col-form-label">Post Image</label>

                <input type="file" class="form-control-file" name="image" id="image">
                @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @endif

            </div>
            <div class="row m-3">
                <button class="btn btn-primary">Add New Post</button>
            </div>
        </div>
    </form>
    </div>
@endsection
