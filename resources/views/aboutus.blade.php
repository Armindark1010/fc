@extends('layouts.masterpage')
@section('content')
    <div>
        <div class="text-center mb-16 relative">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">مدرسه فوتبال کاویان</h1>
            <div class="w-24 h-2 bg-yellow-500 mx-auto rounded-full"></div>
            <p class="text-xl text-gray-600 mt-6">پرورش استعدادهای فوتبال نسل آینده</p>
        </div>
    
        <!-- بخش معرفی با تصویر و متن -->
        <div class="flex flex-col lg:flex-row mx-4 lg:mx-16 gap-8 mb-20">
            <!-- تصویر با افکت hover -->
            <div class="lg:w-1/2 relative group overflow-hidden rounded-2xl shadow-xl h-96">
                <img src="{{ asset('images/about_us_img.jpg') }}" 
                     class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                     alt="تمرینات مدرسه فوتبال کاویان">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                    <h3 class="text-white text-2xl font-bold">از رویا تا واقعیت</h3>
                </div>
            </div>
            
            <!-- متن معرفی -->
            <div class="lg:w-1/2 space-y-6">
                <h2 class="text-3xl font-bold text-gray-800 border-r-4 border-yellow-500 pr-4">درباره ما</h2>
                <p class="text-gray-700 leading-relaxed text-lg">
                    مدرسه فوتبال کاویان در سال ۱۳۹۰ با هدف کشف و پرورش استعدادهای جوان فوتبال ایران تأسیس شد. ما با بیش از یک دهه تجربه درخشان، مفتخریم که بستری امن و حرفه‌ای برای رشد ورزشی و شخصیتی نوجوانان فراهم کرده‌ایم.
                </p>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-yellow-500">
                        <h4 class="font-bold text-gray-800">مربیان مجرب</h4>
                        <p class="text-gray-600 text-sm">مربیان دارای مدارک AFC و FIFA</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-yellow-500">
                        <h4 class="font-bold text-gray-800">زمین‌های استاندارد</h4>
                        <p class="text-gray-600 text-sm">۳ زمین چمن طبیعی و مصنوعی</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-yellow-500">
                        <h4 class="font-bold text-gray-800">رشد شخصیتی</h4>
                        <p class="text-gray-600 text-sm">توجه به اخلاق ورزشی و کار تیمی</p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg border-l-4 border-yellow-500">
                        <h4 class="font-bold text-gray-800">استعدادهای درخشان</h4>
                        <p class="text-gray-600 text-sm">۲۵ بازیکن به تیم‌های ملی معرفی شدند</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative mx-4 lg:mx-16 mb-20 rounded-2xl overflow-hidden shadow-2xl">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30 z-10"></div>
            
            <!-- عکس با سایز بزرگ‌تر -->
            <img src="{{ asset('images/Stadium.jpg') }}" 
                 class="w-full h-[600px] object-center object-cover"
                 alt="استادیوم مدرسه فوتبال کاویان">
            
            <div class="absolute inset-0 z-20 flex items-center">
                <div class="container mx-auto px-8">
                    <div class="max-w-md">
                        <h2 class="text-4xl font-bold text-white mb-4">استادیوم اختصاصی کاویان</h2>
                        <div class="w-16 h-1 bg-yellow-400 mb-6"></div>
                        <p class="text-white/90 text-lg leading-relaxed">
                            زمین اختصاصی کاویان با چمن طبیعی و نورپردازی استاندارد، میزبان تمرینات حرفه‌ای و مسابقات رسمی آکادمی است.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-6">
                            <div class="bg-yellow-400/90 text-gray-900 px-4 py-2 rounded-full text-sm font-medium">گنجایش ۵۰۰ نفر</div>
                            <div class="bg-yellow-400/90 text-gray-900 px-4 py-2 rounded-full text-sm font-medium">سیستم نورپردازی حرفه‌ای</div>
                            <div class="bg-yellow-400/90 text-gray-900 px-4 py-2 rounded-full text-sm font-medium">رختکن مجهز</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection