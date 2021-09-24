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
     <v-select
          v-model="category"
          return-object
          :items="categories"
          item-text="name"
          label="Outlined style"
          outlined
          dark
        ></v-select>
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
    data () {
        return {
            name: '',
            description: '',
            price: null,
            image: null,
            categories: [],
            category: ''
        }
    },
    methods: {
         submitForm() {
        let formData = new FormData();
        formData.append('name', this.name);
        formData.append('description', this.description);
        formData.append('price', this.price);
        formData.append('image', this.image);
        formData.append('category_id', this.category.id)

        axios.post('http://127.0.0.1:8000/api/add/product',
         formData,
         {headers: {"Content-Type": "multipart/form-data"}}).then(response => {
            
            this.$router.push('/admin/products')
        }).catch(function(error){
        
        })
      },
      getCategories () {
        axios.get('http://127.0.0.1:8000/api/categories').then(response => {
          if(response.status >= 200 && response.status < 300){
             var categoryArray = []
             response.data.categories.map(category => {
               categoryArray.push({name: category.name, id: category.id})
             })
             this.categories = categoryArray
          }
        })
      }
    },
    mounted() {
      this.getCategories()
    }
}
</script>
<style lang="">
    
</style>