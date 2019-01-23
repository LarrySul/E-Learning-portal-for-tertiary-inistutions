<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Auth\Validator;
use Auth;
use Session;

class DepartmentController extends Controller
{
    public function create()
    {
        if(Auth::check()){
          return view('admin/department/all');  
        }else{
            return redirect('admin/index');
        }   
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request, [
                'deptname'=>'required|numeric|max:2',
                'hod'=>'required|string',
                'email'=>'required|email |unique:departments',
                'no_courses'=>'required|numeric',
                'status'=>'required|string', 
                'no_students'=>'required|numeric'
            ]);

            $department = Department::create([
                'deptname' => $request['deptname'],
                'hod' => $request['hod'],
                'email' => $request['email'],
                'no_courses' => $request['no_courses'],
                'status' => $request['status'],
                'no_students' => $request['no_students']
            ]);

            session()->flash('notify', 'Successfully registered department');
            return redirect('/department');
        }else{
            return redirect('admin/index');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        $departments = Department::all();
        return view('admin.department.all', ['department'=> $departments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    public function destroy(Request $request)
    {   
        if(Auth::check()){
           $deptid= $request->deptid;
            $department = Department::where('deptid', '=', $deptid)->delete();
            session()->flash('delete', 'Successfully Deleted');
            return redirect('/department');
        }else{
            return redirect('admin/index');
        }
        
    }
}
