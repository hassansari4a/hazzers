@extends('layouts.layout2')

@section('breadcrumb')
<div class="breadcrumbs">
  <a class="blink" href="{{ route('/')}}">Home</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>Cart</span>
</div>
@endsection
  
@section('content')
<h1>Cart</h1>

@endsection