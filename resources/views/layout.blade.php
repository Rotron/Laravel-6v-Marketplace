<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="4in1 Telecommunications Laravel website project.">
        <meta name="keywords" content="website design, Austin web design, Laravel">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
                 @include('partials.links')
    </head>
    <body>

               <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        @include('partials.navbar')
        
        @include('partials.MobileMenu')

        @yield('content')


        @include('partials.footer')

        @include('partials.quickviewproduct')

    </div>
    <!-- Body main wrapper end -->

    @include('partials.scripts')


    </body>
</html>

