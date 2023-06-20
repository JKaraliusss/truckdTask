@extends('layouts.app')

@section('title', 'trucks')

@section('content')


    <h1 class="p-2 text-warning">Trucks</h1>

    @foreach($trucks as $truck)

            <div class=" m-auto col-8 p-2">
                <div class="card-header">
                    <h5 class="card-title text-info">{{ $truck->unit_number }}</h5>
                    <h5 class="card-title text-info">{{ $truck->year }}</h5>
                    <p class="card-text text-info" style="text-align: start;">{{ \Illuminate\Support\Str::of($truck->notes)->words(30, '...')}}</p>
                </div>
                </div>
    @endforeach

    <div class="mt-3">
        <a href="{{ url('/trucks/create') }}" class="btn btn-outline-primary">Add Truck</a>
    </div>

@endsection
