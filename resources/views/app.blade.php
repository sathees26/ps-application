<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="icon" type="image/x-icon" href="image/logo/logo-1.png">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/add-cart.css">
        <link rel="stylesheet" href="/css/fontawsome.css">
        <link rel="stylesheet" href="/css/lightbox.min.css">

        <!-- bootstrap links -->
        <link rel="stylesheet" href="/css/font-min.css">
        <link href="/css/Bootstrap-5.0.2-min.css" rel="stylesheet">
        <!-- bootstrap links -->


        <!-- fonts links -->
        <!-- {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}} -->
        <link href="css/googlefonts.css" rel="stylesheet">
        <!-- fonts links -->

        <!-- bootstrap shopping cards css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

         <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">  -->
        <!-- <link href="css/bunnyfonts.css" rel="stylesheet" /> -->

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia


        <script src="/js/main.js"></script>

        <script src="/js/Lottie.js"></script>

        <script src="/js/Bootstrap-5.0.2-min.js"></script>

        <!-- bootstrap shopping card -->
        <!-- {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}} -->
        <script src="/js/jquery.min.js"></script>

        <!-- {{-- <script src="js/jquery.popup.lightbox.min.js"></script> --}} -->


        <!-- {{-- <script>
            const lb = lightbox();
        </script> --}} -->

    </body>

