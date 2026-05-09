<section class="py-24 bg-white">
    <div class="container">
        <!-- Heading -->
        <div class="mb-20">
            <div class="flex flex-col md:flex-row items-end justify-between gap-8">
                <div class="max-w-3xl">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="h-1 w-12 bg-brand-accent"></div>
                        <span class="text-xs font-black uppercase tracking-widest text-brand-accent">Global Network</span>
                    </div>
                    <h2 class="text-5xl md:text-6xl font-black text-slate-950 uppercase tracking-tighter italic leading-none mb-6">
                        Strategic <span class="text-brand-accent">Sectors</span>
                    </h2>
                    <p class="text-slate-500 text-xl font-light leading-relaxed">
                        Driving global commerce through targeted industrial excellence and strategic networking.
                    </p>
                </div>
                <a href="<?php echo e(route('sectors.index')); ?>"
                    class="inline-flex items-center justify-center gap-4 bg-brand-navy text-white px-10 py-5 rounded-sm font-black text-sm uppercase tracking-widest transition-all hover:bg-brand-accent hover:text-brand-primary-dark shadow-xl">
                    Explore All
                    <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>
        </div>
        <!-- Swiper Slider Layout -->
        <div class="swiper sector-slider relative group">
            <div class="swiper-wrapper py-4 pb-20">
                <?php $__currentLoopData = config('sectors.sectors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide h-auto">
                        <a href="<?php echo e(route('sectors.show', $sector['slug'])); ?>"
                            class="block relative rounded-sm h-[450px] overflow-hidden border border-slate-100 group/card bg-slate-50">
                            
                            <img src="<?php echo e(Str::startsWith($sector['thumbnail'], 'http') ? $sector['thumbnail'] : asset($sector['thumbnail'] ?: 'images/sectors/textile.png')); ?>"
                                class="w-full h-full object-cover grayscale group-hover/card:grayscale-0 group-hover/card:scale-105 transition duration-700 opacity-80"
                                loading="lazy">

                            <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>

                            <!-- Sharp Accent Line -->
                            <div class="absolute top-0 left-0 w-full h-1 bg-brand-accent transform -translate-x-full group-hover/card:translate-x-0 transition-transform duration-500"></div>

                            <div class="absolute bottom-0 p-8 text-white w-full z-10">
                                <span class="text-brand-accent text-[10px] font-black uppercase tracking-[0.3em] mb-3 block">Sector <?php echo e($loop->iteration); ?></span>
                                <h3 class="text-2xl font-black uppercase tracking-tighter leading-none mb-4 group-hover/card:text-brand-accent transition-colors">
                                    <?php echo e($sector['title']); ?>

                                </h3>
                                <div class="h-0.5 w-12 bg-white/20 group-hover/card:w-full transition-all duration-500 mb-4"></div>
                                <p class="text-xs text-slate-400 font-medium leading-relaxed opacity-0 group-hover/card:opacity-100 transition-opacity duration-300">
                                    <?php echo e(Str::limit($sector['description'], 80)); ?>

                                </p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination bottom-0!"></div>
        </div>

        <!-- Additional Quick CSS for Swiper Layout width and Pagination bullets -->
            <!-- Custom Navigation -->
            <div class="flex gap-4 mt-8">
                <div class="swiper-button-prev-custom cursor-pointer w-12 h-12 border border-slate-200 flex items-center justify-center text-slate-400 hover:border-brand-accent hover:text-brand-accent transition-all rounded-sm">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="swiper-button-next-custom cursor-pointer w-12 h-12 border border-slate-200 flex items-center justify-center text-slate-400 hover:border-brand-accent hover:text-brand-accent transition-all rounded-sm">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </div>

        <style>
            .sector-slider .swiper-slide {
                width: 380px;
            }
        </style>

    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/sectors.blade.php ENDPATH**/ ?>