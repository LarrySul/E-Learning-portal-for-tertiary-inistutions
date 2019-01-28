<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Auth\Validator;
use App\Http\Requests\StudentRequest;
use DB;
use Session;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/home');
    }

    public function login(){
        return view('user/login');
    }

    public function create(StudentRequest $request)
    {    
        $user = Student::create([
            'fullname' => $request['fullname'], 'email' => $request['email'], 'matric' => $request['matric'],
            'department' => $request['department'],'level' => $request['level'], 'learn' => $request['learn']
        ]);
        
        if($user){
           $student = session(['matric' => $user->matric]);
            return response()->json([
              'success' => 'Yo! registeration succesful !',
              'student' => $student
		    ], 200);
        }else{
            return response()->json([
                'fail' => 'Registeration failed'
            ], 401);
        } 
    }

    public function signin(Request $request){
        $result = Student::where([
            ['email', $request->email],
            ['matric', $request->matric]
        ])->first();
        
        if($result){
           session(['matric' => $request->matric]);
            return response()->json([
                'success' => 'Login successful !',
                
            ], 200);
        }else{
            return response()->json([
                'fail' => 'Invalid credentials'
            ], 401);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('user/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student = Student::all();
        // return view('user/register');
    }

    public function blog(Student $student){
        return view('user/blog');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
