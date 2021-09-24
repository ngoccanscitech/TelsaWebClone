<template>
 <v-container fluid>
      <v-form
    ref="form"
  >
    <v-text-field
      :counter="35"
      label="Name"
      required
      dark
      v-model="name"
    ></v-text-field>

    <v-text-field
      label="Order"
      required
      dark
      v-model="order"
    ></v-text-field>
    <v-row>
      <font-awesome-icon icon="camera" class="white--text mt-4 ml-2" style="font-size:30px;margin-right:-20px"/>
      <v-file-input
       label="Image"
       dark
       show-size
       v-model="image"
       ></v-file-input>
    </v-row>
    <v-btn
      color="success"
      class="mr-4"
      @click="submitForm()"
    >
      Submit
    </v-btn>

  </v-form>
 </v-container>
</template>

<script>
import axios from 'axios'
  export default {
   data: function () {
     return {
       name: "",
       order: null,
       image: null
     };
   },
    methods: {
      submitForm() {
        let formData = new FormData();
        formData.append('name', this.name);
        formData.append('order', this.order);
        formData.append('image', this.image);
        axios.post('http://127.0.0.1:8000/api/add/category',
         formData,
         {headers: {"Content-Type": "multipart/form-data"}}).then(response => {
            console.log(response.data.category)
            this.$router.push('/admin/categories')
        }).catch(function(error){
          console.log(error.response.data)
        })
      }
    },
  }
</script>
<style lang="">
    
</style>