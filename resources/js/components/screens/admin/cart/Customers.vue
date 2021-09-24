<template>
  <v-simple-table dark>
    <template v-slot:default>
      <thead>
        <tr>
           <th class="text-center">
            Name
          </th>
          <th class="text-center">
            Phone
          </th>
           <th class="text-center">
            Address
          </th>
          <th class="text-center">
            Email
          </th>
           <th class="text-center">
            View
          </th>
           <th class="text-center">
            Delete
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="customer in customers"
          :key="customer.name"
        >
          <td class="text-center">{{ customer.name }}</td>
           <td class="text-center">{{ customer.phone }}</td>
          <td class="text-center">{{ customer.address }}</td>
          <td class="text-center">{{ customer.email }}</td>
           
          
          <td class="text-center"> 
            <v-btn
              class="mx-2"
              fab
              dark
              large
              color="cyan"
              @click="() => $router.push({ name: 'CustomerDetail', params: { customer } })"
              >
      <font-awesome-icon icon="eye" />
    </v-btn></td>
          <td class="text-center">
            <v-btn
              class="mx-2"
              fab
              dark
              large
              color="red"
              @click="deleteproduct(product.id)"
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
export default {
    data: function(){
        return {
            customers: []
        }
    },
    methods:{
        getCustomers () {
            axios.get('http://127.0.0.1:8000/api/customers').then(response => {
              if(response.status >= 200 && response.status < 300){
                 this.customers = response.data.customers
              }
            })
        }
    },
    mounted(){
        this.getCustomers();
    }
}
</script>
<style>

</style>
