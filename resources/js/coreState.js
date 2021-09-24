import Vue from 'vue'
import Vuex from 'vuex'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)

export default new Vuex.Store({
    plugins:[createPersistedState({
        storage: window.sessionStorage
    })],
    state:{
        cardItems: []
    },
    mutations:{
        addItemToCart(state, payload){
            let cardItems = state.cardItems
            cardItems.push(payload)
            state.cardItems = cardItems
        },
        removeItemFromCart(state, payload){
            let itemToBeRemoved = payload
            console.log('chay toi day')
            state.cardItems = state.cardItems.filter((item) => itemToBeRemoved.id !== item.id)
        }
    },
    getters:{
        getCartItems(state){
            return state.cardItems
        },
        getTotalPriceItems(state){
            let cartItems =  state.cardItems
            var total = 0;
            for(var i = 0; i< cartItems.length;i++){
                total += parseInt(cartItems[i]['price'])

            }
            return total
        }
    },
    actions:{
        addItemToCart(context, payload){
            context.commit('addItemToCart', payload)
        },
        removeItemFromCart(context, payload){
            context.commit('removeItemFromCart', payload)
        }
    },
    modules:{

    }
})