<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth\Validator;
use Illuminate\Support\Facades\Auth;
use Image;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('admin/home');
    }

    public function index()
    {
        return view('admin/welcome');
    }
    
    public function store(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() .'.'. $avatar ->getClientOriginalExtension();
            Image::make($avatar)->resize(200, 200)->save(public_path('admin/upload/avatar/'. $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('admin/home', array('user' => Auth::user()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
