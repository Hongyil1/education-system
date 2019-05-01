<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function show(){

      $input = [];
      //
      // if($request->isMethod('get')){
      //   $name = $request->input('name');
      //   $age = $request->input('age');
      //   $input = ['name'=>$name, 'age'=>$age];
      // }

      // with(key, value)
      return view('test')->with('input', $input);
    }

    public function pass(Request $request){

      $name = $request->input('input_name');
      $age = $request->input('input_age');
      $input = ['name'=>$name, 'age'=>$age];
      // $input = ['name'=>'hjkljkll', 'age'=>'2423'];

      return view('test')->with('input', $input);
    }


}
