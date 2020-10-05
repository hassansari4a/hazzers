@extends('layouts.layout2')

@section('content')
<div class="container bg-faded pb-3">
    <form method="POST" action="{{ route('newproduct.submit') }}" enctype='multipart/form-data'>
    @csrf
        <div class="form-group">
            <label for="adtitle">Ad Title</label>
            <input type="text" class="form-control" name="adtitle" id="adtitle" placeholder="" required autofocus>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" required placeholder=""></textarea>
        </div>
        <div class="form-row">
            <div class="form-gorup col">
                <label for="price">Price</label>
                <input type="number" name="cost" id="price" required class="form-control">
            </div>
            <div class="form-gorup col">
                <label for="deliverycharge">Delivery Charge</label>
                <input type="number" name="deliverycharge" id="deliverycharge" placeholder="( ° ͜ʖ͡°)╭∩╮" class="form-control">
            </div>
            <div class="form-group col">
            <label for="categotyselect">Category select</label>
            <select class="form-control" required name="categoryselect" id="categotyselect">
            <option value="1">Electronics</option>
            <option value="2">Fashion</option>
            <option value="3">Home and Garden</option>
            <option value="4">Auto Parts and Accessories</option>
            <option value="5">Musical Instruments</option>
            <option value="6">Sports</option>
            <option value="7">Toys and Hobbies</option>
            <option value="8" >Video Games and Console</option>
            </select>
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="form-gorup col">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" required class="form-control">
            </div> 
            <div class="form-gorup col">
                <label for="email">Email</label>
                <input type="text" readonly class="form-control-plaintext" name="email" id="email" required value={{ Auth::user()->email }}>
            </div> 
        </div>
        <div class="form-group" style="width:40%">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="adphoto" id="adphoto"
                    aria-describedby="adphoto">
                    <label class="custom-file-label" for="adphoto">Upload Photo</label>
                </div>
            </div>
        </div>
        
        <div class="form-gorup">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
        </form>
</div>
@endsection