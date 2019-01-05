@extends('layouts.admin.dashboard')
@include('layouts.admin.sidebar')
@include('layouts.admin.header')
@section('content')
<div class="all-content-wrapper">
    <div class="header-advance-area">
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">All Students</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="student-inner-std res-mg-b-30">
                        <div class="student-img">
                            <img src="{{asset('admin/img/student/1.jpg')}}" alt="" />
                        </div>
                        <div class="student-dtl">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Alexam Angles</h2>
                                </div>
                                <div class="col-md-6">
                                    <span> <a href="#"><i class="fa fa-edit fa-2x"></i></a></span>
                                </div>
                            </div>
                            <p class="dp">Computer Science</p>
                            <p class="dp-ag"><b>Age:</b> 20 Years</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection