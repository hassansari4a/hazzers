@extends('layouts.layout2')

@section('breadcrumb')
<div class="breadcrumbs">
        <a class="blink" href="{{ route('/')}}">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <a class="blink" href="{{ route('cart.index')}}">Cart</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Checkout</span>
</div>
@endsection

@section('content')
  <div class="container bg-faded">
    <div class="row">
      <h1> Rs. {{$total}}</h1>
    </div>
  </div>
@endsection