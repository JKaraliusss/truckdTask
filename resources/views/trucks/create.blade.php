@extends('layouts.app')

@section('title', 'truck create')

@section('content')
    <div class="bg-white" style="padding: 20px; border-radius: 5px;">
        <form method="post" action="{{ route('trucks.store') }}">
            @csrf
            <div class="form-group">
                <label for="unitNumber">Unit Number</label>
                <input type="text" name="unit_number" class="form-control" id="unitNumber" placeholder="Unit Number">
            </div>
            <div class="form-group">
                <label for="year">Year</label>
               <input type="number" name="year" class="form-control" id="year" min="1900" max="2028">
            </div>
            <div class="form-group">
                <label for="notes">Notes</label>
               <input type="text" name="notes" class="form-control" id="notes">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
