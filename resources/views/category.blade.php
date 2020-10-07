@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumbs">
        <a class="blink" href="{{ route('/')}}">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <a class="blink" href="{{ route('/')}}">Shop</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{$categoryselect}}</span>
</div>
@endsection

@section('content')
<div class="container listings">
    <h2 class="listing-heading">Listings</h2>
    @foreach ($products as $product)      
    <div class="listing-panel">
        <div class="row listing-row">
            <div class="col-3">
            <div class="imgcontainer" width="181.75px" height="125px">
                <a href="{{ route('shop.show',$product->slug) }}">
                    <img class="rounded listing-img" src="/uploads/productimg/{{ $product -> adphoto }}" alt="">
                </a>
            </div>        
            </div>
            <div class="col-7">
                <div class="titlecontainer">    
                <h3 class="listing-title"><a class="text-decoration-none text-reset" href="{{ route('shop.show',$product->slug) }}">{{ $product->adtitle }}</a></h3>
                </div>
                <div class="descriptioncontainer">
                    <p class="listing-des text-truncate">{{ $product->description }}</p>
                </div>
            </div>
            <div class="col-2 pricecontainer">
                <div class="listing-price">
                    Rs. {{ $product->price }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection