<script setup>

import NavBar from '@/Layouts/NavBar.vue';



</script>

<template>
    <NavBar />

    <!-- Header -->
    <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div class="mb-16 lg:mt-22 xl:mt-30 xl:mr-12">
                <h1 class="h1-large mb-5">
                    Partenaire privilégié des entreprises et des particuliers</h1>
                <p class="p-large mb-8">
                    Créé pour répondre aux besoins des entreprises en RDC, Saphir Consulting Groupe SARL demeure un
                    partenaire stratégique qui travaille d’arrache-pied pour assurer la croissance des activités économiques
                    en faisant la promotion de l’entrepreneuriat en RDC.

                </p>
                <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>Contactez-nous</a>
                <a class="btn-solid-lg secondary" href="#your-link"><i class="fab fa-google-play"></i>Download</a>
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
            <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">
                NOS SERVICES
            </p>
        </div> <!-- end of container -->
    </div>
    <!-- end of introduction -->


    <!-- Features -->
    <div id="features" class="cards-1">
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
            <div class="card mx-5">
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
<div class="pt-4 pb-14 text-center">
    <div class="container px-4 sm:px-8 xl:px-4">
        <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">
            NOS RÉALISATIONS
        </p>
    </div> <!-- end of container -->
</div>
<!-- end of introduction -->


    <!-- Details 1 -->
    <div id="details" class="pt-12 pb-16 lg:pt-16">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Results driven ground breaking technology</h2>
                    <p class="mb-4">Based on our team's extensive experience in developing line of business applications and
                        constructive customer feedback we reached a new level of revenue.</p>
                    <p class="mb-4">We enjoy helping small and medium sized tech businesses take a shot at established
                        Fortune 500 companies</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="xl:ml-14">
                    <img class="inline" src="images/details-1.jpg" alt="alternative" />
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
                    <img class="inline" src="images/details-2.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-5">
                <div class="xl:mt-12">
                    <h2 class="mb-6">Instant results for the marketing department</h2>
                    <ul class="list mb-7 space-y-2">
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Features that will help you and your marketers</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Smooth learning curve due to the knowledge base</div>
                        </li>
                        <li class="flex">
                            <i class="fas fa-chevron-right"></i>
                            <div>Ready out-of-the-box with minor setup settings</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Lightbox</a>
                    <a class="btn-outline-reg" href="article.html">Details</a>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 2 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
    <div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-8">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="lg:col-span-8">
                <div class="mb-12 text-center lg:mb-0 lg:text-left xl:mr-6">
                    <img class="inline rounded-lg" src="images/details-lightbox.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-4">
                <h3 class="mb-2">Goals Setting</h3>
                <hr class="w-11 h-0.5 mt-0.5 mb-4 ml-0 border-none bg-indigo-600" />
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.
                </p>
                <h4 class="mt-7 mb-2.5">User Feedback</h4>
                <p class="mb-4">This is a great app which can help you save time and make your live easier. And it will help
                    improve your productivity.</p>
                <ul class="list mb-6 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Splash screen panel</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Statistics graph report</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Events calendar layout</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Location details screen</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#download">Download</a>
                <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->


    <!-- Details 3 -->
    <div class="pt-16 pb-12">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
            <div class="lg:col-span-5">
                <div class="mb-16 lg:mb-0 xl:mt-16">
                    <h2 class="mb-6">Platform integration and life time free updates</h2>
                    <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why
                        current users are so excited when using Pavo
                        together with their teams.</p>
                    <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level
                        agreement</p>
                </div>
            </div> <!-- end of col -->
            <div class="lg:col-span-7">
                <div class="ml-14">
                    <img class="inline" src="images/details-3.jpg" alt="alternative" />
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of container -->
    </div>
    <!-- end of details 3 -->



    <!-- Testimonials -->
    <div class="slider-1 py-32 bg-gray">
        <div class="container px-4 sm:px-8">
            <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">What do users think about Pavo</h2>

            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="swiper-wrapper">

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-1.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">It's been so fun to work with Pavo, I've managed to integrate it
                                        properly into my business flow and it's great</p>
                                    <p class="testimonial-author">Jude Thorn - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-2.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We were so focused on launching as many campaigns as possible
                                        that we've forgotten to target our loyal customers</p>
                                    <p class="testimonial-author">Roy Smith - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-3.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">I've been searching for a tool like Pavo for so long. I love the
                                        reports it generates and the amazing high accuracy</p>
                                    <p class="testimonial-author">Marsha Singer - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-4.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">We've been waiting for a powerful piece of software that can help
                                        businesses manage their marketing projects</p>
                                    <p class="testimonial-author">Tim Shaw - Designer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-5.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">Searching for a great prototyping and layout design app was
                                        difficult but thankfully I found app suite quickly</p>
                                    <p class="testimonial-author">Lindsay Spice - Marketer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="images/testimonial-6.jpg" alt="alternative" />
                                <div class="card-body">
                                    <p class="italic mb-3">The app support team is amazing. They've helped me with some
                                        issues and I am so grateful to the entire team</p>
                                    <p class="testimonial-author">Ann Blake - Developer</p>
                                </div>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->

                    </div> <!-- end of swiper-wrapper -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- end of add arrows -->

                </div> <!-- end of swiper-container -->
            </div> <!-- end of slider-container -->
            <!-- end of card slider -->

        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->






    <!-- Footer -->
    <div class="footer">
        <div class="container px-4 sm:px-8">
            <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Pavo is a mobile application for marketing automation and you can reach
                the team at <a class="text-indigo-600 hover:text-gray-500"
                    href="mailto:email@domain.com">email@domain.com</a></h4>
            <div class="social-container">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-pinterest-p fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </a>
                </span>
            </div> <!-- end of social-container -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
            <ul class="mb-4 list-unstyled p-small">
                <li class="mb-2"><a href="article.html">Article Details</a></li>
                <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
            </ul>
            <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Your name</a></p>

            <p class="pb-2 p-small statement">Distributed by :<a href="https://themewagon.com/"
                    class="no-underline">Themewagon</a></p>
        </div>

        <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright --></template>
