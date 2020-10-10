@extends('layouts.layout2')
@section('breadcrumb')
<div class="breadcrumbs">
  <a class="blink" href="{{ route('/')}}">Home</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>My Products</span>
</div>
@endsection
<link rel="stylesheet" href="/css/myproductsStyle.css">

@section('content')
<div class="panel panel-default">
  <table class="table table-curved products-table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Ad Title</th>
        <th class="item-des" scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Delivery Charge</th>
        <th scope="col">Category</th>
        <th scope="col">Phone</th>
        <th scope="col">Ad Photo</th>
        <th scope="col">Actions</th>
      </tr>
      <tbody class="">
      @foreach($products as $product)
        <tr>
          <th>{{$loop->iteration}}</th>
          <td>{{$product->adtitle}}</td>
          <td class="item-des">{!! nl2br(e( $product -> description )) !!}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->deliverycharge}}</td>
          <td>{{$product->categoryselect}}</td>
          <td>{{$product->phone}}</td>
          <td class="item-photo"><img class="adphoto" src="/uploads/productimg/{{$product->adphoto}}" alt="{{$product->adphoto}}"></td>
          <td class="item-action">
            <a href="{{route('editproduct', $product->slug)}}" class="text-reset icons"><i class="fa fa-pencil-alt"  id="icons" title="edit"></i></a>
            <a href="" class="text-reset icons"><i class="fa fa-trash" data-toggle="tooltip" id="icons" title="delete"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </thead>
  </table>
</div>
<script src="https://kit.fontawesome.com/8cb54c87bb.js" crossorigin="anonymous"></script>
@endsection