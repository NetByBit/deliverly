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
        <div class="col">
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormFrom" class="form-control">
                <label for="materialContactFormFrom">from</label>
            </div>
        </div>

        <div class="col">
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormto" class="form-control">
                <label for="materialContactFormto">to</label>
            </div>
        </div>
    </div>

    <!--Message-->
    <div class="md-form">
        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
        <label for="materialContactFormMessage">Message</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Create</button>
 
<!-- Default form register -->
</div>
@endsection