<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){

       $name = "Robin hood PanDay";
       $age  = 70;
       //return view('home',compact('name','age'));
//       return view('home')
//           ->with('name',$name)
//            ->with('age',$age);


       return view('home',[
            'name' => $name,
           'age' => $age
       ]);
   }



    public function add(){
        return 'hello about';
    }
}
