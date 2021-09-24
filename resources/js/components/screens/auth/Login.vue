<template>
    <div class="pa-0" style="max-height:100vh;overflow:hidden;background-color:white">
        <v-img src="/assets/bg-login.jpg" height="350px" width="100vw"></v-img>
        <v-card class="mx-auto elevation-5 text-center pa-5"
        max-width="350" style="border-radius:20px;position:relative;top:-100px"
        >
       
            <v-card-subtitle class="title black--text pa-1">
                Login Now
            </v-card-subtitle>
            <v-card-subtitle class="pa-1"></v-card-subtitle>
            <v-text-field color="back" label="Username" v-model="form.email">
            </v-text-field>
            <v-text-field color="back" label="Password" type="password" v-model="form.password">
            </v-text-field>
            <v-card-actions>
                <v-btn color="black" dark block rounded @click="handleLogin()">Login</v-btn>
            </v-card-actions>
        </v-card>
    </div>
</template>
<script>
import axios from 'axios';
import eventBus from '../../../eventbus'
// axios.defaults.headers.common['Authorization'] = store.getState().session.token;
export default {
    data: function() {
        return {
            form:{
                email: '',
                password: '',
                device_name: 'browser'
            }
        }
    },
    methods: {
        handleLogin(){
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('http://localhost:8000/admin/login', this.form).then(response => {
                    axios.defaults.headers.common['Authorization'] = 'Bearer ' + response.data.access_token;
            axios.get('http://localhost:8000/api/user').then(response => {
                       if(response.status >= 200 && response.status < 300){
                           if(this.form.email === response.data.email){
                               eventBus.$emit('authCheck')
                                this.$router.push('/admin/categories')
                           }
                       }
                   })
                })
            })
        }
    }
}
</script>
<style>

</style>
