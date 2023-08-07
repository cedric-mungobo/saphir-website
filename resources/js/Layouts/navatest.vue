<script setup>

</script>



<template>
    <div >
        <!-- Navigation -->
        <nav class="navbar fixed-top">
            <div class="container flex flex-wrap items-center justify-between sm:px-4 lg:px-8 lg:flex-nowrap">


                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
                    href="index.html">
                    <!-- <img src="images/logo.svg" alt="alternative" class="h-8" /> -->
                    Saphir consulting groupe
                </a>

                <button
                    class="text-xl leading-none rounded background-transparent hover:no-underline focus:no-underline lg:hidden lg:text-gray-400"
                    type="button" data-toggle="offcanvas">
                    <span class="inline-block w-8 h-8 align-middle navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
                    id="navbarsExampleDefault">
                    <ul class="flex flex-col pl-0 mt-3 mb-2 ml-auto list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Acceuil <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#services">Nos Services</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#realisation">Nos réalisations</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#pricing">Offres</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>

                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->




</div></template>
