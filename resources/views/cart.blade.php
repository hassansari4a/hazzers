@extends('layouts.layout2')

@section('breadcrumb')
<div class="breadcrumbs">
  <a class="blink" href="{{ route('/')}}">Home</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>Cart</span>
</div>
@endsection

<link rel="stylesheet" href="/css/cart.css">

@section('content')
<div class="container py-2" style="font-family: Roboto">
  @if(Session::has('cart'))
  <!-- If there are items in the cart -->
    <h3>Your Cart</h3>
    <div class="row ">
      <div class="col-lg-8 bg-faded">
        <table class="table">
          <thead class="">
            <tr>
              <th style="width: 15%"></th>
              <th style="width: 65%">Product Name</th>
              <th style="width: 5%"></th>
              <th style="width: 15%">Price</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $product)
              <tr><img src="" alt="">
                <td><a href="{{Route('shop.show', $product['item']['slug'])}}"><img class="listing-img" src="uploads/productimg/{{$product['item']['adphoto']}}" alt=""></a></td>
                <td>{{$product['item']['adtitle']}}</td>
                <td>
                  <a href="" class="remove-link"><i class="fa fa-times remove-link"></i></a>
                </td>
                <td>{{$product['item']['price']}}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <td></td>
              <td style="text-align: right; font-weight: 500">Total Price:</td>
              <td></td>
              <td>{{$totalPrice}}</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 bg-faded pb-2 px-4">
        <a href="" class="btn-checkout">
          Proceed to checkout
        </a>
      </div>
    </div>
  @else
  <!-- If there are no items in the cart -->
  <h1>No items dude</h1>
  @endif
</div>
@endsection