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
   
    public function addToList($id, Request $request)
    {
        MyList::insert([
            'user_id'=>request()->id,
            'product_id'=>$id

        ]);
         return redirect()->back(); 
   
}
}

