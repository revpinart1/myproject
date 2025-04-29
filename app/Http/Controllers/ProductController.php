<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class ProductController extends Controller
{
    public function Index(){
        //عشان اعرض الفئات يلي موجوده في جدول الفئات واحطها في جدول المنتجات
       $categories=Categories::All();
       $products=Products::All();
        return view('products.index',['categories'=>$categories],['products'=>$products]);
    }
    public function Create(Request $request){
        $validate=$request->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required',
            'stock'=>'required',
            'categories_id'=>'required',
            'image'=>'nullable',


           ]);


        $arr=[
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'image'=>$request->image,
            'categories_id'=>$request->categories_id
            
        ];
        $items=Products::Create($arr);
        $items->save();
        return redirect()->route('products.index');
    }


public function Delete($id){
    $data= Products::find($id);
    if($data)
    {
        $data->delete();
    }
    return redirect()->route('products.index');
}

public function Edit($id){
    $data= Products::find($id);
       
    return view('products.edit',['products'=>$data]);
}
public function Update(){
    
}
}
//,['categories'->$categories]
