@extends('layouts.app')

@section('title')
    Supliers
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Supliers</h1>
</div>

<div class="card text-left">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <form action="" method="get">
        @csrf
        <ul class="list-inline">
          <li class="list-inline-item m-0">
            <div class="form-group">
              <input type="text" class="form-control" name="search" id="search" aria-describedby="helpId" placeholder="Search Suplier">
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
        <a href="{{ route('supliers.create') }}" class="btn btn-primary btn-sm">Add Suplier</a>
      </div>
    </div>

    <table class="table table-sm table-bordered table-inverse table-responsive-md">
      <thead class="thead-inverse">
        <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Shop Name</th>
          <th>Email</th>
          <th width="15%"></th>
        </tr>
        </thead>
        <tbody>
          @forelse ($supliers as $suplier)
          <tr>
            <td>
              <img src="{{ Storage::url($suplier->image) }}" width="50px" alt="">
            </td>
            <td>{{ $suplier->name }}</td>
            <td>{{ $suplier->phone_number }}</td>
            <td>{{ $suplier->shop_name }}</td>
            <td>{{ $suplier->email }}</td>
            <td>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="{{ route('supliers.edit', $suplier) }}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                </li>
                <li class="list-inline-item">
                  <form action="{{ route('supliers.destroy', $suplier) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                  </form>
                </li>
              </ul>
            </td>
          </tr>
          @empty
              
          @endforelse

        </tbody>
    </table>

  </div>
</div>
@endsection