@extends('layouts.app')

@section('title')
    Buy
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Buy</h1>
    </div>

    <div class="row">

      <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header">
              <div class="d-flex justify-content-between">
                <strong class="text-primary">Expense Insert</strong>
                <a href="" class="btn btn-sm btn-primary text-white">Add Custommer</a>
              </div>
            </div>
          <div class="card-body">

            <table class="table table-borderless table-sm table-inverse table-responsive-md">
              <thead class="thead-inverse">
                <tr>
                  <th>Name</th>
                  <th>Qty</th>
                  <th>Unit</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nike Air Max</td>
                    <td>2</td>
                    <td>200000</td>
                    <td>400000</td>
                    <td>
                      <a href="" class="btn btn-danger btn-sm">X</a>
                    </td>
                  </tr>
                </tbody>
            </table>

            <hr>

            <table class="table table-borderless table-inverse table-responsive-md">
                <tbody>
                  <tr>
                    <th>Total Quantity</th>
                    <td>2</td>
                  </tr>
                  <tr>
                    <th>Sub Total</th>
                    <td>Rp 200.000</td>
                  </tr>
                  <tr>
                    <th>Vat</th>
                    <td>3%</td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td>Rp 205.000</td>
                  </tr>
                </tbody>
            </table>

            <hr>

            <form action="" method="post">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>

              <div class="form-group">
                <label for="pay">Pay</label>
                <input type="text" class="form-control" name="pay" id="pay">
              </div>

              <div class="form-group">
                <label for="due">Due</label>
                <input type="text" class="form-control" name="due" id="due">
              </div>

              <div class="form-group">
                <label for="payment_method">Payment Methods</label>
                <select class="form-control" name="payment_method" id="payment_method">
                  <option>Cash</option>
                  <option>Credit Card</option>
                </select>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Save</button>
              </div>

            </form>

          </div>
        </div>
      </div>

      <div class="col-md-7">
        <div class="card shadow">
          <div class="card-header">
            <strong class="text-primary">Products</strong>
          </div>
          <div class="card-body">
            <form action="" method="post">
              @csrf
              <div class="form-group">
                  <input type="text" class="form-control" name="search" id="search" placeholder="Search product">
              </div>
            </form>

            <div class="row">
              <div class="col-3 border">
                <div class="text-center">
                  <img src="{{ asset('img/1.jpg') }}" width="100px" alt="">
                  <p>Nike Air jordan</p>
                  <span class="badge badge-primary">56</span>
                </div>
              </div>
              <div class="col-3 border">
                <div class="text-center">
                  <img src="{{ asset('img/2.jpg') }}" width="100px" alt="">
                  <p>Puma ex Macan</p>
                  <span class="badge badge-primary">56</span>
                </div>
              </div>
              <div class="col-3 border">
                <div class="text-center">
                  <img src="{{ asset('img/3.jpg') }}" width="100px" alt="">
                  <p>Nike Surf Seagh</p>
                  <span class="badge badge-primary">56</span>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>


@endsection