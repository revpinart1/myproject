<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
  public function getProducts(){
    return view('products');
  }
  public function AboutUs(){
    return view('aboutus');
  }
  public function CallUs(){
    return view('calledus');
  }

}
