<section class="section-padding bg-white border-b border-slate-100 overflow-hidden">
    <div class="container">
        <!-- Sharp Heading Structure -->
        <div class="flex flex-col lg:flex-row items-end justify-between gap-12 mb-10">
            <div class="max-w-3xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Industrial Pillars</span>
                    <h2>Strategic <span class="text-brand-primary">Global Sectors.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Driving global commerce through targeted industrial excellence and strategic cross-border networking.
                </p>
            </div>
            <a href="{{ route('sectors.index') }}"
                class="btn-sharp group">
                Explore All Sectors
                <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
            </a>
        </div>

        <!-- Sharp Industrial Slider -->
        <div class="relative">
            <div class="swiper sector-slider !overflow-visible">
                <div class="swiper-wrapper py-6">
                    @foreach(config('sectors.sectors') as $sector)
                        <div class="swiper-slide h-auto">
                            <a href="{{ route('sectors.show', $sector['slug']) }}"
                                class="block relative h-[550px] bg-slate-900 overflow-hidden group/card border border-slate-100 transition-all duration-500">
                                
                                <img src="{{ Str::startsWith($sector['thumbnail'], 'http') ? $sector['thumbnail'] : asset($sector['thumbnail'] ?: 'images/sectors/textile.png') }}"
                                    class="w-full h-full object-cover group-hover/card:scale-110 transition duration-1000 opacity-60 group-hover/card:opacity-40"
                                    loading="lazy">

                                <!-- Sharp Industrial Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent opacity-90"></div>

                                <!-- Card Content -->
                                <div class="absolute inset-0 p-12 flex flex-col justify-end z-10">
                                    <div class="space-y-6">
                                        <div class="flex items-center gap-4">
                                            <span class="text-[10px] font-black text-brand-accent uppercase tracking-[0.3em]">Sector {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                            <div class="h-[1px] flex-1 bg-white/20"></div>
                                        </div>
                                        
                                        <h3 class="text-3xl font-black text-white leading-tight tracking-tighter uppercase group-hover/card:text-brand-accent transition-colors">
                                            {{ $sector['title'] }}
                                        </h3>

                                        <p class="text-[13px] text-slate-300 font-bold uppercase tracking-wider leading-relaxed opacity-0 max-h-0 group-hover/card:max-h-20 group-hover/card:opacity-100 transition-all duration-500 translate-y-4 group-hover/card:translate-y-0">
                                            {{ Str::limit($sector['description'] ?? '', 120) }}
                                        </p>
                                        
                                        <div class="inline-flex items-center gap-4 pt-4 border-t border-white/10 w-full">
                                            <span class="text-[10px] font-black text-white uppercase tracking-widest">Learn More</span>
                                            <div class="w-8 h-8 bg-brand-primary flex items-center justify-center text-white group-hover/card:bg-brand-accent group-hover/card:text-slate-900 transition-all">
                                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Custom Navigation (Sharp) -->
            <div class="flex justify-start gap-4 mt-16 border-t border-slate-100 pt-10">
                <div class="sector-pagination !static !w-auto flex gap-1"></div>
            </div>
        </div>
    </div>
</section>

@once
<script>
    (function() {
        function initSectorSlider() {
            if (document.querySelector('.sector-slider') && !document.querySelector('.sector-slider').swiper) {
                new Swiper('.sector-slider', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    speed: 1000,
                    grabCursor: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    pagination: {
                        el: '.sector-pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + ' w-12 h-1 bg-slate-200 block cursor-pointer transition-all"></span>';
                        },
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 2,
                        },
                        1440: {
                            slidesPerView: 3,
                        }
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', initSectorSlider);
        document.addEventListener('turbo:load', initSectorSlider);
    })();
</script>
<style>
    .sector-pagination .swiper-pagination-bullet-active {
        background: #00ff64 !important; /* Brand Primary */
        width: 48px !important;
    }
</style>
@endonce

