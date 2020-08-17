@extends('layouts.app')

@section('My Profile')
    
@endsection

@section('content')
    <div class="card text-left">
      <div class="card-body">

        <div class="text-center">
          @if (!$user->image)
          <img src="{{ asset('img/default/def.png') }}" width="100px" style="border-radius: 50%" alt="">
          @else
          <img src="{{ Storage::url($user->image) }}" alt="" width="100px" style="border-radius: 50%">
          @endif
        </div>

        <form action="{{ route('users.update') }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" disabled class="form-control"value="{{ $user->email }}">
          </div>

          <div class="form-group">
            <label for="about">About</label>
            <textarea class="form-control" name="about" id="about" rows="4"></textarea>
          </div>

          <div class="form-group">
            <label for="image">image</label>
            <input type="file" class="form-control-file" name="image" id="image">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>

        </form>

      </div>
    </div>
@endsection