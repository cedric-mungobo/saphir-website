<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

               <!-- Styles -->
               <link rel="preconnect" href="https://fonts.gstatic.com" />
               <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
               {{-- <link href="css/fontawesome-all.css" rel="stylesheet" /> --}}
               <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
               {{-- <link href="css/swiper.css" rel="stylesheet" /> --}}
               {{-- <link href="css/magnific-popup.css" rel="stylesheet" /> --}}


               {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> --}}
               <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" />
               <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" />
               <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" />
               <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased" data-spy="scroll" data-target=".fixed-top">
        @inertia

          <!-- Scripts -->


          <script src="{!! asset('js/jquery.min.js') !!}"></script> <!-- jQuery for JavaScript plugins -->
          <script src="{{ asset('js/jquery.easing.min.js') }}"></script> <!-- jQuery for JavaScript plugins -->
          {{-- <script src="js/jquery.easing.min.js"></script> --}}
          <!-- jQuery Easing for smooth scrolling between anchors -->
          <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
          <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
          <script src="{!! asset('js/scripts.js') !!}"></script> <!-- jQuery for JavaScript plugins -->
          {{-- <script src="js/scripts.js"></script>  --}}
          <!-- Custom scripts -->
    </body>
</html>
