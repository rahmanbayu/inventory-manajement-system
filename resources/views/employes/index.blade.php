@extends('layouts.app')
@section('title')
    Employes
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Employes</h1>
</div>

<div class="card text-left">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <form action="" method="get">
        @csrf
        <ul class="list-inline">
          <li class="list-inline-item m-0">
            <div class="form-group">
              <input type="text" class="form-control" name="search" id="search" aria-describedby="helpId" placeholder="Search Employe">
            </div>
          </li>
          <li class="list-inline-item">
              <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
          </li>
        </ul>
      </form>

      <div>
        <a href="{{ route('employes.create') }}" class="btn btn-primary btn-sm">Add Employe</a>
      </div>
    </div>

    <table class="table table-sm table-bordered table-inverse table-responsive-md">
      <thead class="thead-inverse">
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Joining Date</th>
          <th width="15%"></th>
        </tr>
        </thead>
        <tbody>
          @forelse ($employes as $employe)
          <tr>
            <td>
              <img src="{{ Storage::url($employe->image) }}" width="60px" alt="">
            </td>
            <td>{{ $employe->name }}</td>
            <td>{{ $employe->phone_number }}</td>
            <td>{{ $employe->email }}</td>
            <td>{{ $employe->created_at }}</td>
            <td>
              <a href="" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
          @empty
              <tr>
                <td colspan="6" class="text-center">Data employe empty!</td>
              </tr>
          @endforelse
        </tbody>
    </table>

  </div>
</div>
@endsection