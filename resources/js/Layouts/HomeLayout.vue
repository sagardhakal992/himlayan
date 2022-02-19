<template>


    <div class="h-10 w-full bg-deep-orange"></div>
<!--    header-->
    <div class="h-16 shadow-md flex items-center pl-6 pr-8 bg-white sm:h-24">
        <img @click="toggleDrawer" src="https://cdn-icons-png.flaticon.com/128/1828/1828859.png" alt="" class="h-7 sm:hidden" />
        <jet-nav-link :href="route('home')">
            <img src="data:image/png;base64,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 " class="h-16 ml-5 sm:h-24" />
        </jet-nav-link>
        <ul class="hidden sm:flex sm:space-x-6 ml-5 text-xl">
            <jet-nav-link :href="route('product.home')" :active="route().current('product.home')"
            class="text-xl"
            >Shop</jet-nav-link>
            <li>About</li>
            <li>Store Location</li>
        </ul>
        <!-- drawer -->
        <div v-if="isDrawerOpen" class="w-72 bg-gray-100 top-0 bottom-0 left-0 fixed z-10 p-6  sm:hidden">
            <button @click="toggleDrawer" class="flex w-full py-6 px-2 items-center text-xl">
                <img src="https://cdn-icons-png.flaticon.com/512/748/748122.png" alt="" class="h-4 mr-4" />
                Close
            </button>
            <div @click="toggleSubCategory" class="py-4 w-full text-xl font-sans flex justify-between items-center">
                <h2>Shop</h2>

                    <img src="https://cdn-icons-png.flaticon.com/128/892/892528.png" alt="" class="h-5" />

            </div>

            <div class="py-4 w-full text-xl font-sans flex justify-between items-center">
                <h2>About</h2>
            </div>

            <div class="pt-4 pb-8 w-full text-xl font-sans flex justify-between items-center">
                <h2>Store Location</h2>
            </div>

            <div class="h-[1.5px] w-full bg-gray-300"></div>

            <div class="py-7 w-full text-xl font-sans font-bold flex justify-between items-center">
                <h2>My Account</h2>
            </div>

            <jet-nav-link v-if="!$page.props.auth.user" :href="route('login')" class="py-2 w-full text-xl font-sans flex items-center text-black ">
                <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="" class="h-6 mr-4" />
                <h2>Sign In</h2>
            </jet-nav-link>

            <jet-nav-link v-if="!$page.props.auth.user" :href="route('register')"  class="py-4 w-full text-xl text-black  font-sans flex items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mr-4" />
                <h2>Register</h2>
            </jet-nav-link>

            <jet-nav-link v-if="$page.props.auth.user" :href="route('dashboard')"  class="py-4 w-full text-xl font-sans flex items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mr-4" />
                <h2>Dashboard</h2>
            </jet-nav-link>

            <div class="py-4 w-full text-xl font-sans flex items-center">
                <img src="https://cdn-icons-png.flaticon.com/128/687/687259.png" alt="" class="h-6 mr-4" />
                <h2>CheckOut</h2>
            </div>

            <div @click="logout" v-if="$page.props.auth.user"   class="py-4 w-full text-xl font-sans flex items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mr-4" />
                <h2>Logout</h2>
            </div>

            <!-- sub category -->
            <div v-if="isSubCategoryOpen" class="absolute bg-gray-100 bottom-0 right-0 left-0 top-0 p-4 overflow-y-scroll ">
                <button @click="toggleSubCategory" class="flex w-full py-6 px-2 items-center text-xl">
                    <img src="https://cdn-icons-png.flaticon.com/512/860/860790.png" alt="" class="h-4 mr-4" />
                    Back
                </button>

                <JetNavLink :href="route('product.home')"  class="py-4 w-full text-xl font-sans flex justify-between items-center">
                    <h2>Shop</h2>
                </JetNavLink>
                <JetNavLink v-for="category in $page.props.categories" :href="route('product.home',{'category_id':category.id})"  class="py-4 w-full text-xl font-sans flex justify-between items-center">
                    <h2>{{category.name}}</h2>
                </JetNavLink>


            </div>
            <!-- end subcategory -->
        </div>

        <!-- enddrawer -->
        <!-- right icon start -->
        <img @click="toggleSearch" src="https://cdn-icons-png.flaticon.com/512/54/54481.png" alt="" class="h-6 ml-auto mr-2" />
        <img @click="toggleAccountDropdownOpen" src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mx-6 hidden sm:block" />
        <img @click="toggleShoppingCartDrawer" src="https://cdn-icons-png.flaticon.com/512/1656/1656850.png" alt="" class="h-6" />{{$page.props.cartItems.length}}

        <!-- right icon -->
    </div>
<!--    end header-->
<!--shopping cart drawer-->

    <div v-if="isShoppingCartDrawerOpen" class="fixed top-0 bottom-0 left-0 w-[350px] bg-gray-100 z-20 shadow-xl shadow-gray-500 p-4 sm:hidden">
        <button @click="toggleShoppingCartDrawer" class="flex w-full py-6 px-2 items-center text-xl">
            <img src="https://cdn-icons-png.flaticon.com/512/748/748122.png" alt="" class="h-4 mr-4" />
            Close
        </button>

       <div class="sm:hidden" >
           <product-cart-dropdown />
       </div>

    </div>
<!--    end shopping cart drawer-->



<!--    shopping cart dropdown-->

    <div class="hidden sm:block">
        <product-cart-dropdown v-if="isShoppingCartDrawerOpen" />
    </div>

<!--    end shopping cart dropdown-->


<!--    account dropdown-->


    <div v-if="isAccountDropdownOpen" class="fixed bg-white shadow-md border-t-2 w-48 top-32 z-10 rounded-lg right-[10px] flex-col p-2 hidden sm:flex">
        <jet-nav-link :href="route('login')" v-if="!$page.props.auth.user" class="py-2 mb-2 px-2 w-full text-xl font-sans flex items-center border-b border-gray-200 shadow-sm rounded-md">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="" class="h-6 mr-4" />
            <h2>Sign In</h2>
        </jet-nav-link>

        <jet-nav-link :href="route('register')" v-if="!$page.props.auth.user" class="py-2 px-2 w-full text-xl font-sans flex items-center border-b border-gray-200 shadow-sm rounded-md">
            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mr-4" />
            <h2>Register</h2>
        </jet-nav-link>

        <jet-nav-link :href="route('dashboard')" v-if="$page.props.auth.user" class="py-2 px-2 w-full text-xl font-sans flex items-center border-b border-gray-200 shadow-sm rounded-md">
            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" alt="" class="h-6 mr-4" />
            <h2>Dashboard</h2>
        </jet-nav-link>

        <div class="py-4 w-full text-xl font-sans flex items-center">
            <img src="https://cdn-icons-png.flaticon.com/128/687/687259.png" alt="" class="h-6 mr-4" />
            <h2>CheckOut</h2>
        </div>

        <div @click="logout" v-if="$page.props.auth.user" class="py-4 w-full text-xl font-sans flex items-center">
            <img src="https://cdn-icons-png.flaticon.com/128/687/687259.png" alt="" class="h-6 mr-4" />
            <h2>Logout</h2>
        </div>
    </div>


<!--    end dropdown-->

<!-- search component-->
    <div v-if="isSearchOpen" class="fixed top-0 left-0 h-24 sm:h-32  right-0 bg-white flex items-center justify-between shadow-lg pl-4 sm:justify-center">

        <div class="w-full sm:w-4/6 sm:ml-auto ">
            <h2 class="text-lg font-semibold">What Are You Seacthing For ?</h2>
            <input class="p-2 border-b-2 w-full  focus:outline-none  font-semibold text-black" placeholder="Search Products"  />

        </div>

        <div class="flex flex-col items-center sm:mr-auto">
            <img @click="toggleSearch" src="https://cdn-icons-png.flaticon.com/512/748/748122.png" alt="" class="h-6 mb-4" />
            <img src="https://cdn-icons-png.flaticon.com/512/54/54481.png" alt="" class="h-6 ml-auto mr-2" />
        </div>


    </div>



<!--    end search component-->



    <slot name="header"></slot>
    <main>
        <slot></slot>
    </main>



<!--    unlock wisdom block-->
    <slot name="wisdom">

    </slot>
<!--    end unlock wisdom block-->
<!--    review section-->
    <slot name="review">

    </slot>
<!--    end review-->

<Footer ></Footer>



</template>

<script>
import JetNavLink from '@/Jetstream/NavLink.vue';
import ProductCartDropdown from "../custom_components/ProductCartDropdown";
import Footer from "../custom_components/Footer";


export default {
    name: "HomeLayout",
    components:{
        JetNavLink,
        ProductCartDropdown,
        Footer
    },
    data(){
        return {
            isDrawerOpen:false,
            isSubCategoryOpen:false,
            isShoppingCartDrawerOpen:false,
            isAccountDropdownOpen:false,
            isSearchOpen:false,


        };
    },
    methods:{
        toggleDrawer(){
            this.isDrawerOpen=!this.isDrawerOpen;
        },
        toggleSubCategory(){
           this.isSubCategoryOpen=!this.isSubCategoryOpen;
        },
        toggleShoppingCartDrawer(){
            this.isSubCategoryOpen=false;
            this.isDrawerOpen=false;
            this.isShoppingCartDrawerOpen=!this.isShoppingCartDrawerOpen;
        },
        toggleAccountDropdownOpen(){
            this.isAccountDropdownOpen=!this.isAccountDropdownOpen;
        },
        toggleSearch(){
            this.isSearchOpen=!this.isSearchOpen;
        },
        logout(){
            this.$inertia.post('logout');
        },



    },
    mounted() {
       this.$store.commit("addItemsToCart",this.$page.props.cartItems)
    }
}
</script>

<style scoped>

</style>
