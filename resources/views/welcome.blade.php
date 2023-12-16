@extends('layouts.app')

@section('title', 'Flight Search')

@section('content')
  <div class="container mt-5">
    <div" class="row p-4 mx-auto" style="width:500px;box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5); ">
      <h2 class="mb-5 text-center text-primary text-decoration-underline">Flight Search</h2>
      <form>
        @csrf
        <div class="container=fluid">
          <div class="form-group col-md-12">
            <label for="departure">Departure City</label>
            <input type="text" class="form-control" id="departure" name="departure" required>
          </div>
          <div class="form-group col-md-12">
            <label for="destination">Destination City</label>
            <input type="text" class="form-control" id="destination" name="destination" required>
          </div>
          <div class="form-group col-md-12">
            <label for="departureDate">Departure Date</label>
            <input type="date" class="form-control" id="departureDate" name="departureDate" required>
          </div>
          <div class="form-group col-md-12">
            <button type="" class="btn btn-primary mt-4">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
