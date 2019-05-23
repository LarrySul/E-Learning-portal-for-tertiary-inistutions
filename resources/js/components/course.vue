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
                                    <li> You are logged in as &nbsp; <span class="h6" style="color:#000" ></span> <b style="text-transform:uppercase">{{user.firstname}}</b></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="breadcrumbs">
                                <ul >
                                    <form action="" method="post" @submit.prevent="logout">
                                       <li class="pull-right mr-3"><button type="submit" class="btn btn-danger btn-sm">Logout</button></li> 
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
                                    <select id="courses_search_select" class="courses_search_select courses_search_input" >
                                        <option>All Categories</option>
                                        <option v-bind:key="d.id" v-for="d in dept">{{d.deptname}}</option>
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
                                                <source type="video/mp4" :src="'https://www.youtube.com/watch?' + t.url">
                                            </video>
                                        </div>
                                        <div class="course_body">
                                            <h3 class="course_title"><a href="">{{t.csname}}</a></h3>
                                            <div class="course_teacher"><h5>Course Code</h5>{{t.cscode}}</div>
                                            <div class="course_teacher"><h5>Lecturer</h5> {{t.fullname}}</div>
                                            <div class="course_teacher"><h5>YouTube Resource</h5></div>
                                            <div class="course_teacher"><a :href="'https://www.youtube.com/watch?' + t.url" target="tab">{{t.url}}</a> </div>

                                        </div>
                                        <div class="course_footer">
                                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                                <div class="course_info">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                    <span>{{t.level}}L</span>
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
                                <div class="sidebar_categories" v-bind:key="d.id" v-for="d in dept">
                                    <ul>
                                        <li><a href="#">{{d.deptname}}</a></li>
                                    </ul>
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
                dept: [],
                searchResult:[],
                msg: false,
                search: '',
                firstname: ''
            }
        },
        created(){ 
            let token = localStorage.getItem('token', token);
            axios.get('/allcourse?token=' + token).then(response=>{
                this.tuts = response.data;
            }, error =>{
                console.error(error)
            });
        },
        beforeMount(){
            let token = localStorage.getItem('token');
            axios.get('/departmentList?token=' + token).then(response=>{
                this.dept = response.data.result;
            }, error =>{
                console.error(error)
            })
        },
        mounted(){
            let token = localStorage.getItem('token');
            axios.get('/loggedUser?token=' + token).then(response=>{
                this.user = response.data.result;
            }, error =>{
                console.error(error)
            }),
            
            this.searchTuts();
        },
        methods:{
            logout(){
                let token = localStorage.getItem('token');
                axios.post('/logout?token=' + token).then(response=>{
                    localStorage.removeItem('token', token);
                    this.msg = response.data.success;
                    this.$toaster.success(this.msg);
                    window.location="/";
                }).catch(error =>{
                    this.$toaster.error(error);
                    window.location="/";
                })
            },
            searchTuts(){
                let token = localStorage.getItem('token');
                axios.get('/searchquery?search'+ this.search + token).then(response=>{
                        this.searchResult = response.data.search;
                        console.log(his.searchResult)
                    }, error =>{
                        console.error(error)
                })
            }
        }

    }
</script>