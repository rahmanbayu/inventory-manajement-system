@extends('layouts.app')

@section('title')
    Add Category
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
  <a href="{{ route('categories.index') }}" class="btn btn-primary btn-sm">Categories</a>
</div>

<div class="card text-left">
  <div class="card-body">

      <form action="" method="post">
        @csrf

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>

      </form>

  </div>
</div>
@endsection