@extends('layouts.layout2')
@section('breadcrumb')
<div class="breadcrumbs">
        <a class="blink" href="{{ route('/')}}">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <a class="blink" href="{{ route('shop')}}">Shop</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ $product -> adtitle }}</span>
        <!-- <li class="breadcrumb-item"><a id="bcrumb-link" href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li> -->
</div>
@endsection
@section('content')
<div class="container product-container">
  <div class="row">
    <div class="col-md-6">
      <div class="product-title">
        <h1 class="pheading">{{ $product -> adtitle }}</h1>
      </div>
      <div class="product-price">
        <h3 class="pprice">Rs. {{ $product -> price }}</h3>
      </div>
      <div class="add-to-cart product-panel pb-4">
        
            <a href="{{route('cart.store', $product -> slug)}}" id="add-to-cart">Add to cart</a>
        
      </div>
      <div class="product-description row product-panel">
        <div class="col-sm-3">
          Description:
        </div>
        <div class="col-sm-9">
          {!! nl2br(e( $product -> description )) !!}
        </div>
      </div>
      <div class="product-phone row product-panel">
        <div class="col-sm-3">
          Phone:
        </div>
        <div class="col-sm-9">
          {{ $product -> phone }}
        </div>
      </div>
      <div class="product-email row product-panel">
        <div class="col-sm-3">
          Email:
        </div>
        <div class="col-sm-9">
          <a id="emailid" href="mailto:{{ $product -> email }}">{{ $product -> email }}</a>
        </div>
      </div>
      <div class="product-deliverycharge row product-panel">
        <div class="col-sm-3">
          Delivery Charge:
        </div>
        <div class="col-sm-9">
          {{ $product -> deliverycharge }}
        </div>
      </div>
    </div>
    <div class="col-md-6 align-self-start">
      <div class="">
        <img class="product-img rounded" src="/uploads/productimg/{{ $product -> adphoto }}" alt="">
      </div>
    </div>
  </div>
</div>
@endsection