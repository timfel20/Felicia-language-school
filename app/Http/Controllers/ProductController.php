<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


/*The whole Auth user bs start from the fact that you gotta perform CRUD operation on your project
 to set an auth user, you need(), you gotta*/


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        /* this is creating a variable $products saying it is equal to all() in the model `product`
        the all() is basically returning new self of the model product. The products => products on 
        the second line means first'products is the name on the view i.e array name, second is the
        variable above'
        Also, aa shorter way to do this is usng the method compact(), how do you do this, pass the 
        function compact after the comma i.e where the [] is write compact('$products'))*/
        return view(
            'landing', ['products' => $products,
            ]); 
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$product = new Product;
        $product-> title= $request->title;*/

        $data = [
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'people' => $request->people,
            'date' => $request->date,
            'user_id'=>Auth::user()->id
        ];
        Product::create($data);
        return redirect(route('landing'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $productToedit = Product::findOrfail($id);
      return view('edittest', ['product' => $productToedit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $productToupdate = Product::findOrfail($id);
        $data = [
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'people' => $request->people,
            'date' => $request->date,
            'user_id'=>Auth::user()->id
        ];
        Product::create($data);
        return redirect(route('landing'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productToDelete=Product::findOrfail($id);
        $productToDelete->delete();
        return back();
    }
    public function myProducts($id){
       $product=Product::find($id);
       $user = Auth::user();
       if($product->applyToProducts($user->id))redirect('myproducts');
       redirect('myproducts');
    }
}
