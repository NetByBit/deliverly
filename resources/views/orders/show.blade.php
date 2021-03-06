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
            @can('accept', $order)
                <form action="/orders/{{ $order->id }}/accept" method="post">
                    @csrf
                    <button type="submit" class="btn btn-info btn-lg btn-block mx-auto mt-5">Accept order</button>
                </form>
            @endcan
            @can('deliver', $order)
                <form action="/orders/{{ $order->id }}/delivered" method="post">
                    @csrf
                    <button type="submit" class="btn btn-info btn-lg btn-block mx-auto mt-5">Mark as delivered</button>
                </form>
            @endcan
        </div>
        <div class="col-md-8">
            <h2 class="h1-responsive font-weight-bold mb-5">{{ $order->title }}
                <span class="badge badge-pill deep-orange ml-3">{{ $order->status }}</span>
            </h2>
            <h5>From:</h5>
            <div class="row m-3">
                <div class="col">
                    <strong>city:</strong> {{ $order->from_city }}
                </div>
                <div class="col">
                    <strong>Address:</strong> {{ $order->from }}
                </div>
            </div>
            <h5>To:</h5>
            <div class="row m-3">
                <div class="col">
                    <strong>city:</strong> {{ $order->to_city }}
                </div>
                <div class="col">
                    <strong>Address:</strong> {{ $order->to }}
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <strong>Weight:</strong> {{ $order->weight /1000 }} kg
                </div>
                @if ($order->driver)
                    <div class="col">
                        <strong>Delivered by:</strong> <a href="/profile/{{ $order->driver->id }}">{{ $order->driver->name }}</a>
                    </div>
                @endif
            </div>
            <div class="row mb-4">
                <div class="col">
                    <strong>Estimated arrival time:</strong> April 26th, 2019
                </div>
                <div class="col">
                    <strong>Cost:</strong> {{ $order->cost }} EGP
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
    @can('comment', $order)
        <form action="/orders/{{ $order->id }}/comment" method="post" class="row">
            @csrf
            <div class="col-md-6">
                <input type="text" name="body" class="form-control" placeholder="Add status" id="form7">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-info">Add</button>
            </div>
        </form>
    @endcan

</div>
@endsection
