@extends('layouts.app')

@section('title')
    Orders
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Orders</h1>
</div>

<div class="card text-left">
  <div class="card-body">
    <div class="d-flex justify-content-between">
      <form action="" method="get">
        @csrf
        <ul class="list-inline">
          <li class="list-inline-item m-0">
            <div class="form-group">
              <input type="date" class="form-control" name="" id="">
            </div>
          </li>
          <li class="list-inline-item">
              <div class="form-group">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
          </li>
        </ul>
      </form>

    </div>

    <table class="table table-sm table-bordered table-inverse table-responsive-md">
      <thead class="thead-inverse">
        <tr>
          <th>Product Name</th>
          <th>Qty</th>
          <th>Sub Total</th>
          <th>Vat</th>
          <th>Total</th>
          <th width="15%"></th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td>
              <a href="" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        </tbody>
    </table>

  </div>
</div>
@endsection