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
    <v-textarea
          name="input-7-1"
          label="Description"
          value="Enter description..."
           v-model="description"
          required
        dark
        ></v-textarea>
     <v-text-field
      label="Price"
      required
      dark
      v-model="price"
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
      @click="submitForm(product.id)"
    >
      Submit
    </v-btn>

  </v-form>
 </v-container>
</template>
<script>
import axios from 'axios'
export default {
    props: ['product'],
    data: function () {
        return {
            name: this.product.name,
            description: this.product.description,
            price: this.product.price,
            image: null
        }
    },
    methods: {
        submitForm(id){
             let formData = new FormData();
            this.name && formData.append('name', this.name);
            this.description && formData.append('description', this.description);
            this.price && formData.append('price', this.price);
            this.image && formData.append('image', this.image);
            axios.post('http://127.0.0.1:8000/api/update/product/' + id,
            formData,
            {headers: {"Content-Type": "multipart/form-data"}}).then(response => {
                if(response.status >= 200 && response.status < 300){
                     alert(response.data.message)
                     this.$router.push('/admin/products')
                }
            })
        }
    }
}
</script>
<style lang="">
    
</style>