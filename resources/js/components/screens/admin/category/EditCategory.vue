<template lang="">
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
      @click="submitForm(category.id)"
    >
      Submit
    </v-btn>

  </v-form>
 </v-container>
</template>
<script>
import axios from 'axios'
export default {
    props: ['category'],
    data: function () {
        return {
            name: this.category.name,
            order: this.category.order,
            image: null
        }
    },
    methods: {
        submitForm(id){
             let formData = new FormData();
            this.name && formData.append('name', this.name);
            this.order && formData.append('order', this.order);
            this.image && formData.append('image', this.image);
            axios.post('http://127.0.0.1:8000/api/update/category/' + id,
            formData,
            {headers: {"Content-Type": "multipart/form-data"}}).then(response => {
                if(response.status >= 200 && response.status < 300){
                     alert(response.data.message)
                     this.$router.push('/admin/categories')
                }
            })
        }
    }
}
</script>
<style lang="">
    
</style>