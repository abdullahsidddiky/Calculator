<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      return view("welcome");
    }
    public function calculate(Request $request){    //calculate funciton
        $validated = $request->validate([   //Validating Input Data
          'op1' => 'required',
          'op2' => 'required',
            ]);
          $res;
         if($request->operator == '+'){
           $res = (float)$request->op1+(float)$request->op2;

         }
         else if($request->operator == '-'){
           $res = (float)$request->op1-(float)$request->op2;

         }
         else if($request->operator == '*'){
           $res = (float)$request->op1*(float)$request->op2;

         }
         else if($request->operator == '/'){
           $res = (float)$request->op1/(float)$request->op2;

         }
         $res = json_encode($res); //converting data into json format
         return view('welcome',['res'=>$res]);
    }

}
