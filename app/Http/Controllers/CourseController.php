<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function index(){
        return view('course.index');
    }

    public function add(){
        $courses=course::all();
        return view('course.add', ['course'=>$courses]);
    }
    public function store(Request $request){

        $data = $request->validate([

            'course_code'=>'required',
            'course_name'=>'required',
            'unit_type'=>'required',
            'dp_id'=>'required',
            'description'=>'required']);



            $newCourse = course::create($data);
            return redirect(route ('course.add'))->with('success', 'Course Added successfuly');;
    }
    public function view(){
          $courses = course::all();
        return view('course.view', ['courses'=>$courses]);
    }

    public function edit(Course $course){
        return view('course.edit', ['course'=>$course]);
    }

     public function update(Course $course, Request $request){
        $data = $request->validate([
            'course_code'=>'required',
            'course_name'=>'required',
            'unit_type'=>'required',
            'dp_id'=>'required',
            'description'=>'required']);


           $course->update($data);
            /*success() carries a message("Course Updated successfuly") to the index page*/
            return redirect(route ('course.view'))->with('success', 'Course Updated successfuly');
}
}
