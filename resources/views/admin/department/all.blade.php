@extends('layouts.admin.dashboard')
@include('layouts.admin.sidebar')
@include('layouts.admin.header')
@section('content')
<style>
.close{
    color: #fff;
}
.alert-danger{
    color:red;
}
</style>
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
                                        <li><span class="bread-blod">Departments</span>
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
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @if(count($errors)>0)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="alert alert-danger close" data-dismiss="alert" aria-label="Close" style="list-style: none;">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                @if(session()->has('notify'))
                    <div class="alert alert-success alert-dismissible col-md-3 pull-right" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session()->get('notify') }}
                    </div>
                @endif

                @if(session()->has('delete'))
                    <div class="alert alert-danger alert-dismissible col-md-3 pull-right" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session()->get('delete') }}
                    </div>
                @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap drp-lst">
                        <h4>Departments List</h4>
                        <div class="add-product">
                            <a href="#" data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add Departments</a>
                        </div>
                        <div class="asset-inner">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Name of Dept.</th>
                                    <th>Status</th>
                                    <th>Head</th>
                                    <th>Email</th>
                                    <th>Registered courses</th>
                                    <th>No. of Students</th>
                                </tr>
                                @foreach($department as $key => $data)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$data->deptname}}</td>
                                    <td>
                                        <button class="pd-setting">{{$data->status}}</button>
                                    </td>
                                    <td>{{$data->hod}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->no_courses}}</td>
                                    <td>{{$data->no_students}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div id="PrimaryModalhdbgcl" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header header-color-modal bg-color-1">
                                    <h4 class="modal-title">Add Department</h4>
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <form  action="/department" method="POST">
                                        <div class="row">
                                        @csrf
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="deptname" type="text" class="form-control" placeholder="Department Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <input name="hod" type="text" class="form-control" placeholder="Head of Department" required>
                                                </div>
                                                <div class="form-group">
                                                    <input name="email" type="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input name="no_courses" type="number" class="form-control" placeholder="Course offered" required>
                                                </div>
                                                <div class="form-group">
                                                    <input name="no_students" type="number" class="form-control" placeholder="No. of Students" required>
                                                </div>
                                                <div class="form-group">
                                                    <select name="status" class="form-control" required>
                                                    <option value>-Select Status-</option>
                                                        <option value="Inactive">Inactive</option>
                                                        <option value="Active">Active</option>
                                                    </select> 
                                                </div>
                                            </div>
                                        </div>   
                                        <div class="modal-footer">
                                            <button data-dismiss="modal" class="btn btn-danger">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </div>
                                    </form>
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