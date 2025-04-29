<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function Index()

      { 
        $get_items= Categories::All();
        return view('categories.index',['cate'=>$get_items]);
      }


      public function Create(Request $request)
      {
       
        $validate=$request->validate([
            'categ_name'=>'required|string|max:255',
            'categ_desc'=>'nullable|string|max:255'
           ]);
//الداله هذي رح تستقبل البيانات من الفورم تبع الفئات الجديده وتحفظه ولازم نضمن المودلز 
$arr=[
    'name'=>$request->categ_name,
    'description'=>$request->categ_desc
];
$items=Categories::Create($arr);// عشان تنحفظ البيانات يلي موجوده في اراي على جدول الفئات في الداتابيس
$items->save();

return redirect()->route('categories.index');
      }

      public function Delete($id){
        $data= Categories::find($id);
        if($data)
        {
            $data->delete();
        }
        return redirect()->route('categories.index');
      }

      public function Edit($id){
        $data= Categories::find($id);
       
        return view('categories.edit',compact('data'));
      }

      public function Update(Request $request, $id){
      
        $data= Categories::find($id);
        $data->name=$request->categ_name;
        $data->description= $request->categ_desc;
         $data->save();
        return redirect()->route('categories.index');
      }
}
