<template>
    <!-- Courses -->
    <div class="container">
        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcrumbs">
                                <ul >
                                    <li><a href="/">Home</a></li>
                                    <li> You are logged in as &nbsp; <span class="h6" style="color:#000" >{{user.matric}}</span> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="breadcrumbs">
                                <ul >
                                    <form action="" method="post" @submit.prevent="logout">
                                       <li class="pull-right mr-3"><button type="submit" class="btn btn-default btn-sm">Logout</button></li> 
                                    </form>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>			
        </div>

        <div class="courses">
            <div class="container">
                <div class="row">

                    <!-- Courses Main Content -->
                    <div class="col-lg-8">
                        <!-- <div class="courses_search_container"> -->
                            <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                                <input type="search" class="courses_search_input" @keyup="searchTuts()" v-model="search" name="search" placeholder="Search Courses" required="required">
                                    <select id="courses_search_select" class="courses_search_select courses_search_input">
                                        <option>All Categories</option>
                                        <option>Category</option>
                                        <option>Category</option>
                                        <option>Category</option>
                                    </select>
                                <button action="submit" class="courses_search_button ml-auto">search now</button>
                            </form>
                        <!-- </div> -->
                        <div class="courses_container">
                            <div class="row courses_row">
                                <!-- Course -->
                                <div class="col-lg-6 course_col" v-bind:key="t.id" v-for="t in tuts.course">
                                    <div class="course">
                                        <div class="course_image">
                                            <video controls preload="none">
                                                <source :src="t.url" type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="course_body">
                                            <h3 class="course_title"><a href="">{{t.csname}}</a></h3>
                                            <div class="course_teacher">{{t.fullname}}</div>
                                            <div class="course_text">
                                                <p>{{t.description}}</p>
                                            </div>
                                        </div>
                                        <div class="course_footer">
                                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                <div class="course_info">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                    <span>{{t.level}}</span>
                                                </div>
                                                <div class="course_info">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span>{{t.no_students}}</span>
                                                </div>
                                                <div class="course_price ml-auto">{{t.status}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pagination_row">
                                <div class="col">
                                    <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                        <ul class="pagination_list">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="courses_show_container ml-auto clearfix">
                                            <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
                                            <div class="courses_show_content">
                                                <span>Show: </span>
                                                <select id="courses_show_select" class="courses_show_select">
                                                    <option>06</option>
                                                    <option>12</option>
                                                    <option>24</option>
                                                    <option>36</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Courses Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar">

                            <!-- Categories -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Categories</div>
                                <div class="sidebar_categories">
                                    <ul>
                                        <li><a href="#">Art & Design</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Programming</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="sidebar_section">
                                <div class="sidebar_section_title">Latest Courses</div>
                                <div class="sidebar_latest">

                                    <!-- Latest Course -->
                                    <div class="latest d-flex flex-row align-items-start justify-content-start">
                                        <div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
                                        <div class="latest_content">
                                            <div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
                                            <div class="latest_price">$220</div>
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
</template>
<script>
import axios from 'axios'
    export default {
        data(){
            return {
                tuts: [],
                user: [],
                searchResult:[],
                msg: false,
                search: '',
                matric: ''
            }
        },
        mounted(){ 
            axios.get('allcourse').then(response=>{
                this.tuts = response.data;
            }, error =>{
                console.error(error)
            })
        },
        created(){
            axios.get('/loggedUser').then(response=>{
                this.user = response.data[0];
            }, error =>{
                console.error(error)
            }),
            
            this.searchTuts();
        },
        methods:{
            logout(){
                axios.post('/logUser').then(response=>{
                    this.$toaster.success(this.msg);
                    window.location="/";
                }, error =>{
                    console.error(error)
                })
            },
            searchTuts(){
               axios.get('/searchquery?search='+ this.search).then(response=>{
                    this.searchResult = response.data
                }, error =>{
                    console.error(error)
                })
            }
        }

    }
</script>