<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function signup(Request $request){



    $name=$request->name;
    $surname=$request->surname;
    $age=$request->age;
    $email=$request->email;


    $trainee= new Trainee();

    $trainee->name=$name;
    $trainee->surname=$surname;
    $trainee->age=$age;
    $trainee->email=$email;



        $trainee->save();

    return redirect()->route('home')->with('success', 'Iscrizione completata!');


   }

   public function list(){

   $trainee= Trainee::all();

   return view('trainee.list',['trainee'=>$trainee]);
   }



}
