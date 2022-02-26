<?php

namespace App\Http\Controllers;

use App\Models\MyList;
use App\Http\Requests\StoreMyListRequest;
use App\Http\Requests\UpdateMyListRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyListController extends Controller
{
    public function index(){
        return view('myproducts');
    }
   
    /* public function addToList($id, Request $request)
    {
        //explaination: we find the ids of both product and user. User id is already made by breeze and 
        //product id is creted already during the crud operation. We use the insert method to insert thgese
        //ids data into the MyList database. Then we find the product id using find or fail since we're
        //gonna work on view and a foreach function is already there we just equal the function parameter to 
        //the id of the product we're gonna move to the other page.
        $check = MyList::where('product_id', $id)->first();
        if($check){
            MyList::where('product_id', $id);
            $productToadd = Product::find($id);
            return view('myproducts', ['product' => $productToadd]);  
        }
        else{
            MyList::insert([
                'user_id'=>request()->id,
                'product_id'=>$id
    
            ]);
            $productToadd = Product::find($id);
            return view('myproducts', ['product' => $productToadd]); 
       
        }
       
} */
    /* public function addToList($id){
        $this->productToadd = Auth::user()->myAddedProducts;
        $producthere = Product::find($id);
        $user = Auth::user();
        if(!$producthere->isInLove($user->id))
        return redirect('myproducts' );
        
        // Mail::to($user->email)->send(new SubscribingEvent($user, $event));//->queue
        
        return redirect('myproducts'); 
    } */
}

