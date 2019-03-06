<template>
    <div class="container">
        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Login</li>
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
                            <h2 class="section_title">{{header}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row about_row">
                    
                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_left"></div>

                    <!-- About Item -->
                    <div class="col-lg-4 text-center">
                        <form method="POST" @submit.prevent="loginUser" autocomplete="on">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  placeholder="Email Address" v-model="login.email"  v-validate="{required : true, min:3}" :class="{'input': true, 'is-danger': errors.has('email') }">
                                <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>

                            </div>
                            <div class="form-group">
                                <input type="text" name="matric" class="form-control"  placeholder="Matriculation Number" v-model="login.matric" v-validate="{required : true, regex: /^([0-9]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('matric') }">
                                <span v-show="errors.has('matric')" class="help is-danger">{{ errors.first('matric') }}</span>
                            </div>

                            <input type="submit" class="btn btn-primary" value="Login">
                        </form>
                    </div>

                    <!-- About Item -->
                    <div class="col-lg-4 about_col about_col_right"></div>

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
            header: 'Login Here',
            msg:false,
            
            login:{
                email: null,
                matric: null
            }
        }
    },
    methods:{
        loginUser(){
            let module = this;
            this.$validator.validateAll().then(result => {
				if (result) {
					axios.post('/userlogin', this.login)
					.then(response => {
                        let token = response.data.token;
                        localStorage.setItem('token', token);
                        this.msg = response.data.success;
                        this.$toaster.info(this.msg);
                        // window.location="/course";
					})
					.catch(error => {
                        this.msg = error.response.data.fail;
                        this.$toaster.error(this.msg);
                        // window.location="/user";
					});
				}
			})  
        }
    }
    
}
</script>

