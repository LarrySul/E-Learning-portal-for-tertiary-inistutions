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
                                        <li><span class="bread-blod"></span>Course Info</span>
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
    <div class="blog-details-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#"><img src="{{asset('admin/img/blog-details/1.jpg')}}" alt="" />
                                            </a>
                                        <div class="blog-date" >
                                            <p style="line-height:1rem"><span class="blog-day" style="font-size:12px">{{$course->created_at->diffForHumans()}}</span></p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n text-center">
                                            <span><a href="#"><i class="fa fa-user"></i> <b>Course Name:</b> {{$course->csname}}</a></span>
                                            <span><a href="#"><i class="fa fa-heart"></i> <b>Department:</b>{{$course->deptid}}</a></span>
                                            <span><a href="#"><i class="fa fa-comments-o"></i> <b>Professor Name:</b> {{$course->lectid}}</a></span>
                                        </div>
                                        <h1 class="text-center">{{ ('Courses Description')}}</h1>
                                        <p>{{$course->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="comment-head">
                                    <h3>Comments</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="user-comment user-coment2">
                                    <img src="{{asset('admin/img/contact/3.jpg')}}" alt="" />
                                    <div class="comment-details">
                                        <h4>Jonathan Doe 2015 15 July</h4>
                                        <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson <span class="mobile-sm-d-n">ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection