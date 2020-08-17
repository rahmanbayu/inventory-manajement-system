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

      <form action="{{ route('employes.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name">
              @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
              @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone_number">Phone Number</label>
              <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number">
              @error('phone_number') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik">
              @error('nik') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="birth_date">Birth Date</label>
              <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" id="birth_date">
              @error('birth_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="salary">Salary</label>
              <input type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" id="salary">
              @error('salary') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="4"></textarea>
          @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
          @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group text-center">
          <button class="btn btn-primary" type="submit">Add</button>
        </div>

      </form>

    </div>
  </div>
</section>
@endsection