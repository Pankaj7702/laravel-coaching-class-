<?php

namespace App\Http\Controllers;  
use App\Models\Course;
use App\Models\Registration;
use Illuminate\Http\Request;  

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }


    public function dashboard()
    {
        $totalStudents = Registration::count();
        $totalCourses = Course::count();
       
    
        return view('dashboard', compact('totalStudents', 'totalCourses'));
    }

   public function  addCourse(){
    $courses = Course::all();
    return view('admin/adminadd.addcourse',compact('courses'));
   }

   public function store(Request $request)
   {
       $request->validate([
           'name' => 'required|string|max:255',
           'fees' => 'required|numeric',
           'duration' => 'required|string',
       ]);
       $store = $request->all();
       Course::create($store);

       return redirect()->route('add-course')->with('success', 'Course added successfully.');
   }

   public function getCourses()
   {    
       return response()->json(Course::all());
   }
   
    public function showCourse(){
        // $courses = Course::select(
        //     'name', 
        //     'fees', 
        // 'duration',
        // )->get();    
        $courses = Course::all();
        return view('admin/adminadd.showcourse',compact('courses'));
    }

    public function manageStudents(){
        $registrations = Registration::with('course')->get();
        return view('admin/adminadd/admininclude/adminlayout/adminmanage.managestudents',compact('registrations'));
    }


    public function editCourse($id)
    {
        $course = Course::find($id);
        return view('admin/adminadd.editcourse', compact('course'));
    }


    public function updateCourse(Request $request,$id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'fees' => 'required|numeric',
        //     'duration' => 'required|string|max:255',
        // ]);

        // $course->update([
        //     'name' => $request->name,
        //     'fees' => $request->fees,
        //     'duration' => $request->duration,
        // ]);

        $course = Course::find($id);
        $course->update($request->only(['name', 'fees', 'duration']));

        return redirect()->route('show-course')->with('success', 'Course updated successfully');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('show-course')->with('success', 'Course deleted successfully');
    }
}

