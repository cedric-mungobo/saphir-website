<script setup>
import NavBar from '@/Layouts/NavBar.vue';
import { Head, Link } from '@inertiajs/vue3';


defineProps(
    {
        offres:Object
    }
)

</script>

<template>
    <Head title="offres saphir consulting groupe" />
    <div>
<NavBar/>
        <!-- component -->
<section class="from-cyan-100 via-blue-300 to-indigo-100 bg-gradient-to-br">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Offres</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <div class="bg-white bg-opacity-50 rounded-lg shadow-xl lg:flex " v-for="data in offres">
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
</section>

    </div>
</template>
