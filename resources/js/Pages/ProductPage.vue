<template>
    <HomeLayout>
    <div class="my-6  max-w-7xl mx-auto">
        <h2 class="w-full text-center text-3xl font-semibold">Products</h2>

        <div class="pr-2 md:grid md:grid-cols-4 mt-12">
            <div class="hidden md:block col-span-1 px-4">
                <JetNavLink v-for="category in $page.props.categories" :href="route('product.home',{'category_id':category.id})"  class="py-4 w-full text-xl font-sans flex justify-between items-center">
                    <h2>{{category.name}}</h2>
                </JetNavLink>
            </div>
            <!-- list container -->
            <div class="col-span-3">
                <!-- item one -->
                <div v-for="product in productsData" class="flex shadow-both-sm m-2">
                    <img src="https://cdn.shopify.com/s/files/1/0399/1728/9633/files/WCC-SIMPLY-MINT-RENDER-WITH-BRUSH-High-Res_1024x.png?v=1607451904" alt="" class="h-44 md:h-80" />
                    <div class="flex-col flex p-1">
                        <p class="text-2xl">{{product.title}}</p>
                        <p class="text-lg font-semibold my-1">$29.95</p>
                        <p class="h-56 text-justify overflow-y-hidden pr-3 text-sm sm:text-md md:h-36 xl:24">{{product.description}}</p>
                        <button class="bg-gray-400 my-4 flex p-2 px-1 sm:px-10 rounded-md mx-auto">
                            <img src="https://cdn-icons-png.flaticon.com/512/102/102665.png" alt="" class="h-6" />
                            <h2 @click="addToCart(product.id)" class="text-white text-xl sm:ml-3">ADD TO CART</h2>
                        </button>
                    </div>
                </div>
                <!-- end item -->

                <div v-if="!isLoading" @click="addItemsInData" class="py-4 px-8 bg-green-400 text-white text-xl font-semibold hover:text-white shadow-sm rounded-md">
                     Show More
                </div>
                 <div v-else-if="this.products.last_page==this.page">
                     No More items
                 </div>
                <div v-else @click="addItemsInData" class="py-4 px-8 bg-green-400 text-white text-xl font-semibold hover:text-white shadow-sm rounded-md">
                    Show More ....
                </div>




            </div>

            <!-- end list container -->
        </div>
    </div>
</HomeLayout>
</template>

<script>
import HomeLayout from "../Layouts/HomeLayout";
import  axios from 'axios';
import JetNavLink from '../Jetstream/NavLink'
export default {
    name: "ProductPage",
    props:{
      products:Object,
        category:null
    },
    data(){
        return {
            productsData:Array,
            page:1,
            isLoading:false
        };
    },
    components:{
        HomeLayout,
        JetNavLink
    },

    mounted() {
        this.productsData=this.products.data;
        this.page=this.products.current_page;



    },
    methods:{
        addItemsInData(){
            if(this.page<this.products.last_page){
                this.page=this.page+1;
                axios.get(`api/product?page=${this.page}&&category_id=${this.category}`).then(({data})=>{
                    this.productsData.push(...data.data);

                }).catch((e)=>{
                    console.log(e);
                })
            }

        },
        addToCart(product){

            this.$inertia.post('/cart/create', {product:product});
        }
    }


}
</script>

<style scoped>

</style>
