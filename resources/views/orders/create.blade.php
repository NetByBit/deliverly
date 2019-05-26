@extends('layouts.app')

@section('content')
<div class="container">
<!-- Default form register -->
<form class="text-center border border-light p-5">

    <p class="h4 mb-4">Create order</p>

    <div class="md-form mt-3">
        <input type="text" id="materialContactFormName" class="form-control">
        <label for="materialContactFormName">Title</label>
    </div>

    <div class="md-form mt-3">
        <input type="text" id="materialContactFormWeight" class="form-control">
        <label for="materialContactFormWeight">Weight</label>
    </div>

    <div class="md-form mt-3">
        <input type="text" id="materialContactFormImage" class="form-control">
        <label for="materialContactFormImage">image url (optional)</label>
    </div>

    <div class="row">
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected disabled>From</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
            </select>
        </div>
        <div class="col mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected disabled>To</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
            </select>
        </div>
    </div>

    <!--Message-->
    <div class="md-form mt-3">
        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
        <label for="materialContactFormMessage">Message</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-primary my-4 btn-block" type="submit">Create</button>

<!-- Default form register -->
</div>
@endsection
