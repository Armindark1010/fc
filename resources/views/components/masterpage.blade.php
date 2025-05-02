<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>مدرسه فوتبال کاویان</title>
        <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
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
        <div>
            {{$slot}}
        </div>
        @include('components.footer')


        {{-- script --}}
            <!-- Swiper JS -->
    <script src="js/swiper/swiper-bundle.min.js"></script>
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

    <script>
        // تنظیمات Swiper اسلایدر
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        // تنظیمات swiper تبلیغات


        var miniSwiper = new Swiper(".miniSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            // effect: "flip",
            // grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2600,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        // gallery swipper

        var gallerySwiper = new Swiper(".gallerySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 2800,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

    </script>
</body>
</html>