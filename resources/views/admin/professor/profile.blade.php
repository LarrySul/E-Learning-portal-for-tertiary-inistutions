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
                                        <li><span class="bread-blod">Professor Profile</span>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="profile-info-inner">
                        <div class="profile-img">
                            <img src="admin/upload/lecturer/{{$lecturer->img}}" alt="" height="20%"/>
                        </div>
                        <div class="profile-details-hr">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Name</b><br /> {{$lecturer->fullname}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Assigned Department</b><br /> {{$lecturer->department}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><b>Phone</b><br /> {{$lecturer->mobileno}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><b>Address</b><br /> {{$lecturer->address}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li><a href="#INFORMATION">Update Details</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <form action="/update" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="fullname" type="text" class="form-control" value="{{$lecturer->fullname}}" required placeholder="Full Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="address" type="text" class="form-control" value="{{$lecturer->address}}" required placeholder="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="mobileno" type="number" class="form-control" value="{{$lecturer->mobileno}}" required placeholder="Mobile no.">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="dob" type="date" class="form-control" value="{{$lecturer->dob}}" required placeholder="Date of Birth">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" name="img" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="department" type="text" class="form-control" value="{{$lecturer->department}}" required placeholder="Department">
                                                        </div>
            
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group res-mg-t-15">
                                                            <textarea name="description" required placeholder="Description">{{$lecturer->description}}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="gender" class="form-control">
                                                                <option value="none" selected="" disabled="">{{$lecturer->gender}}</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="country" class="form-control">
                                                                <option value="{{$lecturer->country}}">{{$lecturer->country}}</option>
                                                                <option value="Nigeria">Nigeria</option>
                                                                <option value="Ghana">Ghana</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="state" class="form-control">
                                                                <option value="{{$lecturer->state}}">{{$lecturer->state}}</option>
                                                                <option value="Abia">Abia</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Akwa-Ibom">Akwa-Ibom</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 text-center">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab to return error msg -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if(count($errors)>0)
                            <ul>
                                @foreach($errors->all() as $error)
                                <li class="alert close " data-dismiss="alert" aria-label="Close" style="color: red;list-style: none">{{$error}}</li>
                                @endforeach
                            </ul>
                            @endif
			            </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
