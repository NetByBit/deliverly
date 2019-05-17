@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-4">
        <div class="view overlay rounded z-depth-3">
            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/81.jpg" alt="Sample image">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
        </div>
        <div class="col-md-8">
            <h2 class="h1-responsive font-weight-bold mb-5">Iphone
                <span class="badge badge-pill deep-orange ml-3">Delivering</span>
            </h2>
            <div class="row mb-3">
                <div class="col">
                    <strong>From:</strong> Cairo
                </div>
                <div class="col">
                    <strong>To:</strong> Suez
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <strong>Weight:</strong> 400 gm
                </div>
                <div class="col">
                    <strong>Price:</strong> 20 EGP
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa quod quo deserunt modi iusto a cum alias, eveniet labore. Ex a eum tenetur ratione quo quasi, voluptas nisi aperiam. Eum?</p>
        </div>
    </div>
    <table class="table">
        <thead class="black white-text">
            <tr>
                <th scope="col">Date</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">April 1st 2019</th>
                <td>Picked</td>
            </tr>
            <tr>
                <th scope="row">April 5th 2019</th>
                <td>Arrived cairo</td>
            </tr>
            <tr>
                <th scope="row">April 10th 2019</th>
                <td>Delivered</td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
