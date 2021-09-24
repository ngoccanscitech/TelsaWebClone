<template>
    <div class="mt-15" style="background-color:white;height:100vh">
        <v-container>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <v-card outlined>
                        <v-card-title>
                            categories
                        </v-card-title>
                        <v-divider></v-divider>
                        <template>
                            <v-btn v-for="categoryItem in categories" :key="categoryItem.id" 
                            @click="()=>{
                                category = categoryItem
                            }"
                            class="ml-3 mt-2 white--text mb1" style="font-size:13px;width:90%" color="black">{{categoryItem.name}}</v-btn>
                        </template>
                    </v-card>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9">
                    <v-divider></v-divider>
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-6 col-md-3" v-for="product in category.products" :key="product.id">
                            <v-hover v-slot:default="{ hover }">
                                  <v-card
                                  class="mx-auto"
                                  color="grey lighten-4"
                                  max-width="600"
                                  >
                                <v-img class="white--text align-end" :aspect-ratio="16/9" height="200px" 
                                :src="'/storage/uploads/'+product.image">
                                <v-expand-transition>
                                    <div class="d-flex transition-fast-in-fast-out white darken-2 v-card--reveal display-3 white--text" style="height:100%">
                                        <v-btn 
                                        @click="()=>{$router.push({name: 'ProductDetails', query: {product} } )}"
                                         v-if="hover" outlined>View</v-btn>
                                    </div>
                                </v-expand-transition>
                                </v-img>
                                <v-card-text class="text--primary" style="margin-bottom:-8px">
                                    {{product.name}}
                                </v-card-text>
                                <v-card-text class="text--primary">
                                    <div>{{product.price}}</div>
                                </v-card-text>
                            </v-card>
                            </v-hover>
                        </div>
                    </div>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
export default {
    data: function(){
        return{
            categories: [],
            category: ''
        }
    },
    methods: {
         getCategories(){
             axios.get('/api/categories').then(response => {
            if(response.status >= 200 && response.status < 300){
                this.categories = response.data.categories
            }
        })
        }
    },
    mounted(){
        this.category = this.$route.query.category
        this.getCategories()
    }
}
</script>
<style>
    .v-card--reveal {
        align-items:center;
        bottom: 0;
        justify-content: center;
        opacity: 0.8;
        position: absolute;
        width:100%;
    }
</style>
