<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class HomeController extends Controller
{
    public function details()
    {
      // $product = Product::all();
      // dd($product);
      $product = DB::table('products')
              ->join('categories','categories.id','products.category_id')
              ->select('products.id','products.title','categories.name')
              ->get();
      return view('details',['products'=>$product]);
    }
}
