<!-- Rebuilt Hero Section: Premium Industrial Excellence -->
<section class="relative min-h-screen flex items-center pt-20 overflow-hidden bg-slate-950">
    <!-- Dynamic Swiper Background -->
    <div class="absolute inset-0 z-0">
        <div class="swiper hero-swiper h-full w-full">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="absolute inset-0 bg-linear-to-b from-slate-950/90 via-slate-950/40 to-slate-950/95 z-10"></div>
                        <img src="<?php echo e(asset($image)); ?>" alt="Slider Image" class="w-full h-full object-cover">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- Pagination Bullets -->
            <div class="swiper-pagination !bottom-10 !left-auto !right-10 !w-auto flex flex-col gap-2"></div>
        </div>
    </div>

    <!-- Content Layer -->
    <div class="container relative z-20" x-data="{ loaded: false }" x-init="setTimeout(() => loaded = true, 100)">
        <div class="max-w-4xl space-y-8">
            <!-- Badge -->
            <div class="inline-flex items-center gap-3 px-5 py-2 rounded-full bg-brand-accent/10 border border-brand-accent/20 text-brand-accent text-[11px] font-black uppercase tracking-[0.2em]"
                x-show="loaded" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 -translate-y-4">
                <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                Make in India • For the World
            </div>

            <!-- Main Heading -->
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-black text-white leading-[0.85] tracking-tighter"
                x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-300" x-transition:enter-start="opacity-0 -translate-x-10">
                INDUSTRIAL<br>
                <span class="text-brand-accent italic">EXCELLENCE</span><br>
                REDEFINED.
            </h1>

            <p class="text-xl md:text-2xl text-slate-300 leading-relaxed max-w-2xl font-medium"
                x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-500" x-transition:enter-start="opacity-0 translate-y-10">
                Join the global ecosystem of sustainability, innovation, and industrial growth. 
                <span class="text-white">India Expo Centre | 2026.</span>
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-5 pt-4"
                x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-700" x-transition:enter-start="opacity-0 scale-95">
                <a href="<?php echo e(route('join.index')); ?>" 
                    class="px-12 py-5 rounded-2xl bg-brand-primary text-white font-black text-sm uppercase tracking-widest shadow-2xl shadow-brand-primary/40 hover:bg-brand-primary-dark hover:-translate-y-1 transition-all">
                    Register Now
                </a>
                <a href="<?php echo e(route('sectors.index')); ?>" 
                    class="px-12 py-5 rounded-2xl bg-white/10 backdrop-blur-md text-white font-black text-sm uppercase tracking-widest border border-white/20 hover:bg-white hover:text-brand-primary-dark hover:-translate-y-1 transition-all">
                    Explore Sectors
                </a>
            </div>

            <!-- Floating Stats Bar -->
            <div class="pt-16 grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-16 border-t border-white/10"
                x-show="loaded" x-transition:enter="transition ease-out duration-1000 delay-900" x-transition:enter-start="opacity-0">
                <div class="space-y-1">
                    <div class="text-4xl font-black text-white italic">100K+</div>
                    <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Global Reach</div>
                </div>
                <div class="space-y-1">
                    <div class="text-4xl font-black text-white italic">20+</div>
                    <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Summits</div>
                </div>
                <div class="space-y-1">
                    <div class="text-4xl font-black text-white italic"><?php echo e(count(config('sectors.sectors'))); ?></div>
                    <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Sectors</div>
                </div>
                <div class="space-y-1">
                    <div class="text-4xl font-black text-white italic">30+</div>
                    <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Nations</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Gradient Overlay -->
    <div class="absolute bottom-0 left-0 w-full h-32 bg-linear-to-t from-slate-950 to-transparent pointer-events-none"></div>
</section>

<?php if (! $__env->hasRenderedOnce('050b64f9-597e-4abb-be0c-42d9a1b54d38')): $__env->markAsRenderedOnce('050b64f9-597e-4abb-be0c-42d9a1b54d38'); ?>
<style>
    .hero-swiper .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background: rgba(255,255,255,0.2);
        opacity: 1;
        transition: all 0.3s;
    }
    .hero-swiper .swiper-pagination-bullet-active {
        background: var(--color-brand-accent);
        height: 32px;
        border-radius: 6px;
    }
</style>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/hero.blade.php ENDPATH**/ ?>