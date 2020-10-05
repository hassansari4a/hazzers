@extends('layouts.app')

@section('content')
<div class="container listings">
    <h2 class="listing-heading">Listings</h2>
    @foreach ($products as $product)      
    <div class="listing-panel">
        <div class="row listing-row">
            <div class="col-3">
            <div class="imgcontainer" width="181.75px" height="125px">
                <img class="rounded listing-img" src="uploads/productimg/{{ $product->adphoto}}" alt="">
            </div>        
            </div>
            <div class="col-7">
                <div class="titlecontainer">    
                <h3 class="listing-title">{{ $product->adtitle }}</h3>
                </div>
                <div class="descriptioncontainer">
                    <p class="listing-des">{{ $product->description }}</p>
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