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
                                        <li><span class="bread-blod">All Courses</span>
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
    <div class="courses-area">
        <div class="container-fluid">
            <div class="row">
                @foreach ($course as $key => $data)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="{{asset('admin/img/courses/1.jpg')}}" alt=""></a>
                                <h2 class="text-center">{{$data->csname}}</h2>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Status:</b>&nbsp; {{$data->status}}</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b>&nbsp; {{$data ->lectid}}</p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Students Enrolled:</b>&nbsp;  100+</p>
                            </div>
                            <div class="product-buttons">
                            <a href="/courseinfo&{{$data->id}}"> <button type="button" class="button-default cart-btn"> Read More </button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection