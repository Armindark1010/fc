    <!-- مگامنو -->
    <nav class="fixed top-0 left-0 bg-blue-900 bg-opacity-90 py-4 w-full z-50 flex items-center">
        <div class="logo-container absolute top-0 left-0">
            <img loading="lazy" src="images/logo.png" alt="لوگو" class="logo px-8 ">
        </div>
        <div class="container  mx-auto  px-4 flex justify-between items-center">
            <div class="xl:block hidden">
                <ul class="flex space-x-6 ">
                    <li><a href="{{route('home')}}" class=" px-2 text-white hover:text-yellow-400 opacity-90 hover:opacity-100">صفحه
                            اصلی</a>
                    </li>
                    <li><a href="{{ route('about')}}"
                            class=" px-2 text-white hover:text-yellow-400 opacity-90 hover:opacity-100">درباره
                            ما</a></li>
                    <li class="dropdown relative px-2 ">
                        <a href="#exercises"
                            class="text-white hover:text-yellow-400 opacity-90 hover:opacity-100">تمرینات</a>
                        <ul
                            class="dropdown-menu absolute hidden bg-gray-700 bg-opacity-90 mt-2 py-2 w-48 rounded-lg shadow-lg">
                            <li><a href="#warmup" class="block px-4 py-2 text-white hover:bg-gray-600">گرم کردن</a></li>
                            <li><a href="#technical" class="block px-4 py-2 text-white hover:bg-gray-600">تمرینات
                                    تکنیکی</a></li>
                            <li><a href="#team" class="block px-4 py-2 text-white hover:bg-gray-600">تمرینات تیمی</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#contact" class=" px-2 text-white hover:text-yellow-400 opacity-90 hover:opacity-100">
                            تماس باما
                        </a>
                    </li>
                    <li>
                        <a href="#coach" class=" px-2 text-white hover:text-yellow-400 opacity-90 hover:opacity-100">
                            مربیان
                        </a>
                    </li>
                    <li>
                        <a href="#gallery" class=" px-2 text-white hover:text-yellow-400 opacity-90 hover:opacity-100">
                            گالری تصاویر
                        </a>
                    </li>
                </ul>
            </div>
            <div class="text-2xl px-8 xl:ml-8 font-bold text-yellow-300 animate__animated animate__fadeInDown">مدرسه
                فوتبال کاویان</div>
        </div>
    </nav>
    <div class="menu-toggle fixed bottom-0 left-0 w-full bg-blue-900 bg-opacity-90 md:hidden z-50">
        <div class="flex justify-around py-2">
            <a href="{{route('home')}}" class="text-white hover:text-yellow-400">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9zm8-5.5L4.5 9H8v8H5v2h14v-2h-3V9h3.5L12 3.5z" />
                </svg>
                <span class="block text-xs">خانه</span>
            </a>
            <a href="{{route('about')}}" class="text-white hover:text-yellow-400">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22C7.97 14.43 9.87 14 12 14c2.13 0 4.03.43 5.4 2.98-1.29 1.94-3.5 3.22-6 3.22z" />
                </svg>
                <span class="block text-xs">درباره ما</span>
            </a>
            <a href="#exercises" class="text-white hover:text-yellow-400">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" />
                </svg>
                <span class="block text-xs">تمرینات</span>
            </a>
            <a href="#contact" class="text-white hover:text-yellow-400">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z" />
                </svg>
                <span class="block text-xs">تماس با ما</span>
            </a>
        </div>
    </div>