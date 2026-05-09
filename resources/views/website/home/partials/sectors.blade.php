<section class="section-padding bg-[#fdfdfd] overflow-hidden">
    <div class="container">
        <!-- Modern Heading Structure -->
        <div class="flex flex-col lg:flex-row items-end justify-between gap-10 mb-20">
            <div class="max-w-3xl space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                    Industrial Pillars
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    Strategic <span class="text-brand-primary italic">Global Sectors.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    Driving global commerce through targeted industrial excellence and strategic cross-border networking.
                </p>
            </div>
            <a href="{{ route('sectors.index') }}"
                class="group px-10 py-5 rounded-2xl bg-slate-900 text-white font-black text-sm uppercase tracking-widest transition-all hover:bg-brand-primary shadow-2xl flex items-center gap-3">
                Explore All Sectors
                <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <!-- Premium Swiper Slider -->
        <div class="relative group" x-data="{ loaded: false }" x-intersect="loaded = true">
            <div class="swiper sector-slider !overflow-visible">
                <div class="swiper-wrapper py-10">
                    @foreach(config('sectors.sectors') as $sector)
                        <div class="swiper-slide h-auto">
                            <a href="{{ route('sectors.show', $sector['slug']) }}"
                                class="block relative h-[500px] rounded-[2.5rem] overflow-hidden group/card bg-slate-100 shadow-xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/10">
                                
                                <img src="{{ Str::startsWith($sector['thumbnail'], 'http') ? $sector['thumbnail'] : asset($sector['thumbnail'] ?: 'images/sectors/textile.png') }}"
                                    class="w-full h-full object-cover grayscale group-hover/card:grayscale-0 group-hover/card:scale-110 transition duration-1000"
                                    loading="lazy">

                                <!-- Glassmorphic Overlay -->
                                <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent opacity-80 group-hover/card:opacity-90 transition-opacity duration-500"></div>

                                <!-- Card Content -->
                                <div class="absolute inset-0 p-10 flex flex-col justify-end z-10">
                                    <div class="space-y-4">
                                        <div class="w-12 h-1.5 bg-brand-accent rounded-full transform origin-left transition-all duration-700 group-hover/card:w-full"></div>
                                        
                                        <div class="space-y-1">
                                            <span class="text-brand-accent text-[10px] font-black uppercase tracking-[0.3em] block opacity-70">Sector {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                            <h3 class="text-3xl font-black text-white leading-tight tracking-tighter group-hover/card:text-brand-accent transition-colors">
                                                {{ $sector['title'] }}
                                            </h3>
                                        </div>

                                        <p class="text-sm text-slate-400 font-medium leading-relaxed max-h-0 opacity-0 overflow-hidden group-hover/card:max-h-20 group-hover/card:opacity-100 transition-all duration-700 delay-100">
                                            {{ Str::limit($sector['description'], 100) }}
                                        </p>
                                        
                                        <div class="flex items-center gap-2 text-white text-xs font-bold uppercase tracking-widest opacity-0 group-hover/card:opacity-100 transition-all duration-500 translate-y-4 group-hover/card:translate-y-0">
                                            Explore Details <i class="fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Glow Effect -->
                                <div class="absolute -inset-2 bg-brand-primary/20 blur-2xl opacity-0 group-hover/card:opacity-100 transition-opacity pointer-events-none"></div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Custom Navigation Bullets (Desktop) -->
            <div class="hidden lg:flex justify-center gap-3 mt-12">
                <div class="swiper-pagination !static !w-auto"></div>
            </div>
        </div>
    </div>
</section>

<style>
    .sector-slider .swiper-pagination-bullet {
        width: 40px;
        height: 6px;
        background: #e2e8f0;
        opacity: 1;
        border-radius: 3px;
        transition: all 0.3s;
    }
    .sector-slider .swiper-pagination-bullet-active {
        background: var(--color-brand-primary);
        width: 80px;
    }
</style>
