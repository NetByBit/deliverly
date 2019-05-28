@extends('layouts.app')

@section('content')
<div class="container">
<!-- Section: Blog v.2 -->
<section class="text-center my-5">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Available orders</h2>

    <div class="row">
        <div class="col-md mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected disabled>From</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
            </select>
        </div>
        <div class="col-md mt-3">
            <select class="browser-default custom-select mb-4">
                <option value="" selected disabled>To</option>
                <option value="Cairo">Cairo</option>
                <option value="Giza">Giza</option>
                <option value="Alexandria">Alexandria</option>
            </select>
        </div>
        <div class="col-md-2 mt-3">
            <button class="btn btn-primary">Search</button>
        </div>
    </div>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-3 mb-4">
          <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Iphone 8</strong></h4>
        <!-- Post data -->
        <p>by <a class="font-weight-bold">Billy Forester</a>, 15/07/2018</p>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
          quo minus id quod maxime placeat facere possimus voluptas.</p>
        <!-- Read more button -->
        <a class="btn btn-pink btn-rounded btn-md">View</a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-3 mb-4">
          <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Xbox</strong></h4>
        <!-- Post data -->
        <p>by <a class="font-weight-bold">Billy Forester</a>, 13/07/2018</p>
        <!-- Excerpt -->
        <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
          voluptatum deleniti atque corrupti quos dolores.</p>
        <!-- Read more button -->
        <a class="btn btn-deep-orange btn-rounded btn-md">View</a>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-0">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-3 mb-4">
          <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Post title -->
        <h4 class="font-weight-bold mb-3"><strong>Chair</strong></h4>
        <!-- Post data -->
        <p>by <a class="font-weight-bold">Billy Forester</a>, 11/07/2018</p>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
          quia consequuntur magni dolores eos qui ratione.</p>
        <!-- Read more button -->
        <a class="btn btn-info btn-rounded btn-md">View</a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!-- Section: Blog v.2 -->
</div>
@endsection
