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
                                            <input type="text" required placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Add Courses</span>
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
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Courses Details</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @if(Session::has('flash_message'))
                                            <div class="alert alert-success alert-dismissible col-md-3 pull-right" role="alert" >
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                {{ Session::get('flash_message') }}
                                            </div>
                                        @endif
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                <form action="/addcourse" method="POST" class="dropzone dropzone-custom needsclick addcourse">
                                                @csrf
                                                    <div class="row"> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="csname" type="text" class="form-control" required placeholder="Course Name">
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="cscode" type="text" class="form-control" required placeholder="Course code">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="status" class="form-control">
                                                                    <option value="">- Select Course Status-</option>
                                                                    <option value="Available">Available</option>
                                                                    <option value="Not available">Not available</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="deptid" class="form-control">
                                                                    <option value="" >- Select Department-</option>
                                                                    <option value="1">Mathematics</option>
                                                                    <option value="2">Computer Science</option>
                                                                    <option value="3">Physics</option>
                                                                    <option value="4">Chemistry</option>
                                                                    <option value="5">Biology</option>
                                                                    <option value="6">Agricultural Science</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="level" class="form-control">
                                                                    <option value="">-Select Level-</option>
                                                                    <option value="100">100L</option>
                                                                    <option value="200">200L</option>
                                                                    <option value="300">300L</option>
                                                                    <option value="400">400L</option>
                                                                    <option value="500">500L</option>
                                                                    <option value="Extra year">Extra Year</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="lectid" class="form-control">
                                                                    <option value="">- Select Lecturer -</option>
                                                                    <option value="1">Mr Adenubi</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <textarea name="description" required placeholder="Description"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="url" type="url" class="form-control" required placeholder="Url of course">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 text-center">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @if(count($errors)>0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                <li class="alert close " data-dismiss="alert" aria-label="Close" style="color:#D80027;list-style: none">{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        @endif
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