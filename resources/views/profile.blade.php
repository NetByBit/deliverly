@extends('layouts.app')

@section('content')
<div class="container">
    {{-- justify-content-centers --}}
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $user->image }}" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h2>
                {{ $user->name }}
            </h2>

            <div>
                <p>
                    Car type: {{ $user->car_type }}
                </p>
                <p>
                    Car number: {{ $user->car_number }}
                </p>
                <p>
                    Max weight: {{ $user->max_weight / 1000 }} kg
                </p>
                <p>
                    Orders taken: {{ $user->orders()->count() }} order
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
