<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;


class NewProductController extends Controller
{
    public function index(){
        return view('new-product');
    }

    public function __construct()
    {
        $this->middleware('web');
    }

    protected function store(Request $request){
        $product = new Product;
        $product->adtitle = $request->input('adtitle');
        $product->description = $request->input('description');
        $product->price = $request->input('cost');
        $product->deliverycharge = $request->input('deliverycharge');
        $product->categoryselect = $request->input('categoryselect');
        $product->phone = $request->input('phone');
        $product->email = $request->input('email');

        if ($request->hasfile('adphoto')){
            $file = $request->file('adphoto');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/productimg/',$filename);
            $product->adphoto = $filename;
        } else {
            return $request;
            $product->adphoto = '';
            $filename='';
        }
        $product->slug = str_replace(" ","-",$request->input('adtitle'));


        $product->save();

        return redirect()->intended(route('home'));
    }
}
