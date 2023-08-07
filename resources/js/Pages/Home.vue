<script setup>

import NavBar from '@/Layouts/NavBar.vue';



</script>

<template>
    <NavBar />

    <!-- Header -->
    <header id="header" class="text-center header py-28 md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-22 xl:mt-30 xl:mr-12">
                <h1 class="mb-5 h1-large">
                    Partenaire privilégié des entreprises et des particuliers</h1>
                <p class="mb-8 p-large">
                    Créé pour répondre aux besoins des entreprises en RDC, Saphir Consulting Groupe SARL demeure un
                    partenaire stratégique qui travaille d’arrache-pied pour assurer la croissance des activités économiques
                    en faisant la promotion de l’entrepreneuriat en RDC.

                </p>
                <a class="btn-solid-lg" href="#your-link">Contactez-nous</a>
                <!-- <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a> -->
            </div>
            <div class="xl:text-right">
                <img class="inline" src="images/pngegg-2.png" alt="alternative" />
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Introduction -->
    <div class="pt-4 pb-2 text-center">
        <div class="container px-4 sm:px-8 xl:px-4">
            <p class="mb-4 text-3xl leading-10 text-gray-800 lg:max-w-5xl lg:mx-auto">
                NOS SERVICES
            </p>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Features -->
    <div id="services" class="cards-1">
        <div class="container px-4 sm:px-8 xl:px-4">

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-3.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ingénierie financière</h5>
                    <p class="sm:mb-4 xl:mb-10">

                        Nous assurons la gestion comptable des entreprises,
                        la gestion fiscale des entreprises,
                        l'accompagnement dans la recherche de financement,
                        la gestion des projets,
                        les études de fiscalité ,
                        la gestion des instruments du marché boursier
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <!-- <img src="images/features-icon-2.svg" alt="alternative" /> -->
                    <svg style="color: red" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3 5C3 3.89543 3.89543 3 5 3H15C16.1046 3 17 3.89543 17 5V13C17 14.1046 16.1046 15 15 15H12.7808L12.903 15.4887L13.7071 16.2929C13.9931 16.5789 14.0787 17.009 13.9239 17.3827C13.7691 17.7563 13.4045 18 13 18H7.00003C6.59557 18 6.23093 17.7563 6.07615 17.3827C5.92137 17.009 6.00692 16.5789 6.29292 16.2929L7.09706 15.4887L7.21925 15H5C3.89543 15 3 14.1046 3 13V5ZM8.7713 12C8.75657 11.9997 8.74189 11.9997 8.72725 12H5V5H15V12H11.2728C11.2582 11.9997 11.2435 11.9997 11.2288 12H8.7713Z"
                            fill="red"></path>
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Développement informatique</h5>
                    <p class="">
                        Grâce à notre équipe de Développeurs,
                        nous développons des logiciels et applications spécifiques à votre entreprise afin de répondre aux
                        besoins que peut soulever l’utilisation des solutions de gestion.
                        Votre outil de gestion sera donc en parfaite adéquation avec votre besoin ainsi que votre
                        organisation,
                        ce qui vous permettra de gagner en liberté.
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="mx-5 card">
                <div class="card-image">
                    <img src="images/features-icon-5.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Multiservice client</h5>
                    <p class="mb-4">
                    <p>
                        juste milieu entre la rentabilité et la satisfaction
                    </p>
                    <p>- e-commerce collectif
                    </p>
                    <p>
                        - service clients
                    </p>
                    </p>
                </div>
            </div>
            <!-- end of card -->

            <!-- Card -->
            <div class="card">
                <div class="card-image">
                    <img src="images/features-icon-4.svg" alt="alternative" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Placement et gestion des ressources humaines</h5>
                    <p class="mb-4">
                    <p> - mise à disposition du personnel <br>
                        - gestion administrative des personnel <br>
                        - gestion de paye du personnel
                    </p>
                    </p>
                </div>
            </div>
            <!-- end of card -->


        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->
    <!-- Introduction -->
    <div class="pt-4 text-center pb-14">
        <div class="container px-4 sm:px-8 xl:px-4">
            <p class="mb-4 text-3xl leading-10 text-gray-800 lg:max-w-5xl lg:mx-auto">
                NOS RÉALISATIONS
            </p>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Details 1 -->
    <div id="realisation" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h1 class="mb-6 text-xl"> Saphir Compta </h1>
                    <p class="mb-4">
                        Saphir-compta est un logiciel de comptabilité qui permet de gérer les finances d'une
                        entreprise de manière électronique.</p>
                    <ul class="space-y-2 list mb-7">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Saisir les écritures comptables</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Générer des états financiers</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Gérer les contacts clients et fournisseurs</div>
                        </li>
                    </ul>

                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Nous contactez</a>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline rounded-xl" src="images/compta.jpeg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="py-24">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-7">
                <div class="mb-12 lg:mb-0 xl:mr-14">
                    <img class="inline rounded-xl" src="images/gestion.png" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12">
                    <h1 class="mb-6 text-xl"> Gestion de stock et Mini comptabilé </h1>
                    <p class="mb-4">Une application de gestion de stock peut vous aider à suivre vos niveaux de stock, à
                        gérer vos commandes et à éviter les ruptures de stock. </p>
                    <ul class="space-y-2 list mb-7">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Gestion de stock</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Gestion des clients et fournisseurs</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Mini comptabilité </div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Nous contactez</a>
                    <!-- <a class="btn-outline-reg" href="article.html">Details</a> -->
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->



    <section class="p-4 lg:p-8 dark:text-white">
        <div class="container mx-auto space-y-12">
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="images/cm.jpg" alt="" class="h-80 dark:bg-gray-100 aspect-video">
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">

                    <h3 class="text-3xl font-bold text-white"> MISSION COMPTABLE </h3>
                    <p class="my-2 dark:text-gray-400">
                        Nous réalisons votre mission comptable, fiscale, juridique et sociale avec un expert-comptable
                        confirmé
                    </p>
                    <h3 class="text-3xl font-bold text-white"> OPTIMISATION FISCALE </h3>
                    <p class="my-2 dark:text-gray-400">
                        Nous vous apportons les optimisations fiscales adaptées à votre activité ainsi qu’à votre situation
                        personnelle
                    </p>

                </div>
            </div>
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row-reverse">
                <img src="images/entreprise.jpeg" alt="" class="h-80 dark:bg-gray-500 aspect-video">
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <h3 class="text-3xl font-bold text-white">CREATION D’ENTREPRISE</h3>
                    <p class="my-6 dark:text-gray-400">
                        Saphir consulting vous assiste et vous guide dans la création de votre entreprise. Le créateur
                        d’entreprise est accompagné et suivi tout au long des étapes de la création par un de nos
                        experts-comptables qui maîtrise le secteur d’activité concerné.
                    </p>

                </div>
            </div>
            <div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
                <img src="images/lg3.png" alt="" class="h-80 dark:bg-gray-500 aspect-video">
                <div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">

                    <h3 class="text-3xl font-bold text-white">Création des outils de comptabilité et de gestion</h3>
                    <p class="my-6 dark:text-gray-400">
                        Chaque secteur d’activité a des problèmes spécifiques auxquels on se doit de répondre en apportant
                        des solutions appropriées. Tous les domaines de compétence sont sollicités au sein de notre cabinet
                        pour satisfaire nos clients. Pour cela nous Créons des outils adaptés, pour répondre aux besoins des
                        entreprises.
                    </p>

                </div>
            </div>
        </div>
    </section>




    <section id="contact" class="py-10 dark:bg-gray-800 dark:text-gray-50">
        <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
            <div class="py-6 md:py-0 md:px-6">
                <h1 class="mb-6 text-4xl font-bold ">NOUS CONTACTEZ </h1>
                <!-- <p class="pt-2 pb-4">Fill in the form to start a conversation</p> -->
                <div class="space-y-4">
                    <p class="flex items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 mr-2 sm:mr-6">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>15 Av. Roi Baudouin,Gombe,Kinshasa </span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 mr-2 sm:mr-6">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                            </path>
                        </svg>
                        <span>+243 823 383 983</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 mr-2 sm:mr-6">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        <span>contact@business.com</span>
                    </p>
                </div>
            </div>
            <form class="flex flex-col py-6 space-y-6 md:py-0 md:px-6">
                <label class="block">
                    <span class="mb-1">Nom </span>
                    <input type="text" placeholder="Leroy Jenkins"
                        class="block w-full rounded-md shadow-sm focus:ring focus:ri dark:bg-gray-800">
                </label>
                <label class="block">
                    <span class="mb-1">Prénom </span>
                    <input type="text" placeholder="Leroy Jenkins"
                        class="block w-full rounded-md shadow-sm focus:ring focus:ri dark:bg-gray-800">
                </label>
                <label class="block">
                    <span class="mb-1">Numéro de téléphone </span>
                    <input type="text" placeholder="Leroy Jenkins"
                        class="block w-full rounded-md shadow-sm focus:ring focus:ri dark:bg-gray-800">
                </label>
                <label class="block">
                    <span class="mb-1">Address Email</span>
                    <input type="email" placeholder="leroy@jenkins.com"
                        class="block w-full rounded-md shadow-sm focus:ring focus:ri dark:bg-gray-800">
                </label>
                <label class="block">
                    <span class="mb-1">Message</span>
                    <textarea rows="3" class="block w-full rounded-md focus:ring focus:ri dark:bg-gray-800"></textarea>
                </label>
                <button type="button"
                    class="self-center px-8 py-3 text-lg text-gray-100 bg-indigo-400 focus:ring hover:ring focus:ri rounded-xl hover:ri">Envoyer</button>
            </form>
        </div>
    </section>








    <!-- Copyright -->
    <div class="copyright">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
            <ul class="mb-4 list-unstyled p-small">
                <!-- <li class="mb-2"><a href="article.html">Offres</a></li> -->
                <!-- <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li> -->
                <!-- <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li> -->
            </ul>
            <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">2023</a></p>

            <!-- <p class="pb-2 p-small statement">Distributed by :<a href="https://themewagon.com/"
                    class="no-underline">Themewagon</a></p> -->
        </div>

        <!-- end of container -->
    </div> <!-- end of copyright -->
<!-- end of copyright --></template>
