<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Auth\Validator;
use Auth;
use Session;

class CourseController extends Controller
{
    public function create()
    {   
        if (Auth::check()) {
            return view('admin.course.add');
        }else{
            return redirect('admin/index');
        }
    }

    public function store(Request $request)
    {   
        if (Auth::check()) {
            $this->validate($request, [ 
                'csname' => 'required| string',
                'cscode' => 'required | string',
                'status' => 'required| string',
                'description' => 'required| string',
                'level' => 'required| string',
                'deptid' => 'required| numeric',
                'lectid'=> 'required| numeric',
                'url'=> 'required| string'
            ]);

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
        }else{
            return redirect('admin/index');
        }
    }

    public function show(Course $course)
    {   
        if (Auth::check()) {
            $course = Course::all();
            return view('admin.course.all', ['course' => $course]);
        }else{
            return redirect('admin/index');
        }
    }

    public function edit(Course $course, $id)
    {   
        if (Auth::check()) {
            $course = Course::find($id);
            return view('admin/course/info',['course' => $course]);
        }else{
            return redirect('admin/index');
        }
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
