<template>
    <div class="container">
        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Registeration</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>			
        </div>

        <!-- About -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="section_title">Welcome To Unicat E-Learning</h2>
                            <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu Vestibulum</p></div>
                        </div>
                    </div>
                </div>
                <div class="row about_row">
                    
                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_left">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_1.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Stories</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_middle">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_2.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Mission</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_right">
                        <div class="about_item">
                            <div class="about_item_image"><img src="images/about_3.jpg" alt=""></div>
                            <div class="about_item_title"><a href="#">Our Vision</a></div>
                            <div class="about_item_text">
                                <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim en consectet adipisi elit, sed do consectet adipisi elit, sed doadesg.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Counter -->
        <div class="counter">
            <div class="counter_background" style="background-image:url(images/counter_background.jpg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counter_content">
                            <h2 class="counter_title">Register Now</h2>
                            <div class="counter_text"><p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dumy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>

                            <!-- Milestones -->

                            <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
                                
                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="15">0</div>
                                    <div class="milestone_text">years</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>
                                    <div class="milestone_text">years</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="670" data-sign-after="+">0</div>
                                    <div class="milestone_text">years</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="320">0</div>
                                    <div class="milestone_text">years</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="counter_form">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            <form class="counter_form_content d-flex flex-column align-items-center justify-content-center" novalidate="true" method=
                            "POST"  autocomplete="off" @submit.prevent="registerUser">
                                <div class="counter_form_title mt-4">Register Here</div>
                                <input type="text" class="counter_input" name="firstname" v-model="register.firstname" v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('firstname') }" placeholder="firstname" required>
                                <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('firstname') }}</span>

                                <input type="text" class="counter_input" name="lastname" v-model="register.lastname" v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('lastname') }" placeholder="lastname" required>
                                <span v-show="errors.has('lastname')" class="help is-danger">{{ errors.first('lastname') }}</span>
                                
                                <input type="text" class="counter_input" name="matric"  v-model="register.matric" v-validate="{required : true, regex: /^([0-9]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('matric') }" placeholder="Matriculation Number" required>
                                <span v-show="errors.has('matric')" class="help is-danger">{{ errors.first('matric') }}</span>
                          
                                <input type="text" class="counter_input" name="department"  v-model="register.department" v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('department') }" placeholder="Department" required>
                                <span v-show="errors.has('department')" class="help is-danger">{{ errors.first('department') }}</span>

                                <select name="level" id="counter_select" class="counter_input counter_options" v-model="register.level" v-validate="{required : true, regex: /^([A-Z a-z 0-9]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('level') }">
                                    <option value="">-Choose Level-</option>
                                    <option value="100"> 100L </option>
                                    <option value="200"> 200L</option>
                                    <option value="300"> 300L </option>
                                    <option value="400"> 400L</option>
                                    <option value="500"> 500L</option>
                                    <option value="Extra Year"> Extra Year</option>
                                </select>
                                <span v-show="errors.has('level')" class="help is-danger">{{ errors.first('level') }}</span>

                                <input type="email" class="counter_input" name="email"  v-model="register.email"  v-validate="{required : true, min:3}" :class="{'input': true, 'is-danger': errors.has('email') }" placeholder="Email Adress" required>
                                <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                                
                                <input type="password" class="counter_input" name="password"  v-model="register.password"  v-validate="{required : true, min:3}" :class="{'input': true, 'is-danger': errors.has('password') }" placeholder="Password" required>
                                <span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>

                                
                                <input type="submit" class="counter_form_button mb-2" value="Register">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
Vue.use(VToaster, {timeout: 7000})
export default {
    data() {
        return{
            msg: false,
            register:{
                firstname: '',
                lastname: '',
                email: '',
                matric: '',
                department: '',
                level:'',
                password: ''
            }
        }
    },
    methods:{
        registerUser(){
            let module = this;
            this.$validator.validateAll().then(result => {
				if (result) {
					axios.post('/register', this.register)
					.then(response => {
                        let token = response.data.access_token;
                        localStorage.setItem('token', token);
                        this.msg = response.data.success;
                        this.$toaster.info(this.msg);
                        this.$router.push('course');
					})
					.catch(error => {
                        this.msg = error.response.data.fail;
                        this.$toaster.warning('Error in registeration');
                        this.$router.push('/');
                        
					});
				}
			})  
        }
    }
    
}
</script>

