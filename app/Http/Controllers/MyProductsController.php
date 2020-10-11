<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;

class MyProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $products = Product::where('email',Auth::user()->email)->get();
        return view('my-products')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function edit($slug){
        $product = Product::where('slug',$slug)->firstorfail();
        return view('listingupdate')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if ($request->hasfile('adphoto')){
            $file = $request->file('adphoto');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' .$extension;
            $file->move('uploads/productimg/',$filename);
        } else {
            $filename = Product::where('slug',$slug)->firstorfail()->adphoto;
        }
        Product::where('slug', $slug)
                ->update(['adtitle' => $request->input('adtitle'),
                    'description' => $request->input('description'),
                    'price' => $request->input('cost'),
                    'deliverycharge' => $request->input('deliverycharge'),
                    'categoryselect' => $request->input('categoryselect'),
                    'phone' => $request->input('phone'),
                    'adphoto' => $filename
                ]);
        return redirect()->intended(route('myproducts'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Product::where('slug', $slug)->delete();
        return redirect()->intended(route('myproducts'));
    }
}
