<?php

namespace App\Http\Controllers;

use App\Lecturer;
use Illuminate\Http\Request;
use Auth\Validator;
use Auth;
use Image;
use Session;

class LecturerController extends Controller
{
    
    public function index()
    {
        if (Auth::check()) {
            $lecturers = Lecturer::all();
		    return view('admin.professor.all', compact('lecturers'));
        }else {
            return redirect('/admin/index');
        }
    }


    public function create()
    {
        return view('admin/professor/add');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required |string',
            'address' => 'required |string',
            'mobileno' => 'required|numeric| unique:lecturers',
            'dob' => 'required | date',
            'department' => 'required |string',
            'description' => 'required |string| max:255',
            'img' => 'required|image',
            'gender' => 'required |string',
            'country'=> 'required |string',
            'state' => 'required |string',
        ]);
        
        $lecturer = $request ->file('img');
        $filename = $lecturer->getClientOriginalName();
        Image::make($lecturer)->resize(200, 200)->save(public_path('admin/upload/lecturer/'. $filename));
        

        $lecturer = new Lecturer();
        $lecturer -> fullname = $request -> fullname;
        $lecturer -> address = $request -> address;
        $lecturer -> mobileno = $request -> mobileno;
        $lecturer -> dob = $request -> dob;
        $lecturer -> department = $request -> department;
        $lecturer -> description = $request -> description;
        $lecturer -> img = $filename;
        $lecturer -> gender = $request -> gender;
        $lecturer -> country = $request -> country;
        $lecturer -> state = $request -> state;

        $lecturer ->save();
        Session::flash('flash_message', 'Lecturer successfully added!');
        return redirect('/home');

    }

    
    public function show(Lecturer $lecturer)
    {
        //
    }

    public function edit(Lecturer $lecturer, $id)
    {
        $lecturers = Lecturer::find($id);
        return view('admin/professor/profile', ['lecturer' => $lecturers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
