@extends('layouts.app')
@section('breadcrumb')
<div class="breadcrumbs">
        <span>Home</span>
</div>
@endsection
<link rel="stylesheet" href="/css/herostyle.css">

@section('content')
<div class="hero container">
    <div class="row">
        <div class="col-7">
                <h1 class="hero-heading"><img src="{{asset('/img/LogoReal.png')}}" width="160" height="70" alt="Hazzers"></h1>
            <p class="hero-words">
                The best place
                to get<br>
                the best deals<br>
            </p>
            <div class="hero-buttons">  
                <form action="{{ route('shop') }}">
                    <button class="shop-button">Shop</button>
                </form>
            </div>
        </div>
        <div class="col-5">
            <div class="hero-image">
                <img src="{{ asset('/img/heroimg.png')}}" alt="hero-img">
            </div>
        </div>
    </div>
</div>
@endsection
