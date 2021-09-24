<template lang="">
    <div>
        <nav>
            <v-app-bar app dark>
                <v-app-bar-title>
                    <router-link to="/home" ><v-img src="/assets/tesla-logo-new.png" height="62px" width="150px"></v-img></router-link>
                </v-app-bar-title>
                <v-spacer></v-spacer>
                <v-btn class="hidden-sm-and-down white font-weight-bold black--text ml-2" @click="()=>this.$router.push({name: 'Shop'})">Shop</v-btn>
                <v-btn class="hidden-sm-and-down white font-weight-bold black--text ml-2" @click="()=>this.$router.push({name: 'Cart'})">Cart</v-btn>
            </v-app-bar>
        </nav>
    </div>
</template>
<script>
export default {
}
</script>
<style lang="">

</style>
