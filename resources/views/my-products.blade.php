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
            <a href="" data-toggle="modal" data-target="#deleteModal" data-url="{{route('deleteproduct', $product->slug)}}" class="text-reset deleteLink"><i class="fa fa-trash" data-toggle="tooltip" id="icons" title="delete"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </thead>
  </table>
</div>
<script src="https://kit.fontawesome.com/8cb54c87bb.js" crossorigin="anonymous"></script>
@endsection

<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this listing?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <form action="" method="post" class="deleteForm">
        @csrf 
          <button type="submit" class="btn btn-danger">Yes, I am sure.</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('.deleteLink').click(function () {
      var url = $(this).attr('data-url');
      $('.deleteForm').attr('action', url);
  });
});
</script>