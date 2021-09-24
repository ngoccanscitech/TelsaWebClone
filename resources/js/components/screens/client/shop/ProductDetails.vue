<template>
    <div style="background-color:white" class="mt-15">
        <v-container>
           <div class="row">
               <div class="col-xs-12 col-sm-5 col-md-5">
                   <v-img style="height:500px" :src="'/storage/uploads/'+product.image" ></v-img>
               </div>
               <div class="col-xs-12 col-sm-7 col-md-7">
                   <div class="pl-6">
                       <p class="display-1 mb-0">{{product.name}}</p>
                       <v-card-actions class="pa-0">
                           <p>{{product.price}}</p>
                           <v-spacer></v-spacer>
                       </v-card-actions>
                       <p class="subtitle-1 font-weight-thin">{{product.description}}</p>
                       <v-btn class="primary white--text" @click="()=>addItemToCart(product)">Add to card</v-btn>
                   </div>
               </div>
            </div> 
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <v-tabs>
                        <v-tab>Description</v-tab>
                        <v-tab-item>
                            <p class="pt-10 subtitle-1 font-weight-thin">{{product.description}}</p>
                        </v-tab-item>
                    </v-tabs>
                    <v-card-text>
                        <p class="subtitle-1 font-weight-light pt-3 text-center">Other Products</p>
                        <v-divider></v-divider>
                        <div class="row text-center" >
                            <div class="col-12 col-md-3 col-sm-6 col-xl-4 text-center" v-for="productItem in products" :key="productItem.id" >
                                <v-hover v-slot="{ hover }" open-delay="240">
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img class="white--text align-end" height="200px" :src="'/storage/uploads/'+productItem.image">
                                            <v-card-title>
                                                {{productItem.name}}
                                            </v-card-title>
                                        </v-img>
                                        <v-card-text class="text--primary text-center">
                                           <div> {{productItem.price}}</div>
                                           <div>{{productItem.category.name}}</div>
                                        </v-card-text>
                                        <div class="text-center">
                                            <v-btn outlined color="info" dark @click="()=>{
                                                product = productItem
                                                $router.push({name: 'ProductDetails', query: {product: productItem}})}">View Product</v-btn>
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                            </div>
                    </v-card-text>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
     data: function(){
        return{
            products: [],
            product: ''
        }
    },
    methods: {
        getLatestProducts(){
             axios.get('/api/latestProducts').then(response => {
            if(response.status >= 200 && response.status < 300){
                this.products = response.data.products
            }
        })
        },
        addItemToCart(product){
            this.$store.dispatch('addItemToCart', product)
            console.log(this.$store.getters.getCardItems)
        }
    },
    mounted(){
        this.product = this.$route.query.product
        this.getLatestProducts()
    }
}
</script>
<style>

</style>
