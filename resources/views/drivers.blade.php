@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h2 class="text-center mb-3">
                    Drivers
                </h2>
                <div class="row">
                    <div class="col-md mt-3">
                        <select class="browser-default custom-select mb-4">
                            <option value="" selected>From</option>
                            @foreach (getGovernorates() as $governorate)
                                <option value="{{ $governorate }}">{{ $governorate }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md mt-3">
                        <select class="browser-default custom-select mb-4">
                            <option value="" selected>To</option>
                            @foreach (getGovernorates() as $governorate)
                                <option value="{{ $governorate }}">{{ $governorate }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mt-3">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
                <div class="list-group">
                    @foreach ($users as $user)
                        <a class="list-group-item list-group-item-action" href="/profile/{{ $user->id }}">
                            <img src="{{ $user->image }}"  width="100" class="img-thumbnail img-fluid">
                            <span> {{ $user->name }}</span>
                        </a>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection
