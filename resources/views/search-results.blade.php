@extends('layouts.app')

@section('breadcrumb')
<div class="breadcrumbs">
<a class="blink" href="{{ route('/')}}">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <a class="blink" href="{{ route('shop')}}">Shop</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Searching "{{ request()->input('search')}}" ...</span>
</div>
@endsection

@section('content')
<div class="container listings">
    <h2 class="listing-heading">Search Results</h2>
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <p>{{ $products->total()}} result(s) for '{{ request()->input('search')}}'</p>

    @foreach ($products as $product)
    <div class="listing-panel">
        <div class="row listing-row">
            <div class="col-3">
            <div class="imgcontainer">
                <a href="{{ route('shop.show',$product->slug) }}">
                    <img class="rounded listing-img" src="uploads/productimg/{{ $product->adphoto}}" alt="">
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
    {{ $products -> appends(request()->input())->links() }}
</div>
@endsection