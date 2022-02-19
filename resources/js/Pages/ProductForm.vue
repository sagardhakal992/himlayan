<template>
   <AppLayout  title="Sagar">
       <template #header>
           <h2 v-if="route().current('products.edit')" class="font-semibold text-xl text-gray-800 leading-tight">
               Update Product
           </h2>
           <h2 v-else class="font-semibold text-xl text-gray-800 leading-tight">
               Create Product
           </h2>


       </template>
      <div class="py-12">
          <div class="max-w-7xl mx-auto shadow-sm shadow-blue-50 sm:px-6 lg:px-8 rounded-lg overflow-hidden">
               <div class="h-[500px] bg-white rounded-lg">

                   <form @submit.prevent="submitProduct" class="w-full  grid justify-center grid-cols-4">
                       <div class="grid col-span-4 gap-4 sm:grid-cols-2 px-6 py-6">
                           <div class="space-x-3 w-full ">
                               <label class="text-lg font-semibold">Title</label>
                               <input class="p-2 w-full border-2 border-gray-200 focus:border-blue-300 rounded-md " v-model="form.title" />
                               <div v-if="errors">
                                   <h3 v-if="errors.title">{{errors.title}}</h3>
                               </div>

                           </div>
                           <div class=" space-x-3 w-full ">
                               <label class="text-lg font-semibold">Description</label>
                               <input class="p-2 w-full border-2 border-gray-200 focus:border-blue-300 " v-model="form.description"/>
                               <div v-if="errors">
                                   <h3 v-if="errors.description">{{errors.description}}</h3>
                               </div>
                           </div>
                           <div class=" grid space-x-3 w-full ">
                               <label class="text-lg font-semibold">Price</label>
                               <input class="p-2 w-full border-2 border-gray-200 focus:border-blue-300 "
                                      type="number" v-model="form.price"
                               />
                               <div v-if="errors">
                                   <h3 v-if="errors.price">{{error.price}}</h3>
                               </div>



                           </div>

                       </div>
                       <button type="submit"
                               class="py-2 px-12 col-start-2 col-end-4  text-white bg-green-500 rounded-xl shadow-sm"
                       >Submit</button>
                   </form>


               </div>
          </div>

      </div>

   </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import {defineComponent} from 'vue';

export  default defineComponent({
    components: {
        AppLayout
    },
    props:{
        errors:Object,
        datas:Object
    },
    data(){
        return {
            form:{
                title:"",
                description:"",
                price:0
            }
        }
    },

    methods:{
        submitProduct(){
         if(route().current("products.edit")){
             this.$inertia.put(`/products/${this.datas.id}`,this.form);
         }else{
             this.$inertia.post("/products",this.form);
         }
        }
    },
    beforeMount() {
        if(this.datas){
           this.form.title=this.datas.title;
            this.form.description=this.datas.description;
            this.form.price=this.datas.price;
        }
    }
});
// export default {
//
// }
</script>

<style scoped>

</style>
