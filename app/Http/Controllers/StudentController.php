<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Auth\Validator;
use App\Http\Request\StudentRequest;
use Session;
use DB;
use JWTAuthException;
use JWTAuth;

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

   
    public function create(Request $request)
    {    
        $user = Student::create([
            'fullname' => $request['fullname'], 'email' => $request['email'], 'matric' => $request['matric'],
            'department' => $request['department'],'level' => $request['level'], 'learn' => $request['learn']
        ]);

        $token = JWTAUTH::fromUser($user);
        print_r($token); die;
        // if($user){
        //     // session(['matric' => $request->matric]);
        //     return response()->json([
        //       'success' => 'Yo! registeration succesful !',
        //       'student' => $user
		//     ], 200);
        // }else{
        //     return response()->json([
        //         'fail' => 'Registeration failed'
        //     ], 401);
        // } 
    }

    public function signin(Request $request){
        
        
        $credentials = $request->only('email','matric');
        $token = JWTAuth::attempt($credentials);

		if($token) {
            $users  = Student::where([
                    ['email', $request->email],
                    ['matric', $request->matric]
                    
                ])->first();
                session(['matric' => $request->matric]);
                return response()->json([
                    'success' => 'Login successful !',
                    'student' => $user
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

    public function loggedUser(Request $request, $matric, $column=['matric'])
    {
        $matric = Session::get('matric'); 
        $user = DB::table('students')->where('matric', $matric)->first();
        return response()->json([$user], 200);
    }

    public function logUser(Request $request)
    {   
        JWTAuth::invalidate();
        return response([
                'status' => 'success',
                'msg' => 'Logged out Successfully.'
            ], 200);
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
        return view('user/register');
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
    public function login(Student $student)
    {
        return view('user/login');
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
