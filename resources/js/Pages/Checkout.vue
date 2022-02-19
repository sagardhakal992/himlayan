<template>
<HomeLayout >

<div class="max-w-7xl mx-auto">
    <div class="pt-8 text-3xl text-center">
      <p class="pb-2">Shopping Cart</p>

      <hr />
    </div>
    <div class="w-full">
      <!-- item start -->
      <div v-for="item in $page.props.cartItems" class="p-4 w-full my-3 flex border-b-2 shadow-sm">
        <div class="flex items-center mr-4">
          <img @click="deleteItem(item.id)" src="https://cdn-icons-png.flaticon.com/128/709/709518.png" alt="" class="h-6" />
          <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/products/BEAUTY_bodybar_purifying-2_300x.png?v=1595909766" alt="" class="h-32 sm:h-40" />
        </div>
        <div class="text-xl sm:flex items-center justify-between sm:mx-6">
          <p class="sm:text-2xl">{{item.title}}</p>
          <p class="text-gray-400 font-bold">{{item.price}}</p>
          <div class="flex space-x-2 py-2 items-center sm:mx-6">
            <img src="https://cdn-icons-png.flaticon.com/128/992/992683.png" alt="" class="h-6" />
            <p class="p-2 px-3 rounded-md text-gray-500 bg-gray-100">10</p>
            <img src="https://cdn-icons-png.flaticon.com/128/1828/1828926.png" alt="" class="h-6" />
          </div>
          <p class="text-gray-400 font-bold">$49.99</p>
        </div>
      </div>
    </div>
    <!-- item end -->
    <div class="text-xl text-center">No Item Found
    
    </div>
    
    
  </div>




</HomeLayout>
</template>

<script>
import HomeLayout from "../Layouts/HomeLayout";

export default {
    name: "Checkout",
    components:{
       HomeLayout
    },
    methods:{
    deleteItem(id){
    this.$inertia.post("cart/delete",{"id":id});
    }
    }
}
</script>

<style scoped>

</style>
