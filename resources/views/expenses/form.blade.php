@extends('layouts.app')

@section('title')
    Add Expense
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Expense</h1>
  <a href="{{ route('expenses.index') }}" class="btn btn-primary btn-sm">Expenses</a>
</div>

<div class="card text-left">
  <div class="card-body">

      <form action="" method="post">
        @csrf

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="total">Total</label>
          <input type="text" class="form-control" name="total" id="total">
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>

      </form>

  </div>
</div>
@endsection