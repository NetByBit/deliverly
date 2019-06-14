@extends('layouts.app')

@section('content')
<div class="container">
<!-- Default form register -->
<form class="text-center border border-light p-5">

    <p class="h2 mb-4">Create order</p>

    <div class="md-form mt-3">
        <input type="text" id="materialContactFormName" class="form-control">
        <label for="materialContactFormName">My order</label>
    </div>

    <h4 class="mt-3">From</h4>

    <div class="row">
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected>City</option>
                @foreach (getGovernorates() as $governorate)
                <option value="{{ $governorate }}">{{ $governorate }}</option>
                @endforeach
            </select>
        </div>
        <div class="col mt-3">
            <div class="md-form mt-3">
                <input type="text" id="fromAddress" class="form-control">
                <label for="fromAddress">Address</label>
            </div>
        </div>
    </div>

    <h4 class="mt-3">To</h4>

    <div class="row">
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected>City</option>
                @foreach (getGovernorates() as $governorate)
                <option value="{{ $governorate }}">{{ $governorate }}</option>
                @endforeach
            </select>
        </div>
        <div class="col mt-3">
            <div class="md-form mt-3">
                <input type="text" id="toAddress" class="form-control">
                <label for="toAddress">Address</label>
            </div>
        </div>
    </div>


    <h4 class="mt-3">Properties</h4>
    <div class="md-form mt-3">
        <input type="text" id="materialContactFormWeight" class="form-control">
        <label for="materialContactFormWeight">Weight</label>
    </div>

    <div class="md-form mt-3">
        <input type="text" id="materialContactFormSize" class="form-control">
        <label for="materialContactFormSize">Size (optional)</label>
    </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Image</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01"
            aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>
    <!--Message-->
    <div class="md-form mt-3">
        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
        <label for="materialContactFormMessage">Notes</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-primary my-4 btn-block" type="submit">Create</button>

<!-- Default form register -->
</div>
@endsection
