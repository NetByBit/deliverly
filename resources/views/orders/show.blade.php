@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="view overlay rounded z-depth-3">
                <img class="img-fluid" src="{{ $order->image }}" alt="Sample image">
                <a>
                <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <button class="btn btn-info btn-lg  btn-block mx-auto mt-5">Accept order</button>
        </div>
        <div class="col-md-8">
            <h2 class="h1-responsive font-weight-bold mb-5">{{ $order->title }}
                <span class="badge badge-pill deep-orange ml-3">Delivering</span>
            </h2>
            <div class="row mb-3">
                <div class="col">
                    <strong>From:</strong> {{ $order->from }}
                </div>
                <div class="col">
                    <strong>To:</strong> {{ $order->to }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <strong>Weight:</strong> {{ $order->weight /1000 }} kg
                </div>
                <div class="col">
                    <strong>Price:</strong> {{ $order->price }} EGP
                </div>
            </div>
            <p>{{ $order->description }}</p>
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
            @forelse($order->statuses as $status)
                <tr>
                    <th scope="row">{{ $status->created_at->diffForHumans() }}</th>
                    <td>{{ $status->body }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">
                        No status to show
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>

</div>
@endsection
