@extends('layouts.app')

@section('title')
    {{ isset($product) ? 'Edit Product' : 'Create product' }}
@endsection

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">{{ isset($product) ? 'Edit Product' : 'Create product' }}</h1>
  <a href="{{ route('products.index') }}" class="btn btn-sm btn-primary">Products</a>
</div>

<div class="card shadow">
  <div class="card-body">

    <form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="post" enctype="multipart/form-data">
      @csrf
      @if (isset($product))
          @method('PUT')
      @endif
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ isset($product) ? $product->name : old('name') }}">
            @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="code">Code</label>
            <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" value="{{ isset($product) ? $product->code : old('code') }}">
            @error('code') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control @error('dategory_id') is-invalid @enderror" name="category_id" id="category_id">
              @foreach ($categories as $category)
              <option value="{{ $category->id }}"
                @if (isset($product))
                    @if ($product->category_id == $category->id)
                        selected
                    @endif
                @endif
                >{{ $category->name }}</option>
              @endforeach
            </select>
            @error('dategory_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
      </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="suplier_id">Suplier</label>
            <select class="form-control @error('suplier_id') is-invalid @enderror" name="suplier_id" id="suplier_id">
              @foreach ($supliers as $suplier)
              <option value="{{ $suplier->id }}"
                @if (isset($product))
                  @if ($product->suplier_id == $suplier->id)
                      selected
                  @endif
                @endif
            >{{ $suplier->name }}</option>
              @endforeach
            </select>
            @error('suplier_id') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="buy_price">Buy Price</label>
            <input type="number" class="form-control @error('buy_price') is-invalid @enderror" name="buy_price" id="buy_price" value="{{ isset($product) ? $product->buy_price : old('buy_price') }}">
            @error('buy_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="sel_price">Sel Price</label>
            <input type="number" class="form-control @error('sel_price') is-invalid @enderror" name="sel_price" id="sel_price" value="{{ isset($product) ? $product->sel_price : old('sel_price') }}">
            @error('sel_price') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="buy_at">Buy Date</label>
            <input type="text" class="form-control @error('buy_at') is-invalid @enderror" name="buy_at" id="buy_at" value="{{ isset($product) ? $product->buy_at : old('buy_at') }}">
            @error('buy_at') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" value="{{ isset($product) ? $product->quantity : old('quantity') }}">
            @error('quantity') <span class="invalid-feedback">{{ $message }}</span> @enderror
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="old-image">Old Image</label> <br>
        <img src="{{ asset('storage/' . $product->image) }}" width="100px" alt="">
      </div>

      <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" id="image">
        @error('image') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">{{ isset($product) ? 'Edit' : 'Create' }}</button>
      </div>

    </form>
  </div>
</div>
@endsection

@push('custom-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@push('custom-script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
  flatpickr("#buy_at", {
    enableTime: true,
    enableSeconds: true
  });
</script>
@endpush