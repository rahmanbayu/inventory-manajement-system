@extends('layouts.app')

@section('title')
    Add Product
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
  <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Products</a>
</div>

 <div class="card shadow">
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
            <label for="code">Code</label>
            <input type="text" class="form-control" name="code" id="code">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
      </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="suplier_id">Suplier</label>
            <select class="form-control" name="suplier_id" id="suplier_id">
              @foreach ($supliers as $suplier)
              <option value="{{ $suplier->id }}">{{ $suplier->name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="buy_price">Buy Price</label>
            <input type="number" class="form-control" name="buy_price" id="buy_price">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sel_price">Sel Price</label>
            <input type="number" class="form-control" name="sel_price" id="sel_price">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="buy_at">Buy Date</label>
            <input type="text" class="form-control" name="buy_at" id="buy_at">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity">
          </div>
        </div>

      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file" name="image" id="image">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Add</button>
      </div>

    </form>
  </div>
</div>
@endsection