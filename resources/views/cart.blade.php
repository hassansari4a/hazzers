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
<div class="container cart-container py-2">
  @if(Session::has('cart'))
  <!-- If there are items in the cart -->
    <h4>{{ Auth::user()->name }}'s Cart</h4>
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
              <td style="text-align: right; font-weight: 400">Total Price:</td>
              <td></td>
              <td>{{$total}}</td>
            </tr>
            <tr>
              <td></td>
              <td style="text-align: right; font-weight: 400">Delivery Charge:</td>
              <td></td>
              <td>+ {{$delCharge}}</td>
            </tr>
            <tr>
              <td></td>
              <td style="text-align: right; font-weight: 500">Total:</td>
              <td></td>
              <td style="font-weight: 600">{{$totalPrice}}</td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 bg-faded pb-2 px-4">
      <form action="https://uat.esewa.com.np/epay/main" method="POST">
        <input value={{$totalPrice}} name="tAmt" type="hidden">
        <input value={{$total}} name="amt" type="hidden">
        <input value="0" name="txAmt" type="hidden">
        <input value="0" name="psc" type="hidden">
        <input value={{$delCharge}} name="pdc" type="hidden">
        <input value="EPAYTEST" name="scd" type="hidden">
        <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
        <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
        <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
        <button class="btn-checkout" type="submit">Pay with Esewa</button>
      </form>
      </div>
    </div>
  @else
  <!-- If there are no items in the cart -->
  <h1>No items dude</h1>
  @endif
</div>
@endsection