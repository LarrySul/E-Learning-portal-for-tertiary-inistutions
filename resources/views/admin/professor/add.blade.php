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
                                        <li><span class="bread-blod">Add Professors</span>
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
   
   <!-- Single pro tab review Start-->
   <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Basic Information</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success alert-dismissible col-md-3 pull-right" role="alert" >
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            {{ Session::get('flash_message') }}
                                        </div>
                                    @endif
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="/addprofessor" method="POST" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="fullname" type="text" class="form-control" required placeholder="Full Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="address" type="text" class="form-control" required placeholder="Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="mobileno" type="number" class="form-control" required placeholder="Mobile no.">
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dob" type="date" class="form-control" required placeholder="Date of Birth">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="file" name="img" class="form-control" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="department" type="text" class="form-control" required placeholder="Department">
                                                            </div>
                
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group res-mg-t-15">
                                                                <textarea name="description" required placeholder="Description"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select Gender</option>
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="country" class="form-control">
                                                                        <option value="none" selected="" disabled="">Select country</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                    </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="state" class="form-control">
                                                                    <option value="none" selected="" disabled="">Select state</option>
                                                                    <option value="1">Abia</option>
                                                                    <option value="2">Adamawa</option>
                                                                    <option value="3">Akwa-Ibom</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
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