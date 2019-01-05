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
                                        <li><span class="bread-blod">All Professors</span>
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
                    <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <img alt="logo" class="img-circle m-b" src="{{ asset ('admin/img/contact/3.jpg') }}">
                            <h3><a href="">Fox Well</a></h3>
                            <p class="all-pro-ad">California, LA</p>
                            <p>
                                Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds">
                                    <div class="contact-stat"><a href="/profile"> <span> View Lecturer's Profile </span> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <img alt="logo" class="img-circle m-b" src="{{ asset ('admin/img/contact/1.jpg') }}">
                            <h3><a href="">Drom Simson</a></h3>
                            <p class="all-pro-ad">Austrolia, LA</p>
                            <p>
                                Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds">
                                    <div class="contact-stat"><a href="/profile"> <span> View Lecturer's Profile </span> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <img alt="logo" class="img-circle m-b" src="{{ asset ('admin/img/contact/2.jpg') }}">
                            <h3><a href="">Sima son</a></h3>
                            <p class="all-pro-ad">Suiden, Cro</p>
                            <p>
                                Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds">
                                   <div class="contact-stat"><a href="/profile"> <span> View Lecturer's Profile </span> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="hpanel hblue contact-panel contact-panel-cs mg-t-30">
                        <div class="panel-body custom-panel-jw">
                            <div class="social-media-in">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <img alt="logo" class="img-circle m-b" src="{{ asset ('admin/img/contact/3.jpg') }}">
                            <h3><a href="">Drama Son</a></h3>
                            <p class="all-pro-ad">USA, LA</p>
                            <p>
                                Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.
                            </p>
                        </div>
                        <div class="panel-footer contact-footer">
                            <div class="professor-stds-int">
                                <div class="professor-stds">
                                   <div class="contact-stat"><a href="/profile"> <span> View Lecturer's Profile </span> </a></div>
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