<template>
    <div>
         <v-toolbar
      dark
      src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg"
        >
      <v-toolbar-title>Telsa Web APp</v-toolbar-title>
      <v-spacer></v-spacer>
       <v-btn class="mr-2"  @click="() => this.$router.push('/admin/customers')">List Customers</v-btn>
      <v-btn class="mr-2" @click="() => this.$router.push('/admin/addCategory')">Add Category</v-btn>
      <v-btn @click="() => this.$router.push('/admin/categories')">Category</v-btn>
      <v-btn class="ml-2"  @click="() => this.$router.push('/admin/products')">Product</v-btn>
      <v-btn class="ml-2"  @click="() => this.$router.push('/admin/addProduct')">Add Product</v-btn>
      <v-btn class="ml-2" fab dark medium color="red" @click="logout()">
        <font-awesome-icon icon="sign-out-alt" style="font-size:25px">
        </font-awesome-icon>
        </v-btn>
    </v-toolbar>
    </div>
</template>
<script>
import axios from 'axios'
import eventBus from '../../eventbus'
export default {
  methods: {
    logout() {
      axios.defaults.headers.common['Authorization'] = 
      axios.post('http://localhost:8000/admin/logout').then(response => {
        if(response.status >= 200 && response.status < 300){
          eventBus.$emit('authCheck')
          this.$router.push({name: 'Login'})
        }
      })
    }
  }
}
</script>
<style>

</style>
