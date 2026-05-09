

<?php $__env->startSection('title', 'Media Gallery | World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Visual Archives
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Media <br>
                <span class="text-brand-primary italic">Gallery.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Explore memories, institutional summits, and industrial highlights from the global World Grexpo ecosystem.
            </p>
        </div>
    </section>

    <!-- Album Archives -->
    <section class="section-padding bg-white relative">
        <div class="container">
            <?php if($categories->count() > 0): ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('gallery.show', base64_encode($category->category))); ?>" 
                            class="group relative block rounded-[3rem] overflow-hidden bg-slate-950 shadow-2xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/20">
                            
                            <!-- Media Aspect -->
                            <div class="aspect-[4/5] w-full relative overflow-hidden">
                                <img src="<?php echo e(asset($category->cover)); ?>" 
                                    class="w-full h-full object-cover transition-all duration-[3000ms] group-hover:scale-110 grayscale group-hover:grayscale-0" 
                                    alt="<?php echo e($category->category); ?>">
                                
                                <!-- Premium Overlays -->
                                <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-40 transition-opacity"></div>
                                
                                <!-- Floating Interactive Element -->
                                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-700">
                                    <div class="w-24 h-24 rounded-full bg-white/10 backdrop-blur-xl border border-white/20 flex items-center justify-center text-white text-2xl scale-50 group-hover:scale-100 transition-all">
                                        <i class="fa-solid fa-expand"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-12 space-y-6">
                                <div class="space-y-2">
                                    <h4 class="text-3xl font-black text-white uppercase tracking-tighter leading-none group-hover:text-brand-primary transition-colors">
                                        <?php echo e($category->category); ?>

                                    </h4>
                                    <div class="flex items-center gap-4">
                                        <div class="h-[1px] w-8 bg-brand-primary transition-all group-hover:w-16"></div>
                                        <span class="text-[10px] font-black text-white/60 uppercase tracking-[0.2em]">Visual Archive</span>
                                    </div>
                                </div>
                                
                                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[9px] font-black uppercase tracking-[0.2em]">
                                    <i class="fa-regular fa-images"></i> 
                                    <?php echo e($category->image_count); ?> Nodes Recorded
                                </div>
                            </div>

                            <!-- Interactive Border Decorator -->
                            <div class="absolute top-0 left-0 w-full h-2 bg-brand-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-700"></div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                <div class="max-w-4xl mx-auto p-24 rounded-[4rem] bg-slate-50 border border-slate-100 text-center space-y-10">
                    <div class="w-32 h-32 rounded-[2.5rem] bg-white shadow-xl flex items-center justify-center text-slate-200 text-5xl mx-auto">
                        <i class="fa-regular fa-folder-open"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">Archives <span class="text-brand-primary">Gathering.</span></h3>
                        <p class="text-xl text-slate-500 font-medium leading-relaxed italic">
                            We are currently gathering our absolute industrial moments. <br>Check back soon for visual intelligence.
                        </p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/gallery/index.blade.php ENDPATH**/ ?>