@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumbs">
        <a class="blink" href="{{ route('/')}}">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
        <!-- <li class="breadcrumb-item"><a id="bcrumb-link" href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li> -->
</div>
@endsection

@section('content')
<div class="container listings">
    <h2 class="listing-heading">Listings</h2>
    @foreach ($products as $product)      
    <div class="listing-panel">
        <div class="row listing-row">
            <div class="col-3">
            <div class="imgcontainer">
                <a href="{{ route('shop.show',$product->slug) }}">
                    <img class="rounded listing-img" src="{{asset('uploads/productimg/$product->adphoto')}}" alt="">
                </a>
            </div>        
            </div>
            <div class="col-7">
                <div class="titlecontainer">    
                <h3 class="listing-title"><a class="text-decoration-none text-reset" href="{{ route('shop.show',$product->slug) }}">{{ $product->adtitle }}</a></h3>
                </div>
                <div class="descriptioncontainer">
                    <p class="listing-des">{{ str_limit($product->description, 80) }}</p>
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
    {{ $products -> appends(request()->input())->links() }}
</div>
@endsection