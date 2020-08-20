@extends('layouts.app')

@section('title')
    {{ isset($category) ? 'Edit Category' : 'Create Category'}}
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{ isset($category) ? 'Edit Category' : 'Create Category'}}</h1>
  <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">Categories</a>
</div>

<div class="card text-left">
  <div class="card-body">

      <form action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}" method="post">
        @csrf
        @if (isset($category))
            @method('PUT')
        @endif

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ isset($category) ? $category->name : old('name') }}">
          @error('name') <span class="invalid-feedback">{{ $message }}</span>  @enderror
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Edit' : 'Create'}}</button>
        </div>

      </form>

  </div>
</div>
@endsection