@php
    $defaultImages = [
        'images/home/slide-0.jpeg',
        'images/home/award-1.jpeg',
        'images/home/slide-1.webp',
        'images/home/slide-3.webp',
        'images/home/slide-4.webp',
        'images/home/slide-5.webp',
        'images/home/slide-6.webp',
        'images/home/slide-7.webp',
        'images/home/slide-9.webp',
        'images/home/slide-10.webp',
        'images/home/slide-12.webp'
    ];

    $slides = $sliders->count() > 0
        ? $sliders->pluck('image_path')->toArray()
        : $defaultImages;
@endphp
<!-- Premium World Grexpo Hero Slider Section -->
<section class="relative h-dvh w-full bg-slate-950 border-b border-brand-accent/30 overflow-hidden">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper h-full w-full absolute inset-0">
        <div class="swiper-wrapper">
            @foreach ($slides as $image)
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-linear-to-b from-slate-950/80 via-slate-950/40 to-slate-950/90 z-10"></div>
                    <img src="{{ asset($image) }}" alt="World Grexpo Slider" class="swiper-lazy w-full h-full object-cover grayscale-[20%] contrast-[110%]">
                </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination !bottom-12"></div>
    </div>

    <!-- Hero Content Overlay -->
    <div class="absolute inset-0 z-20 flex items-center">
        <div class="container w-full">
            <div class="max-w-4xl">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-accent/10 border-l-4 border-brand-accent mb-8 animate-fade-in">
                    <span class="text-brand-accent text-xs font-black tracking-[0.2em] uppercase">Make in India - Make for World</span>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white leading-[0.95] mb-8 tracking-tighter uppercase italic drop-shadow-2xl">
                    6th Global <span class="text-brand-accent">Sustainability</span> <br> 
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-white to-white/40">Excellence Recognition</span>
                </h1>

                <p class="text-lg md:text-xl text-slate-300 mb-12 max-w-2xl leading-relaxed font-light">
                    Join the premier expo dedicated to Green Hydrogen, Carbon Neutrality, and Sustainable Industrial Evolution. 2025 November 6th - 9th | India Expo Centre.
                </p>

                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="{{ route('join.index') }}"
                        class="bg-brand-accent hover:bg-white text-brand-primary-dark px-10 py-5 rounded-sm font-black text-sm uppercase tracking-widest transition-all shadow-[0_0_20px_rgba(170,204,0,0.3)] hover:shadow-[0_0_30px_rgba(170,204,0,0.5)] transform hover:-translate-y-1">
                        Register Now
                    </a>
                    <a href="{{ route('sectors.index') }}"
                        class="bg-brand-navy hover:bg-brand-accent hover:text-brand-primary-dark text-white px-10 py-5 rounded-sm font-black text-sm uppercase tracking-widest transition-all">
                        Explore Sectors
                    </a>
                </div>

                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-12 border-t border-white/10 pt-10">
                    <div class="flex flex-col gap-1">
                        <span class="text-4xl font-black text-white tracking-tighter italic">100K+</span>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Global Reach</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-4xl font-black text-white tracking-tighter italic">20+</span>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Global Summits</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-4xl font-black text-white tracking-tighter italic">{{ count(config('sectors.sectors')) }}</span>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Industry Sectors</span>
                    </div>
                    <div class="flex flex-col gap-1">
                        <span class="text-4xl font-black text-white tracking-tighter italic">30+</span>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-widest">Partner Nations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
