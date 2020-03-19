@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h3>ADD NEW DATA</h3>
            </div>
        </div>

        <hr>
        <div class="card-body">
            <form method="POST" action="{{ route('forms.store') }}">
               {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-4">
                        <p></p>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" placeholder="Masukan Title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>
                                @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                @endif
                        </div>
                            
                        <div class="form-group">
                            <label for="title">Description</label>
                            <input id="desc" type="text" placeholder="Masukan Title" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{ old('desc') }}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                            {{ __('ADD') }}
                            </button>
                            <a href="{{ route('forms.index') }}" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p></p>
                    </div>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-info alert-close">
                        {{session('pesan')}}
                    </div>
                @endif
            </form>
        <hr>
    </div>
@endsection