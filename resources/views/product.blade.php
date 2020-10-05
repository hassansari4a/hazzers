@extends('layouts.layout2')

@section('content')
<div class="container product-container">
  <div class="row">
    <div class="col-6">
      <div class="product-title">
        <h1 class="pheading">{{ $product -> adtitle }}</h1>
      </div>
      <div class="product-price">
        <h3 class="pprice">Rs. {{ $product -> price }}</h3>
      </div>
      <div class="product-description row product-panel">
        <div class="col-3">
          Description:
        </div>
        <div class="col-9">
          {!! nl2br(e( $product -> description )) !!}
        </div>
      </div>
      <div class="product-phone row product-panel">
        <div class="col-3">
          Phone:
        </div>
        <div class="col-9">
          {{ $product -> phone }}
        </div>
      </div>
      <div class="product-email row product-panel">
        <div class="col-3">
          Email:
        </div>
        <div class="col-9">
          {{ $product -> email }}
        </div>
      </div>
      <div class="product-deliverycharge row product-panel">
        <div class="col-3">
          Delivery Charge:
        </div>
        <div class="col-9">
          {{ $product -> deliverycharge }}
        </div>
      </div>
    </div>
    <div class="col-6 align-self-start">
      <div class="">
        <img class="product-img rounded" src="/uploads/productimg/{{ $product -> adphoto }}" alt="">
      </div>
    </div>
  </div>
</div>
@endsection