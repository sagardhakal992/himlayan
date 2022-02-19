
import Vuex from 'vuex'

const store = new Vuex.Store(
    {
        state(){
            return {
                cartItems:[],
            };
        },
        actions:{

        },
        mutations:{
            addItemsToCart(state,products){
                state.cartItems.push(...products);
            }
        }
    }
);
export default store;
