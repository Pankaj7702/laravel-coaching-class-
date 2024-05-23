<?php

namespace App\Http\Controllers;  
use App\Models\Course;
use App\Models\Registration;
use Illuminate\Http\Request;  

class UserrController extends Controller
{
    public function home(){
        return view('include.home');
    }

   public function registration(){
    $courses = Course::all();
    
    return view('include.registration',compact('courses'));
   }


   public function register(Request $request)
    {
        $request->validate([
            'studentName' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'gender' => 'required|string|max:10',
            'course' => 'required|exists:courses,id',
            'fees' => 'required|numeric',
            'duration' => 'required|string|max:255',
        ]);

        Registration::create([
            'student_name' => $request->studentName,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'gender' => $request->gender,
            'course_id' => $request->course,
            'fees' => $request->fees,
            'duration' => $request->duration,
        ]);
        // unset($request['_token']);
        return redirect()->route('user-register')->with('success', 'Registration successful.');
    }
}

