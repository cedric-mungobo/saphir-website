<script setup>
import { Head, Link } from '@inertiajs/vue3';

</script>
<template>
    <nav class="navbar fixed-top flex flex-wrap items-center justify-between py-2 bg-[#f1f9fc]">
        <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
            <div class="relative flex justify-between w-full px-4 lg:w-auto lg:static lg:block lg:justify-start">
                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                    href="/">
                    <!-- <img src="images/logo.svg" alt="alternative" class="h-8" /> -->
                    Saphir consulting groupe
                </a>
                <button
                    class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer lg:hidden focus:outline-none"
                    type="button" v-on:click="toggleNavbar()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div v-bind:class="{ 'hidden': !showMenu, 'flex': showMenu }" class="items-center lg:flex lg:flex-grow ">
                <ul class="flex flex-col pl-0 mt-3 mb-2 ml-auto list-none lg:mt-0 lg:mb-0 lg:flex-row">
                    <li>
                        <a class="nav-link page-scroll " href="#header">Acceuil <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#services">Nos Services</a>
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#realisation">Nos réalisations</a>
                    </li>

                    <li>
                        <Link :href="route('offres.index')" class="nav-link">Offres</Link>
                        <!-- <a class="nav-link page-scroll" href="#pricing">Offres</a> -->
                    </li>
                    <li>
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    data() {
        return {
            showMenu: false
        }
    },
    methods: {
        toggleNavbar: function () {
            this.showMenu = !this.showMenu;
        }
    }
}
</script>
