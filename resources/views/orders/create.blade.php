@extends('layouts.app')

@section('content')
<div class="container">

@if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="text-center border border-light p-5" method="POST" enctype="multipart/form-data" action="/orders">
    @csrf
    <p class="h2 mb-4">Create order</p>

    <div class="mt-3">
        <input type="text" placeholder="My order" name="title" class="form-control">
    </div>

    <h4 class="mt-3">From</h4>

    <div class="row">
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4" name="from_city">
                <option value="" selected>City</option>
                @foreach (getGovernorates() as $governorate)
                <option value="{{ $governorate }}">{{ $governorate }}</option>
                @endforeach
            </select>
        </div>
        <div class="col mt-3">
            <input type="text" placeholder="Address" class="form-control" name="from">
        </div>
    </div>

    <h4 class="mt-3">To</h4>

    <div class="row">
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4" name="to_city">
                <option value="" selected>City</option>
                @foreach (getGovernorates() as $governorate)
                <option value="{{ $governorate }}">{{ $governorate }}</option>
                @endforeach
            </select>
        </div>
        <div class="col mt-3">
            <input type="text" placeholder="Address" class="form-control" name="to">
        </div>
    </div>

    <h4 class="mt-3">Properties</h4>
    <div class="mt-3">
        <input type="text" placeholder="Weight" class="form-control" name="weight">
    </div>

    <div class="mt-3">
        <input type="text" placeholder="Distance" class="form-control" name="distance">
    </div>

    <div class="form-group row mt-4">
        <label for="image" class="col-md-3 text-left">Image</label>
        <input type="file" class="form-control-file col-md-9" id="image" name="image">
    </div>
    <div class="mt-4">
        <textarea placeholder="Type any notes" class="form-control md-textarea" name="description" rows="3"></textarea>
    </div>

    <button class="btn btn-primary my-4 btn-block" type="submit">Create</button>

</div>
@endsection
