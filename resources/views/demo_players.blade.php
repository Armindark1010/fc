@extends('layouts.masterpage')

@section('content')
<div class="py-12 px-4 max-w-7xl mx-auto" x-data="playerFilterComponent()" x-cloak>

    <!-- عنوان -->
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-900 dark:text-white">لیست بازیکنان تیم ملی ایران</h2>
        <p class="mt-2 text-lg text-gray-600 dark:text-gray-300">بازیکنان را بر اساس پست فیلتر کنید</p>
    </div>

    <!-- فیلترها -->
    <div class="flex flex-wrap justify-center gap-3 mb-10">
        <button 
            @click="activeFilter = 'all'"
            :class="activeFilter === 'all' ? 'bg-green-600 text-white shadow' : 'bg-white text-green-600 dark:bg-gray-700 dark:text-white'"
            class="px-5 py-2 rounded-full border-2 border-green-600 hover:bg-green-50 dark:hover:bg-gray-600 transition-all"
        >
            همه بازیکنان
        </button>

        <template x-for="category in categories" :key="category.id">
            <button 
                @click="activeFilter = category.id"
                :class="activeFilter === category.id ? 'bg-green-600 text-white shadow' : 'bg-white text-green-600 dark:bg-gray-700 dark:text-white'"
                class="px-5 py-2 rounded-full border-2 border-green-600 hover:bg-green-50 dark:hover:bg-gray-600 transition-all"
            >
                <span x-text="category.name"></span>
            </button>
        </template>
    </div>

    <!-- بازیکنان -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <template x-for="(player, index) in filteredPlayers" :key="player.id">
            <div 
                class="rounded-xl shadow-md overflow-hidden group relative cursor-pointer transition-all hover:scale-105 bg-white dark:bg-gray-800"
            >
                <img 
                    :src="player.image" 
                    :alt="player.firstName + ' ' + player.lastName"
                    class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
                >
                <div class="p-4 space-y-2">
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white" x-text="player.firstName + ' ' + player.lastName"></h3>
                        <span class="text-sm text-gray-500 dark:text-gray-300" x-text="player.position"></span>
                    </div>
                    <div class="flex justify-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span x-text="'شماره ' + player.number"></span>
                        <span x-text="player.age + ' ساله'"></span>
                    </div>
                    <p class="text-sm text-gray-700 dark:text-gray-300 line-clamp-2" x-text="player.description"></p>
                    <div class="mt-2 text-center">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-white rounded-full"
                            :class="index % 2 === 0 ? 'bg-yellow-500' : 'bg-blue-800'"
                            x-text="player.ageCategory">
                        </span>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <!-- اسکریپت -->
    <script>
        function playerFilterComponent() {
            return {
                activeFilter: 'all',
                categories: [
                    { id: 'gk', name: 'دروازه‌بان' },
                    { id: 'cb', name: 'مدافع' },
                    { id: 'cmf', name: 'هافبک' },
                    { id: 'cf', name: 'مهاجم' }
                ],
                players: [
                    {
                        id: 1,
                        firstName: 'لیونل',
                        lastName: 'مسی',
                        position: 'مهاجم',
                        number: 10,
                        age: 36,
                        ageCategory: 'نوجوانان',
                        description: 'اسطوره فوتبال آرژانتین با دریبل‌های مرگبار.',
                        image: 'https://news-cdn.varzesh3.com/pictures/2025/04/21/C/uypsqeyn1.webp?w=800',
                        categoryId: 'cf'
                    },
                    {
                        id: 2,
                        firstName: 'کریستیانو',
                        lastName: 'رونالدو',
                        position: 'مهاجم',
                        number: 7,
                        age: 39,
                        ageCategory: 'نونهالان',
                        description: 'گلزن پرتغالی با بدنی قدرتمند و ضربات سر کشنده.',
                        image: 'https://upload.wikimedia.org/wikipedia/commons/8/8c/Cristiano_Ronaldo_2018.jpg',
                        categoryId: 'cf'
                    },
                    {
                        id: 3,
                        firstName: 'کوین',
                        lastName: 'دی‌بروینه',
                        position: 'هافبک',
                        number: 17,
                        age: 33,
                        ageCategory: 'جوان',
                        description: 'پاسور بلژیکی با بینش تاکتیکی بالا.',
                        image: 'https://media.khabarvarzeshi.com/d/2024/07/21/4/342433.jpg?ts=1721588353000',
                        categoryId: 'cmf'
                    },
                    {
                        id: 4,
                        firstName: 'لوکا',
                        lastName: 'مودریچ',
                        position: 'هافبک',
                        number: 10,
                        age: 38,
                        ageCategory: 'امید',
                        description: 'استاد کنترل بازی و پاس‌های دقیق.',
                        image: 'https://newsmedia.tasnimnews.com/Tasnim/Uploaded/Image/1398/04/05/1398040513181428199173744.jpg',
                        categoryId: 'cmf'
                    },
                    {
                        id: 5,
                        firstName: 'وینسنت',
                        lastName: 'کمپانی',
                        position: 'مدافع',
                        number: 4,
                        age: 36,
                        ageCategory: 'جوان',
                        description: 'کاپیتان و مدافع قوی بلژیکی.',
                        image: 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Vincent_Kompany_2014.jpg',
                        categoryId: 'cb'
                    },
                    {
                        id: 6,
                        firstName: 'سرخیو',
                        lastName: 'راموس',
                        position: 'مدافع',
                        number: 4,
                        age: 37,
                        ageCategory: 'جوان',
                        description: 'مدافع با تجربه و گلزن سرزنی.',
                        image: 'https://upload.wikimedia.org/wikipedia/commons/5/53/Sergio_Ramos_2018.jpg',
                        categoryId: 'cb'
                    },
                    {
                        id: 7,
                        firstName: 'جانلوئیجی',
                        lastName: 'دونا‌رومّا',
                        position: 'دروازه‌بان',
                        number: 1,
                        age: 25,
                        ageCategory: 'امید',
                        description: 'دروازه‌بان ایتالیایی با واکنش‌های سریع.',
                        image: 'https://upload.wikimedia.org/wikipedia/commons/4/40/Gianluigi_Donnarumma_2019.jpg',
                        categoryId: 'gk'
                    },
                    {
                        id: 8,
                        firstName: 'آلیسون',
                        lastName: 'بکر',
                        position: 'دروازه‌بان',
                        number: 1,
                        age: 30,
                        ageCategory: 'جوان',
                        description: 'دروازه‌بان برزیلی با مهارهای عالی.',
                        image: 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Alisson_in_2022.jpg',
                        categoryId: 'gk'
                    },
                ],
                get filteredPlayers() {
                    return this.activeFilter === 'all'
                        ? this.players
                        : this.players.filter(player => player.categoryId === this.activeFilter);
                }
            }
        }
    </script>
</div>
@endsection
