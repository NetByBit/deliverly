@extends('layouts.app')

@section('content')
<div class="container">
<!-- Section: Blog v.2 -->
    <section class="text-center my-5">

        <!-- Section heading -->
        <h2 class="h1-responsive font-weight-bold my-5">{{ auth()->user()->isDriver()? 'Available orders': 'Your orders'}}</h2>

        @foreach ($orders->chunk(3) as $ordersRow)
            <div class="row mb-3">
                @foreach ($ordersRow as $order)
                    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

                        <div class="view overlay rounded z-depth-3 mb-4">
                            <img class="img-fluid" src="{{ $order->image }}">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <h4 class="font-weight-bold mb-3"><strong>{{ $order->name }}</strong></h4>
                        <p>by <a class="font-weight-bold">{{ $order->user->name }}</a>, {{ $order->created_at->diffForhumans() }}</p>
                        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                        quo minus id quod maxime placeat facere possimus voluptas.</p>
                        <a class="btn btn-pink btn-rounded btn-md text-white" href="/orders/{{ $order->id }}" >View</a>
                    </div>
                @endforeach
            </div>
        @endforeach

        {{ $orders->links()}}
    </section>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating green" href="/orders/create">
        <i class="fas fa-plus"></i>
    </a>
</div>
@endsection
