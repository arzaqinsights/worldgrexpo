<!-- Sharp Industrial Hero: Pure Visual Slider -->
<section class="relative h-screen bg-slate-950 overflow-hidden">
    <!-- Background Patterns -->
    <div class="absolute inset-0 z-10 opacity-[0.05] pointer-events-none">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse">
                    <path d="M 60 0 L 0 0 0 60" fill="none" stroke="white" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <!-- Full-Screen Swiper -->
    <div class="swiper hero-swiper h-full w-full">
        <div class="swiper-wrapper h-full">@foreach ($sliders as $slider)@if($slider->image_path)<div class="swiper-slide h-full w-full relative bg-slate-900"><img src="{{ asset($slider->image_path) }}" alt="Slider Image" class="w-full h-full object-cover grayscale-[0.2] hover:grayscale-0 transition-all duration-[2000ms]" loading="eager"><div class="absolute inset-0 bg-gradient-to-b from-slate-950/40 via-transparent to-slate-950/80"></div><div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(2,6,23,0.4)_100%)]"></div></div>@endif @endforeach</div>

        <!-- Minimalist Industrial UI -->
        <div class="absolute bottom-16 right-16 z-20 flex flex-col items-center gap-8">
            <div class="hero-pagination flex flex-col gap-4"></div>
            
            <!-- Vertical Scroll Indicator -->
            <div class="flex flex-col items-center gap-4">
                <span class="text-[9px] font-black text-white/40 uppercase tracking-[0.5em] [writing-mode:vertical-lr] mb-2">Explore</span>
                <div class="w-px h-24 bg-white/10 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1/2 bg-brand-primary animate-[hero-scroll_2s_infinite]"></div>
                </div>
            </div>
        </div>

        <!-- Corner Accents -->
        <div class="absolute top-0 left-0 w-32 h-32 border-l border-t border-white/10 z-20 m-12"></div>
        <div class="absolute bottom-0 right-0 w-32 h-32 border-r border-b border-white/10 z-20 m-12"></div>
    </div>
</section>

@once
    <script>
        (function() {
            let heroSwiper = null;

            function initHeroSwiper() {
                const swiperContainer = document.querySelector('.hero-swiper');
                if (!swiperContainer || swiperContainer.swiper) return;

                const sliderCount = {{ count($sliders ?? []) }};
                
                heroSwiper = new Swiper(swiperContainer, {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: sliderCount > 1,
                    speed: 1000,
                    autoplay: {
                        delay: 2000,
                        disableOnInteraction: false,
                    },
                    grabCursor: true,
                    pagination: {
                        el: '.hero-pagination',
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + ' w-12 h-0.5 bg-white/20 block cursor-pointer hover:bg-white/60 transition-all duration-500"></span>';
                        }
                    }
                });
            }

            // Standard Load
            document.addEventListener('DOMContentLoaded', initHeroSwiper);
            
            // Turbo Drive Load
            document.addEventListener('turbo:load', initHeroSwiper);

            // Cleanup before Turbo caches the page
            document.addEventListener('turbo:before-cache', function() {
                if (heroSwiper && typeof heroSwiper.destroy === 'function') {
                    heroSwiper.destroy(true, true);
                    heroSwiper = null;
                }
            });
        })();
    </script>
    <style>
        .hero-pagination .swiper-pagination-bullet-active {
            width: 48px !important;
            background: #00ff64 !important; /* Brand Primary */
            height: 2px !important;
        }
        @keyframes hero-scroll {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(200%); }
        }
    </style>
@endonce