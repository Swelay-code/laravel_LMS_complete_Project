<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function students(Request $request){
        
        if($request->has('profileimg')){
            $file = $request->file('profileimg');
            $extension = $file->getClientOriginalExtension();
            $path='storage/';
            $filename = time().'.'.$extension;
            $file->move($path,$filename);
        }
        
        Students::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'age'=> $request->age,
            'gender'=> $request->gender,
            'guardian'=> $request->guardianname,
            'phoneno'=> $request->phoneno,
            'course'=> $request->course,
            'profileimg'=> $filename,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        //use for students login
        //auth()->login($student);
        
        return redirect('/welcome');
    }
}
