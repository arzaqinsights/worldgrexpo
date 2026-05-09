

<?php $__env->startSection('title', 'Global Industry Sectors - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;"></div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Industrial Hub</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Global <span class="text-brand-accent not-italic">Sectors</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Explore the absolute economic engines architecting our global sustainability network.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container"> 
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
                <?php $__empty_1 = true; $__currentLoopData = config('sectors.sectors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <a href="<?php echo e(route('sectors.show', $sector['slug'])); ?>" class="group block h-full">
                        <div class="bg-slate-50 border border-slate-100 rounded-sm overflow-hidden group-hover:bg-slate-950 transition-all duration-700 h-full flex flex-col relative shadow-sm">
                            
                            <div class="relative w-full h-[400px] overflow-hidden border-b border-slate-200 group-hover:border-slate-800">
                                <img src="<?php echo e($sector['thumbnail'] ? asset($sector['thumbnail']) : asset('images/sectors/textile.png')); ?>" alt="<?php echo e($sector['title']); ?>" loading="lazy"
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms]">
                                
                                <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                                
                                <div class="absolute bottom-8 left-8 right-8">
                                    <h3 class="text-2xl font-black text-white uppercase italic tracking-tighter group-hover:text-brand-accent transition-colors drop-shadow-2xl"><?php echo e($sector['title']); ?></h3>
                                </div>
                            </div>

                            <div class="p-10 flex-1 flex flex-col">
                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em] leading-relaxed mb-10 group-hover:text-slate-400 transition-colors"><?php echo e(Str::limit($sector['description'], 120)); ?></p>
                                <div class="mt-auto inline-flex items-center gap-4 text-brand-primary font-black text-[10px] tracking-[0.4em] uppercase italic group-hover:text-white transition-all">
                                    Explore Node <i class="fa-solid fa-arrow-right-long text-xs group-hover:translate-x-4 transition-transform"></i>
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-span-full py-32 text-center bg-slate-50 border border-slate-100 rounded-sm">
                        <p class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 italic">No active industrial nodes published yet.</p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/index.blade.php ENDPATH**/ ?>