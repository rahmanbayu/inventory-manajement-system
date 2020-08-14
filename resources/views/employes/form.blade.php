@extends('layouts.app')

@section('title')
    Add Employe
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Employes</h1>
  <a href="{{ route('employes.index') }}" class="btn btn-primary btn-sm">Employes</a>
</div>    

<section class="form-add-employe">
  <div class="card">
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
              <label for="email">email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone_number">Phone Number</label>
              <input type="text" class="form-control" name="phone_number" id="phone_number">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="NIK">NIK</label>
              <input type="text" class="form-control" name="NIK" id="NIK">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="birth_date">Birth Date</label>
              <input type="text" class="form-control" name="birth_date" id="birth_date">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="salary">Salary</label>
              <input type="text" class="form-control" name="salary" id="salary">
            </div>
          </div>
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
          <button class="btn btn-primary" type="submit">Add</button>
        </div>

      </form>

    </div>
  </div>
</section>
@endsection