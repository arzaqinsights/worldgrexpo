<?php if(isset($galleryImages) && $galleryImages->count() > 0): ?>
<section class="section-padding bg-white relative overflow-hidden">
    <!-- Sophisticated Background Decorators -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/5 rounded-full blur-[150px] -mr-96 -mt-96"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[100px]"></div>

    <div class="container relative z-10">
        <!-- Modern Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-20" x-data="{ visible: false }" x-intersect="visible = true">
            <div class="max-w-3xl space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                    Visual Legacy
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    Moments That <span class="text-brand-primary italic text-nowrap">Define Us.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Experience the global impact of World Grexpo through a curated selection of milestones, summits, and transformative networking events.
                </p>
            </div>
            <a href="<?php echo e(route('gallery')); ?>" 
                class="group flex items-center gap-4 px-8 py-4 rounded-2xl bg-slate-900 text-white font-black uppercase tracking-widest text-xs hover:bg-brand-primary transition-all shadow-xl">
                Explore Full Gallery <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>

        <!-- Premium Asymmetrical Masonry-style Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 auto-rows-[250px]">
            <?php $__currentLoopData = $galleryImages->take(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $spans = [
                        0 => 'md:col-span-2 md:row-span-2', // Large Feature
                        1 => 'md:col-span-1 md:row-span-1', // Regular
                        2 => 'md:col-span-1 md:row-span-2', // Tall
                        3 => 'md:col-span-1 md:row-span-1', // Regular
                        4 => 'md:col-span-2 md:row-span-1', // Wide
                        5 => 'md:col-span-1 md:row-span-1', // Regular
                        6 => 'md:col-span-1 md:row-span-1', // Regular
                        7 => 'md:col-span-2 md:row-span-1', // Wide Bottom
                    ];
                    $spanClass = $spans[$idx % 8] ?? 'md:col-span-1 md:row-span-1';
                ?>
                
                <div class="<?php echo e($spanClass); ?> group relative rounded-[2.5rem] overflow-hidden bg-slate-100 transition-all duration-700 hover:shadow-2xl hover:shadow-brand-primary/10"
                    x-data="{ visible: false }" x-intersect="visible = true"
                    :class="visible ? 'translate-y-0 opacity-100' : 'translate-y-12 opacity-0'"
                    style="transition-delay: <?php echo e($idx * 100); ?>ms">
                    
                    <!-- Background Visual -->
                    <img src="<?php echo e(asset($img->image_path)); ?>"
                         alt="<?php echo e($img->title ?? $img->category); ?>"
                         class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 grayscale group-hover:grayscale-0"
                         loading="lazy">
                    
                    <!-- Sophisticated Glass Overlay -->
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent opacity-0 group-hover:opacity-90 transition-all duration-500"></div>
                    
                    <!-- Badge Overlay -->
                    <?php if($img->category): ?>
                        <div class="absolute top-6 left-6 z-20">
                            <span class="px-4 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-[9px] font-black text-white uppercase tracking-[0.2em] shadow-lg group-hover:bg-brand-accent group-hover:text-brand-primary-dark group-hover:border-brand-accent transition-all duration-500">
                                <?php echo e($img->category); ?>

                            </span>
                        </div>
                    <?php endif; ?>

                    <!-- Content Layer (Appears on Hover) -->
                    <div class="absolute inset-0 p-8 flex flex-col justify-end z-10 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="space-y-2">
                            <h3 class="text-white font-black text-xl leading-tight tracking-tight uppercase">
                                <?php echo e($img->title ?: ($img->category ?: 'Excellence Milestone')); ?>

                            </h3>
                            <div class="w-10 h-1 bg-brand-accent rounded-full"></div>
                        </div>
                    </div>

                    <!-- Subtle Interaction Border -->
                    <div class="absolute inset-0 border-2 border-white/0 group-hover:border-white/10 rounded-[2.5rem] transition-all duration-500 pointer-events-none"></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Mobile-only View All -->
        <div class="mt-12 lg:hidden">
            <a href="<?php echo e(route('gallery')); ?>" class="w-full py-5 bg-slate-900 text-white rounded-2xl font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3">
                View Entire Collection
                <i class="fa-solid fa-arrow-right-long"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/gallery_preview.blade.php ENDPATH**/ ?>