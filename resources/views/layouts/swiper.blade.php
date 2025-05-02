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