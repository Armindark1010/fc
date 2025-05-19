@extends('layouts.masterpage')

@section('content')

<div class="py-12" x-data="playerFilterComponent()" x-cloak>
<!-- عنوان -->
<div class="text-center mb-12">
    <h2 class="text-3xl font-extrabold text-gray-900">لیست بازیکنان تیم ملی ایران</h2>
    <p class="mt-4 text-lg text-gray-600">بازیکنان را بر اساس پست آنها فیلتر کنید</p>
</div>

<!-- فیلترها -->
<div class="flex flex-wrap justify-center gap-3 mb-12">
    <button 
        @click="activeFilter = 'all'"
        :class="activeFilter === 'all' ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-600'"
        class="px-6 py-3 rounded-full border-2 border-green-600 hover:bg-green-50 transition-all flex items-center"
    >
        همه بازیکنان
    </button>

    <template x-for="category in categories" :key="category.id">
        <button 
            @click="activeFilter = category.id"
            :class="activeFilter === category.id ? 'bg-green-600 text-white shadow-lg' : 'bg-white text-green-600'"
            class="px-6 py-3 rounded-full border-2 border-green-600 hover:bg-green-50 transition-all flex items-center"
        >
            <span x-text="category.name"></span>
        </button>
    </template>
</div>

<!-- بازیکنان -->
```

   <div class="grid grid-cols-1 m-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        <template x-for="(player, index) in filteredPlayers" :key="player.id">
            <button type="button" class="focus:outline-none">
                <div 
                    :class="index % 2 === 0 ? 'bg-[#1d3b53]' : 'bg-[#e2b042]'"
                    class="rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-all relative h-96 group/card"
                >
                    <div class="overflow-hidden inset-0 absolute z-0">
                        <img 
                            :src="player.image" 
                            :alt="player.firstName + ' ' + player.lastName"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                        >
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4"></div>
                    </div>

```
                <div class="p-6 z-[1] absolute h-32 bottom-0 right-0 left-0 transition-all group-hover/card:h-2/3 duration-500 bg-gradient-to-t from-black/90 to-transparent">
                    <div x-text="player.number" class="text-white/50 text-4xl text-center font-bold"></div>
                    <div class="flex justify-center items-end gap-2">
                        <h3 class="text-xl text-center font-bold text-white mb-2" x-text="player.firstName"></h3>
                        <h6 class="text-xl text-center font-bold text-white mb-2" x-text="player.lastName"></h6>
                    </div>
                    <div class="text-center">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-white rounded-full"
                            :class="index % 2 === 0 ? 'bg-[#e2b042]' : 'bg-[#1d3b53]'"
                            x-text="player.position">
                        </span>
                    </div>
                    <hr class="my-2 border-white/20">
                    <div class="flex justify-center items-center gap-1">
                        <div class="flex items-center text-white/80 mb-3" x-text="player.ageCategory"></div>
                        <div class="flex items-center text-white/80 mb-4" x-text="player.age + ' سال'"></div>
                    </div>

                    <p class="text-white/80 line-clamp-2 text-sm" x-text="player.description"></p>
                </div>
            </div>
        </button>
    </template>
</div> 
<script>
    function playerFilterComponent() {
        return {
            activeFilter: 'all',
            // selectedPlayer: null,
            categories: [
                { id: 'gk', name: 'دروازه بان' },
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
                    lastName: 'دونا룸ما',
                    position: 'دروازه بان',
                    number: 1,
                    age: 25,
                    ageCategory: 'امید',
                    description: 'دروازه بان ایتالیایی با واکنش‌های سریع.',
                    image: 'https://upload.wikimedia.org/wikipedia/commons/4/40/Gianluigi_Donnarumma_2019.jpg',
                    categoryId: 'gk'
                },
                {
                    id: 8,
                    firstName: 'آلیسون',
                    lastName: 'بکر',
                    position: 'دروازه بان',
                    number: 1,
                    age: 30,
                    ageCategory: 'جوان',
                    description: 'دروازه بان برزیلی با مهارهای عالی.',
                    image: 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Alisson_in_2022.jpg',
                    categoryId: 'gk'
                },
            ],

            get filteredPlayers() {
                if (this.activeFilter === 'all') {
                    return this.players;
                }
                return this.players.filter(player => player.categoryId === this.activeFilter);
            },
        }
    }
</script>
</div>
@endsection 
