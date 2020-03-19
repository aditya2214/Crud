@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h3>Keterangan Data</h3>
        </div>
    </div>
    <hr>
    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Title</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            <div class="alert alert-primary" role="alert">
                {{ $forms->title}}
            </div>
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <h3><b>Description</b></h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-4">
            <hr>
        </div>
        <div class="col-sm-4">
            {{ $forms->desc}}
        </div>
        <div class="col-sm-4">
            <hr>
        </div>
    </div>
    <hr>
    <div class="col text-center">
        <div class="col-sm-12">
         <a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>
        </div>
    </div>
</div>
@endsection