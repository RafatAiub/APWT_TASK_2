<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }


    public function Create(){
        return view('pages.persons.create');
    }
    public function createSubmit(Request $request){
        //using requests validate method
        $validate = $request->validate([
                'name'=>'required|min:5|max:10',
                'id'=>'required',
                'dob'=>'required',
                'email'=>'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 5 charcters'
            ]
        );
        return "OK";
    }
    public function list(){
        $persons = array();
        for($i=0;$i<10;$i++){
            $person=array(
                "name"=>"Student ".($i+1),
                "id" =>($i+1),
                "dob" =>"12.12.12"
            );
            $persons[] = (object)$person;
        }
        return view('pages.students.list')->with('students',$persons);
    }
    public function edit(Request $request){
        return $request->id;

    }
    //these are the functions called from web.php
    function login(){
        return view("login");
    }

    function contact(){
        return view("contact");
    }

    function registration(){
        return view("registration");
    }

    function register(Request $request){
        $output = "<h1> Most Welcome</h1>";
        $output = "<br>name::".$request->name;
        $output = "<br>id::".$request->id;
        $output = "<br>dob::".$request->dob;
        $output = "<br>email::".$request->email;
        $output = "<br>phone::".$request->phone;

        return $output;

    }
}
