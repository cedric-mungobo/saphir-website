<script setup>
import NavBar from '@/Layouts/NavBar.vue';
import { Head, Link } from '@inertiajs/vue3';
const props = defineProps({
    offre: Object,
    offres: Object,
})



</script>

<template>
    <Head :title="props.title" />
    <NavBar />
    <!-- component -->
    <div class="max-w-screen-lg mx-auto ">
         <!-- featured section -->
      <div class="flex flex-wrap py-10 mt-12 mb-16 space-x-0 md:flex-no-wrap md:space-x-6">
        <!-- main post -->
        <div class="relative block w-full p-4 mb-10 rounded lg:mb-0 lg:p-0 md:w-4/7">
          <img :src="offre.image" class="object-cover w-full h-64 rounded-md">
          <span class="hidden mt-4 text-sm text-green-700 md:block"> Publié le {{ offre.created_at }} Par Saphir Consulting Groupe </span>
          <h1 class="mt-2 mb-2 text-4xl font-bold leading-tight text-gray-800">
            {{ props.offre.title}}
          </h1>
          <p class="mb-4 text-gray-600">
            {{ props.offre.description}}
        </p>

        </div>

        <!-- sub-main posts -->
        <div class="flex flex-col w-full gap-8 px-4 mt-10 ">

            <h1 class="py-5 text-2xl"> Offres similaires</h1>

            <div class="bg-gray-200 bg-opacity-50 rounded-lg shadow-xl lg:flex " v-for="data in offres">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" :src="data.image" alt="">

                <div class="flex flex-col justify-between px-4 py-6 lg:mx-6">

                    <Link :href="route('offres.show',data.id)" class="text-xl font-semibold text-gray-800 dark:text-white">
                        {{ data.title }}
                    </Link>


                    <span class="text-sm text-gray-500 dark:text-gray-300">Publié le : {{ data.created_at }} </span>
                </div>
            </div>


        </div>

      </div>
      <!-- end featured section -->
    </div>
</template>
