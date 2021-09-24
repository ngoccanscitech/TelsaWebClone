<template>
    <v-app style="background-color:black;height:100vh">
        <app-navigator v-if="authenticated"/>
        <client-navigator v-else />
        <router-view></router-view>
    </v-app>
</template>
<script>
import AppNavigator from './components/admin/AdminNavigator.vue'
import ClientNavigator from './components/client/ClientNavigator.vue'
import axios from 'axios'
import eventBus from './eventbus'
export default {
    components: { AppNavigator, ClientNavigator },
    data: function() {
        return {
            authenticated: false
        }
    },
    methods: {
        authCheck(){
             axios.get('http://localhost:8000/api/user').then(response => {

                 if(response.status >= 200 && response.status < 300){
                     this.authenticated = true
                 }
             }).catch(err => this.authenticated = false)
        }
    },
    mounted () {
        eventBus.$on('authCheck', (payload)=>{
            this.authCheck()
        })
    }
}
</script>
<style>
    
</style>