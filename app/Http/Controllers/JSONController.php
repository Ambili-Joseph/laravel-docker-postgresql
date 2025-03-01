<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use Hash;
use App\Models\Product;

class JSONController extends Controller
{
    //

    //
    public function index(Request $request)
    {
        $products =Storage::json("products.json");
        // dd($products);
        foreach($products as $key =>$value)
        {
         Product::Create([
            "name"=>$value["name"],
            "link"=>$value["link"],
            "image_link"=>$value["image_link"],
            "price"=>$value["price"],
            "currency"=>$value["currency"],
         ]);  
    }
          dd("products created sucess.");
        //  dd($products);
    }

}
