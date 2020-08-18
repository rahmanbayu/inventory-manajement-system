@extends('layouts.app')

@section('title')
  {{ isset($suplier) ? 'Edit Suplier' : 'Add Suplier'}}
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{ isset($suplier) ? 'Edit Suplier' : 'Add Suplier'}}</h1>
  <a href="{{ route('supliers.index') }}" class="btn btn-sm btn-primary">Supliers</a>
</div>

 <div class="card shadow">
  <div class="card-body">

    <form action="{{ isset($suplier) ? route('supliers.update', $suplier) : route('supliers.index') }}" method="post" enctype="multipart/form-data">
      @csrf

      @if (isset($suplier))
          @method('PUT')
      @endif

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ isset($suplier) ? $suplier->name : old('name') }}">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ isset($suplier) ? $suplier->email : old('email') }}">
            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="shop_name">Shop Name</label>
            <input type="text" class="form-control @error('shop_name') is-invalid @enderror" name="shop_name" id="shop_name" value="{{ isset($suplier) ? $suplier->shop_name : old('shop_name') }}">
            @error('shop_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
      </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="phone_number">Phone Number</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="{{ isset($suplier) ? $suplier->phone_number : old('phone_number') }}">
            @error('phone_number') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="4">{{ isset($suplier) ? $suplier->address : old('address') }}</textarea>
        @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>
      @if (isset($suplier))
          <div class="form-group">
            <label for="">Old Image</label><br>
            <img src="{{ asset('storage/' . $suplier->image) }}" width="100px" alt="">
          </div>
      @endif

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
        @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Add</button>
      </div>

    </form>
  </div>
</div>
@endsection