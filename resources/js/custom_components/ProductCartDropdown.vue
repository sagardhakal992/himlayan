<template>
    <div  class="absolute w-[350px] p-4 bg-white shadow-lg rounded-md top-[105px] z-10  sm:block right-[10px]">
        <div v-if="$page.props.cartItems.length" class="py-4">
            <h2 class="m-2 mb-4 text-xl">Shopping Cart</h2>
            <div v-for="(item,index) in $page.props.cartItems" :key="item.id">
                <div v-if="index<3"
                class="bg-white w-full flex justify-between items-center px-2 my-6 rounded-md shadow-sm">
                <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/products/Whitening-Mint---Box-Tube.png?v=1597743896" alt="" class="h-20" />
                <div class="flex flex-col">
                    <h2 class="text-md">{{item.title}}</h2>
                    <h2>1 x <span>{{item.price}}</span></h2>
                </div>
                <img @click="deleteItem(item.id)" src="https://cdn-icons-png.flaticon.com/128/992/992701.png" alt="" class="h-8" />
            </div>
                </div>
            <hr />

            <div class="py-4 px-2 w-full text-xl flex flex-col font-semibold">
                <h1 class="w-full text-left font-normal">Total: $1500</h1>
                <button @click="proceedToCheckout" class="py-3 my-4 bg-gray-400 px-10 text-white rounded-md">Proceed to Checkout</button>
                <button class="hover:bg-gray-300 rounded-md hover:py-3">view cart</button>
            </div>
        </div>
        <div v-else>No Item Found</div>
    </div>
</template>

<script>
export default {
    name: "ProductCartDropdown",
    methods:{
        deleteItem(id){
          this.$inertia.post(`cart/delete`,{"id":id});
        },
        proceedToCheckout(){
            this.$inertia.get('/checkout');
        }
    }
}
</script>

<style scoped>

</style>
