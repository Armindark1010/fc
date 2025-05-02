<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>مدرسه فوتبال کاویان</title>
        <!-- Swiper CSS -->
        <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ asset('css/animate.css/4.1.1/animate.min.css') }}" rel="stylesheet">
        <!-- فونت زیبا -->
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
        <!-- آیکون‌ها -->
        <link href="{{ asset('css/font-awesome/css/all.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <link href="{{ asset('./css/anicollection.css') }}" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="gradient-bg text-white">
        @include('components.navbar')
        <section class="my-8 pt-8">
            @yield('content')
        </section>
        @include('components.footer')


        {{-- script --}}

</body>
</html>