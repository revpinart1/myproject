<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
  public function Index(){
    return view('dashboard.index');
    // اذا برا نكتب فقط الاسم بس اذا كانت جوا ملف نكتب الملف 
  }  
}
