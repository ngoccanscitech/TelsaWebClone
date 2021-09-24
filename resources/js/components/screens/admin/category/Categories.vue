<template>
  <v-simple-table dark>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-center">
            Image
          </th>
          <th class="text-center">
            Name
          </th>
           <th class="text-center">
            Order
          </th>
           <th class="text-center">
            Edit
          </th>
           <th class="text-center">
            Delete
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="category in categories"
          :key="category.name"
        >
          <td class="text-center">
            <div v-if="category.image">
              <img :src="url+'/storage/uploads/'+category.image" style="heigt:100px;width:100px" alt="Error">
            </div>
            <div v-else>
              <img :src="url+'/storage/uploads/Tesla_T_symbol.svg.png'" style="heigt:100px;width:100px" alt="Image">
            </div>
          </td>
          <td class="text-center">{{ category.name }}</td>
          <td class="text-center">{{ category.order }}</td>
          <td class="text-center"> 
            <v-btn
              class="mx-2"
              fab
              dark
              large
              color="cyan"
              @click="() => $router.push({ name: 'EditCategory', params: { category } })"
              >
      <font-awesome-icon icon="pen" />
    </v-btn></td>
          <td class="text-center">
            <v-btn
              class="mx-2"
              fab
              dark
              large
              color="red"
              @click="deleteCategory(category.id)"
              >
      <font-awesome-icon  icon="trash" />
    </v-btn>
          </td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>
<script>
import axios from 'axios'
  export default {
    data () {
      return {
       categories: [],
       url: window.location.origin
      }
    },
    methods: {
        getCategories () {
            axios.get('http://127.0.0.1:8000/api/categories').then(response => {
              if(response.status >= 200 && response.status < 300){
                 this.categories = response.data.categories
              }
            })
        },
        deleteCategory (id) {
          axios.get('http://127.0.0.1:8000/api/delete/category/'+id).then(response => {
            if(response.status >= 200 && response.status < 300){
              alert(response.data.message)
              this.getCategories()
            }
          })
        }
    },
    mounted () {
        this.getCategories()
    }
  }
</script>
<style lang="">
    
</style>