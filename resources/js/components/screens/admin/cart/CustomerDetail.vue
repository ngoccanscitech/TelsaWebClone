<template>
        <div style="background-color:white;margin-top: 66px;height:100vh">
        <v-container>
            <p>SHOPPING CART</p>
            <v-row>

            <v-col :cols="12" md="3" sm="12" style="background-color:black;border-radius:7px">
                <p class="headline white--text">Order Summary</p>
                <p class="overline white--text">
                    The total costs for your order.
                </p>
                <v-simple-table dark>
                    <template v-slot:default>
                    <tbody>
                        <tr>
                        <td>Order Subtotal</td>
                        <td class="text-right" style="width:50px">Total Price</td>
                        </tr>
                        <tr v-for="item in $store.getters.getCartItems" :key="item.id">
                            <td>
                                {{item.name}}
                            </td>
                            <td class="text-right" style="width:50px">
                                {{item.price}}
                            </td>
                        </tr>
                        <tr class="blue--text">
                            <td>Total price</td>
                            <td>{{$store.getters.getTotalPriceItems}}</td>
                        </tr>
                    </tbody>
                    </template>
                </v-simple-table>
                 <v-simple-table dark>
                    <template v-slot:default>
                    <tbody>
                         <v-text-field
                        :counter="35"
                        label="Name"
                        required
                        dark
                        v-model="name"></v-text-field>
                         <v-text-field
                        :counter="35"
                        label="Phone"
                        required
                        dark
                        v-model="phone"></v-text-field>
                         <v-text-field
                        :counter="35"
                        label="Address"
                        required
                        dark
                        v-model="address"></v-text-field>
                          <v-text-field
                        :counter="35"
                        label="Email"
                        required
                        dark
                        v-model="email"></v-text-field>
                    </tbody>
                    </template>
                </v-simple-table>
                <div class="text-center">
                    <v-btn class="white mt-5" @click="submitForm()">PROCEED TO PAY</v-btn>
                </div>
            </v-col>
            <v-col :cols="12" md="9">
                <v-simple-table>
                    <template v-slot:default>
                    <thead>
                        <tr>
                        <th class="text-left">
                            Image
                        </th>
                        <th class="text-left">
                            Item Name
                        </th>
                        <th class="text-left">
                            Item Price
                        </th>
                        </tr>
                    </thead>
                    <tbody v-for="product in products" :key="product.id">
                        <tr>
                        <td><v-img :src="'/storage/uploads/'+product.image" style="height:80px;width:80px" class="mt-2"></v-img></td>
                        <td>{{product.name}}</td>
                        <td>{{product.price}}</td>
                        </tr>
                    </tbody>
                    </template>
                </v-simple-table>
            </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    props: ['customer'],
    data: function(){
        return{
        name: this.customer.name,
        phone: this.customer.phone,
        address: this.customer.address,
        email: this.customer.email,
        id: this.customer.id,
        products: []
        }
    },
    methods: {
        getProducts(id){
              axios.get('http://127.0.0.1:8000/api/customerDetail/'+id).then(response => {
            if(response.status >= 200 && response.status < 300){
              this.products = response.data.products
            }
          })
        }
    },
    mounted(){
        this.getProducts(this.id)
    }
}
</script>
<style>

</style>
