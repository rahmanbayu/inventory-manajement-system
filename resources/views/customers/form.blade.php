@extends('layouts.app')

@section('title')
    Add Customer
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Customer</h1>
  <a href="{{ route('customers.index') }}" class="btn btn-primary btn-sm">Customers</a>
</div>

<div class="card text-left">
  <div class="card-body">

      <form action="" method="post">
        @csrf

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="phonne_number">Phonne Number</label>
          <input type="text" class="form-control" name="phonne_number" id="phonne_number">
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" name="address" id="address" rows="4"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file" name="image" id="image">
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>

      </form>

  </div>
</div>
@endsection