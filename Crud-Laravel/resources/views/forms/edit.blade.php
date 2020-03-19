@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h3>EDIT DATA</h3>
            </div>
        </div>
        <hr >
        <div class="card-body">
            <form method="POST" action="{{ route('forms.update',$forms['id']) }}">
               {{csrf_field()}}
               {{method_field('PUT')}}
                <div class="row">
                    <div class="col-sm-4">
                        <p></p>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" placeholder="Masukan Title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{$forms['title']}}" required autofocus>
                                @if ($errors->has('title'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                @endif
                        </div>
                            
                        <div class="form-group">
                            <label for="title">Description</label>
                            <input id="desc" type="text" placeholder="Masukan Title" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" value="{{$forms['desc']}}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                            {{ __('UPDATE') }}
                            </button>
                            <a href="{{ route('forms.index') }}" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p></p>
                    </div>
                </div>
            </form>
        <hr>
    </div>
@endsection