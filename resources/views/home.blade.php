@extends('layouts.masterpage')
@section('content')
<div>

    <!-- اسلایدر -->
    <section class="swiper-container animate__animated animate__fadeIn">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- <div class="swiper-slide  py-1">
                    <img  loading="lazy" src="images/slider/slide-1.jpg" alt="تصویر 1" class="w-full h-[250px] h-auto">
                </div> -->
                <div class="swiper-slide  xl:py-1 py-8">
                    <img loading="lazy" src="images/slider/slide-2.jpg" alt="تصویر 2" class="w-full h-auto">
                </div>
                <div class="swiper-slide  xl:py-1 py-8">
                    <img loading="lazy" src="images/slider/slide-4.jpg" alt="تصویر 2" class="w-full h-auto">
                </div>
                <!-- <div class="swiper-slide  py-1">
                    <img  loading="lazy" src="images/slider/slide-3.jpg" alt="تصویر 3" class="w-full h-[250px] h-auto">
                </div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- درباره ما -->
    <section id="about" class="container mx-auto px-4 py-12">
        <h2
            class="text-3xl font-bold text-center text-yellow-400 animate__animated animate__fadeInDown py-2 border-b border-gray-300">
            درباره ما</h2>
        <p class="text-gray-300 leading-relaxed text-center max-w-2xl mx-auto animate__animated animate__fadeInUp">
            مدرسه فوتبال کاویان با هدف پرورش استعدادهای جوان در زمینه فوتبال تأسیس شده است. ما با بهره‌گیری از
            مربیان
            مجرب و برنامه‌های آموزشی متنوع، سعی در ایجاد محیطی شاد و آموزشی برای کودکان داریم.
        </p>
    </section>
    <!-- </div> -->

    <!-- برنامه‌های آموزشی -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2
                class="text-3xl font-bold text-center text-yellow-400 animate__animated animate__fadeIn py-2 border-b border-gray-300">
                برنامه‌های
                آموزشی
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                <div
                    class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInLeft">
                    <i class="fas fa-futbol text-4xl text-yellow-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">مبتدی</h3>
                    <p class="text-gray-300">برنامه‌های آموزشی برای کودکان مبتدی که تازه وارد دنیای فوتبال شده‌اند.
                    </p>
                </div>
                <div class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInUp">
                    <i class="fas fa-trophy text-4xl text-yellow-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">پیشرفته</h3>
                    <p class="text-gray-300">برنامه‌های پیشرفته برای کودکان با تجربه‌تر که می‌خواهند مهارت‌های خود
                        را
                        ارتقا دهند.</p>
                </div>
                <div
                    class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInRight">
                    <i class="fas fa-users text-4xl text-yellow-400 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">مسابقات</h3>
                    <p class="text-gray-300">شرکت در مسابقات داخلی و خارجی برای تقویت روحیه رقابتی و تیمی.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- تمرینات -->
    <section id="exercises" class="container mx-auto px-4 py-12">
        <h2
            class="text-3xl font-bold text-center text-yellow-400 animate__animated animate__fadeIn py-2 border-b border-gray-300">
            تمرینات ما</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            <!-- تمرین ۱ -->
            <div id="warmup"
                class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInLeft">
                <img loading="lazy" src="./images/training-children-jump.jpg" alt="گرم کردن"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">گرم کردن</h3>
                <p class="text-gray-300">تمرینات گرم کردن برای آماده‌سازی بدن کودکان قبل از شروع تمرینات اصلی.</p>
            </div>
            <!-- تمرین ۲ -->
            <div id="technical"
                class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInUp">
                <img loading="lazy" src="./images/pict1-1.jpg" alt="تمرینات تکنیکی"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">تمرینات تکنیکی</h3>
                <p class="text-gray-300">تمرینات تکنیکی برای بهبود کنترل توپ، پاس‌کاری و شوت‌زنی.</p>
            </div>
            <!-- تمرین ۳ -->
            <div id="team"
                class="bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow  animate__animated animate__fadeInRight">
                <img loading="lazy" src="./images/sport-page-banners-2.png" alt="تمرینات تیمی"
                    class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">تمرینات تیمی</h3>
                <p class="text-gray-300">تمرینات تیمی برای تقویت همکاری و روحیه گروهی در کودکان.</p>
            </div>
        </div>
    </section>

    <!-- مربیان -->
    <section id="coach" class="py-12">
        <div class="container mx-auto px-4">
            <h2
                class="text-3xl font-bold text-center text-yellow-400 animate__animated animate__fadeIn py-2 border-b border-gray-300">
                مربیان ما
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8 ">
                <div
                    class="animate__animated animate__fadeInLeft bg-yellow-300 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-gray-900">
                    <!-- Card DailyDev -->
                    <div class="w-[340px] rounded-[42px] bg-white border-8 relative">
                        <!-- Contenedor Imagen Colocar Imagen -->
                        <div class="flex flex-col">
                            <div class="rounded-[32px] px-5 py-6 coachItems">
                                <img loading="lazy"
                                    class="relative w-36 h-36 mb-8 bg-black z-20 rounded-[42px]  border-8 border-white -rotate-12"
                                    src="./images/coach/01.jpg" />
                            </div>
                            <!-- Contenedor Time -->
                            <div
                                class="bg-gray-800 py-4 shadow-2xl rounded-2xl absolute top-44 left-1/2 transform -translate-x-1/2 w-full z-10">
                                <div
                                    class="h1 text-white text-center justify-center text-lg font-bold flex justify-between px-6">
                                    مربی اول تیم
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 py-4 border-b mx-6 border-gray-300 text-gray-800">
                            <p class="text-gray-800 text-sm">
                                کارشناس ارشد تربیت بدنی
                                <span class="text-gray-400">
                                    (1389)
                                </span>
                            </p>
                        </div>
                        <!-- List Tags -->
                        <ul class="flex flex-wrap gap-2 px-6 py-2 border-b text-gray-800 justify-center">
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Instagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <g fill="none">
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                        <path fill="#fff"
                                            d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" />
                                        <defs>
                                            <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fd5" />
                                                <stop offset=".1" stop-color="#fd5" />
                                                <stop offset=".5" stop-color="#ff543e" />
                                                <stop offset="1" stop-color="#c837ab" />
                                            </radialGradient>
                                            <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3771c8" />
                                                <stop offset=".128" stop-color="#3771c8" />
                                                <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </g>
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Telegram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <defs>
                                        <linearGradient id="logosTelegram0" x1="50%" x2="50%" y1="0%" y2="100%">
                                            <stop offset="0%" stop-color="#2aabee" />
                                            <stop offset="100%" stop-color="#229ed9" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosTelegram0)"
                                        d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.04 128.04 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51s-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0" />
                                    <path fill="#fff"
                                        d="M57.94 126.648q55.98-24.384 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072" />
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 258">
                                    <defs>
                                        <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#1faf38" />
                                            <stop offset="100%" stop-color="#60d669" />
                                        </linearGradient>
                                        <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#f9f9f9" />
                                            <stop offset="100%" stop-color="#fff" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosWhatsappIcon0)"
                                        d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                                    <path fill="url(#logosWhatsappIcon1)"
                                        d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                                    <path fill="#fff"
                                        d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="animate__animated animate__fadeInUp bg-yellow-300 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-gray-900">
                    <!-- Card DailyDev -->
                    <div class="w-[340px] rounded-[42px] bg-white border-8 relative">
                        <!-- Contenedor Imagen Colocar Imagen -->
                        <div class="flex flex-col">
                            <div class="rounded-[32px] px-5 py-6 coachItems">
                                <img loading="lazy"
                                    class="relative w-36 h-36 mb-8 bg-black z-20 rounded-[42px]  border-8 border-white -rotate-12"
                                    src="./images/coach/02.jpg" />
                            </div>
                            <!-- Contenedor Time -->
                            <div
                                class="bg-gray-800 py-4 shadow-2xl rounded-2xl absolute top-44 left-1/2 transform -translate-x-1/2 w-full z-10">
                                <div
                                    class="h1 text-white text-center justify-center text-lg font-bold flex justify-between px-6">
                                    مربی دوم تیم
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 py-4 border-b mx-6 border-gray-300 text-gray-800">
                            <p class="text-gray-800 text-sm">
                                کارشناس ارشد تربیت بدنی
                                <span class="text-gray-400">
                                    (1389)
                                </span>
                            </p>
                        </div>
                        <!-- List Tags -->
                        <ul class="flex flex-wrap gap-2 px-6 py-2 border-b text-gray-800 justify-center">
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Instagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <g fill="none">
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                        <path fill="#fff"
                                            d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" />
                                        <defs>
                                            <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fd5" />
                                                <stop offset=".1" stop-color="#fd5" />
                                                <stop offset=".5" stop-color="#ff543e" />
                                                <stop offset="1" stop-color="#c837ab" />
                                            </radialGradient>
                                            <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3771c8" />
                                                <stop offset=".128" stop-color="#3771c8" />
                                                <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </g>
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Telegram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <defs>
                                        <linearGradient id="logosTelegram0" x1="50%" x2="50%" y1="0%" y2="100%">
                                            <stop offset="0%" stop-color="#2aabee" />
                                            <stop offset="100%" stop-color="#229ed9" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosTelegram0)"
                                        d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.04 128.04 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51s-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0" />
                                    <path fill="#fff"
                                        d="M57.94 126.648q55.98-24.384 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072" />
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 258">
                                    <defs>
                                        <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#1faf38" />
                                            <stop offset="100%" stop-color="#60d669" />
                                        </linearGradient>
                                        <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#f9f9f9" />
                                            <stop offset="100%" stop-color="#fff" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosWhatsappIcon0)"
                                        d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                                    <path fill="url(#logosWhatsappIcon1)"
                                        d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                                    <path fill="#fff"
                                        d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="animate__animated animate__fadeInRight bg-yellow-300 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-gray-900">
                    <!-- Card DailyDev -->
                    <div class="w-[340px] rounded-[42px] bg-white border-8 relative">
                        <!-- Contenedor Imagen Colocar Imagen -->
                        <div class="flex flex-col">
                            <div class="rounded-[32px] px-5 py-6 coachItems">
                                <img loading="lazy"
                                    class="relative w-36 h-36 mb-8 bg-black z-20 rounded-[42px]  border-8 border-white -rotate-12"
                                    src="./images/coach/03.jpg" />
                            </div>
                            <!-- Contenedor Time -->
                            <div
                                class="bg-gray-800 py-4 shadow-2xl rounded-2xl absolute top-44 left-1/2 transform -translate-x-1/2 w-full z-10">
                                <div
                                    class="h1 text-white text-center justify-center text-lg font-bold flex justify-between px-6">
                                    مربی سوم تیم
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 py-4 border-b mx-6 border-gray-300 text-gray-800">
                            <p class="text-gray-800 text-sm">
                                کارشناس ارشد تربیت بدنی
                                <span class="text-gray-400">
                                    (1389)
                                </span>
                            </p>
                        </div>
                        <!-- List Tags -->
                        <ul class="flex flex-wrap gap-2 px-6 py-2 border-b text-gray-800 justify-center">
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Instagram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <g fill="none">
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60" />
                                        <rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60" />
                                        <path fill="#fff"
                                            d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334" />
                                        <defs>
                                            <radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fd5" />
                                                <stop offset=".1" stop-color="#fd5" />
                                                <stop offset=".5" stop-color="#ff543e" />
                                                <stop offset="1" stop-color="#c837ab" />
                                            </radialGradient>
                                            <radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1"
                                                gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)"
                                                gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3771c8" />
                                                <stop offset=".128" stop-color="#3771c8" />
                                                <stop offset="1" stop-color="#60f" stop-opacity="0" />
                                            </radialGradient>
                                        </defs>
                                    </g>
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <!-- #Telegram -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256">
                                    <defs>
                                        <linearGradient id="logosTelegram0" x1="50%" x2="50%" y1="0%" y2="100%">
                                            <stop offset="0%" stop-color="#2aabee" />
                                            <stop offset="100%" stop-color="#229ed9" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosTelegram0)"
                                        d="M128 0C94.06 0 61.48 13.494 37.5 37.49A128.04 128.04 0 0 0 0 128c0 33.934 13.5 66.514 37.5 90.51C61.48 242.506 94.06 256 128 256s66.52-13.494 90.5-37.49c24-23.996 37.5-56.576 37.5-90.51s-13.5-66.514-37.5-90.51C194.52 13.494 161.94 0 128 0" />
                                    <path fill="#fff"
                                        d="M57.94 126.648q55.98-24.384 74.64-32.152c35.56-14.786 42.94-17.354 47.76-17.441c1.06-.017 3.42.245 4.96 1.49c1.28 1.05 1.64 2.47 1.82 3.467c.16.996.38 3.266.2 5.038c-1.92 20.24-10.26 69.356-14.5 92.026c-1.78 9.592-5.32 12.808-8.74 13.122c-7.44.684-13.08-4.912-20.28-9.63c-11.26-7.386-17.62-11.982-28.56-19.188c-12.64-8.328-4.44-12.906 2.76-20.386c1.88-1.958 34.64-31.748 35.26-34.45c.08-.338.16-1.598-.6-2.262c-.74-.666-1.84-.438-2.64-.258c-1.14.256-19.12 12.152-54 35.686c-5.1 3.508-9.72 5.218-13.88 5.128c-4.56-.098-13.36-2.584-19.9-4.708c-8-2.606-14.38-3.984-13.82-8.41c.28-2.304 3.46-4.662 9.52-7.072" />
                                </svg>
                            </li>
                            <li class="rounded-lg border border-gray-500 px-2 py-1 text-xs font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 258">
                                    <defs>
                                        <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#1faf38" />
                                            <stop offset="100%" stop-color="#60d669" />
                                        </linearGradient>
                                        <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#f9f9f9" />
                                            <stop offset="100%" stop-color="#fff" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosWhatsappIcon0)"
                                        d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                                    <path fill="url(#logosWhatsappIcon1)"
                                        d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                                    <path fill="#fff"
                                        d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- گالری تصاویر -->
    <section class="py-12 " id="gallery">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-yellow-400 py-2 border-b border-gray-300">
                گالری تصاویر
            </h2>
            <div class="swiper gallerySwiper mt-4 image-container">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300 ">
                        <img loading="lazy" src="./images/gallery/01.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/slider/slide-1.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/03.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/04.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/01.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/02.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/03.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/04.jpg" />
                    </div>
                    <div class="swiper-slide bg-gray-800 bg-opacity-90 p-4 rounded-lg card-shadow hover:bg-yellow-300">
                        <img loading="lazy" src="./images/gallery/01.jpg" />
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <!-- تبلیغات -->

    <!-- <section class="py-12 hidden">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-yellow-400 py-2 border-b border-gray-300">
                تبلیغات
            </h2>
            <div class="swiper miniSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img loading="lazy" src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        <div class="bg-blue-200 absolute  left-0 right-0 bottom-0 text-center text-black p-4">
                            <div class="text-center" data-swiper-parallax="-100">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> -->






    @include('layouts.swiper')
</div>
@endsection
