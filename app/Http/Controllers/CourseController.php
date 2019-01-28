<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Auth\Validator;
use App\Http\Requests\CourseRequest;
use Auth;
use Session;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {   
        return view('admin.course.add');
    }

    public function store(CourseRequest $request)
    {   
        $course = Course::create([
            'csname' => $request['csname'],
            'cscode' => $request['cscode'],
            'status' => $request['status'],
            'description' => $request['description'],
            'level' => $request['level'],
            'deptid' => $request['deptid'],
            'lectid' => $request['lectid'],
            'url' => $request['url']
        ]);
        Session::flash('flash_message', 'Successfully registered course');
        return redirect('/admincourse');
    }

    public function show(Course $course)
    {   
        $course = Course::all();
        return view('admin.course.all', ['course' => $course]);
    }

    public function edit(Course $course, $id)
    {   
        $course = Course::find($id);
        return view('admin/course/info',['course' => $course]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
