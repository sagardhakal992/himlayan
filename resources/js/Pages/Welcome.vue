<template>
   <HomeLayout>
     <template #header>
         <div class="relative sm:flex-row sm:flex sm:items-end">
             <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/hero-desktop-ashwagandha_x720.jpg?v=1608662725" alt="" class="w-full h-80 sm:h-[450px] lg:h-[550px] object-cover sm:object-fill" />
             <div class="text-center px-3 sm:px-0 sm:absolute top-24">
                 <h2 class="text-4xl font-semibold text-light-green w-full my-2 sm:font-normal sm:py-4 sm:text-5xl sm:text-black sm:text-right sm:bg-light-white">ASHWAGANDHA</h2>
                 <h3 class="text-lg leading-6 sm:w-4/5 sm:ml-auto sm:text-right sm:bg-yellow-50 lg:bg-transparent">A star performer for stress and energy in a potent, organic caplet.</h3>
                 <button class="bg-light-green py-2 rounded-md text-white font-semibold px-5 my-3">SHOP NOW</button>
             </div>
         </div>
     </template>
<!--       shop by category-->
       <div class="my-10">
           <h2 class="w-full text-center text-2xl font-semibold">Shop By Category</h2>
           <div class="w-screen max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
               <div class="bg-white flex flex-col items-center">
                   <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/WCC-SIMPLY-MINT-RENDER-WITH-BRUSH-High-Res_1024x.png?v=1607451904" alt="" class="h-72 w-56 lg:h-80 lg:w-64" />
                   <h2 class="text-2xl">Supplements</h2>
                   <h2 class="text-lg text-gray-400 font-light hover:text-xl hover:text-gray-600 hover:font-semibold hover:cursor-pointer">See All Supplements</h2>
               </div>
               <div class="bg-white flex flex-col items-center">
                   <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/WCC-SIMPLY-MINT-RENDER-WITH-BRUSH-High-Res_1024x.png?v=1607451904" alt="" class="h-72 w-56 lg:h-80 lg:w-64" />
                   <h2 class="text-2xl">Supplements</h2>
                   <h2 class="text-lg text-gray-400 font-light hover:text-xl hover:text-gray-600 hover:font-semibold hover:cursor-pointer">See All Supplements</h2>
               </div>
               <div class="bg-white flex flex-col items-center">
                   <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/WCC-SIMPLY-MINT-RENDER-WITH-BRUSH-High-Res_1024x.png?v=1607451904" alt="" class="h-72 w-56 lg:h-80 lg:w-64" />
                   <h2 class="text-2xl">Supplements</h2>
                   <h2 class="text-lg text-gray-400 font-light hover:text-xl hover:text-gray-600 hover:font-semibold hover:cursor-pointer">See All Supplements</h2>
               </div>
           </div>
       </div>

       <best-sellers />
<!--       end shop-category-->
       <template #wisdom>
           <div class="w-screen max-w-7xl sm:mx-4 md:mx-auto p-12 bg-gray-100 sm:flex space-x-5 sm:rounded-lg">
               <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/StressCareA-Main-647x1024.png?v=1591359475" alt="" class="h-64" />
               <div class="block sm:px-8 lg:py-12 lg:px-20">
                   <p class="text-[1.75em] leading-9 text-left font-semibold">Unlock the Wisdom of Herbs</p>
                   <p class="text-justify">Since 1930, Himalaya has been passionate about the healing wisdom of herbs. We offer a wide range of clinically-studied herbal supplements, toothpaste and personal care products that unlock the powerful healing benefits of herbs.</p>
               </div>
           </div>
       </template>

       <template #review>
           <Reviews />

       </template>
   </HomeLayout>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import HomeLayout from "../Layouts/HomeLayout";
    import BestSellers from "../custom_components/BestSellers";
    import Reviews from "../custom_components/Reviews";

    export default defineComponent({
        components: {
            Head,
            Link,
            HomeLayout,
            BestSellers,
            Reviews
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>


