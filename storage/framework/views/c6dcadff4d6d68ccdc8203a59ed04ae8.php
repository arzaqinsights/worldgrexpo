

<?php $__env->startSection('title', 'Wall of Excellence - World Grexpo Foundation Recognitions'); ?>

<?php $__env->startSection('content'); ?>
<!-- Architectural Hero -->
<section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <!-- Industrial Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

    <div class="container relative z-10 text-left">
        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
            <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
            <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Institutional Honor</span>
        </div>
        <h1 class="text-6xl md:text-[9rem] font-black text-white mb-12 tracking-tighter uppercase leading-[0.85]">
            Wall of <span class="text-brand-primary">Excellence.</span>
        </h1>
        <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
            Celebrating the honors, appreciations, and institutional recognitions architected for World Grexpo Foundation by global leaders.
        </p>
    </div>
</section>

<!-- Awards Grid -->
<section class="py-32 bg-white relative">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
            <?php $__empty_1 = true; $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="group flex flex-col bg-white p-12 hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-12 text-slate-100 group-hover:text-white/5 transition-colors">
                    <i class="fa-solid fa-medal text-9xl"></i>
                </div>
                
                <!-- Image Wrapper (Sharp) -->
                <div class="relative overflow-hidden aspect-[3/4] mb-12 border border-slate-200 group-hover:border-white/10 bg-slate-900">
                    <img src="<?php echo e(asset($award->award_image)); ?>" alt="<?php echo e($award->title); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms] opacity-80 group-hover:opacity-100">
                    
                    <!-- Overlay Info (Sharp) -->
                    <div class="absolute inset-0 bg-slate-950/90 p-12 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-all duration-700 translate-y-8 group-hover:translate-y-0">
                        <p class="text-white text-[10px] font-black uppercase tracking-[0.2em] leading-relaxed">
                            <?php echo e(Str::limit($award->description, 200)); ?>

                        </p>
                    </div>
                </div>

                <!-- Content (Sharp) -->
                <div class="flex flex-col flex-1 space-y-10">
                    <h3 class="text-3xl font-black text-slate-950 uppercase tracking-tighter group-hover:text-white transition-colors leading-[0.9]">
                        <?php echo e($award->title); ?>

                    </h3>

                    <!-- Giver Info & PDF (Sharp) -->
                    <div class="mt-auto space-y-6">
                        <?php if($award->pdf_path): ?>
                        <a href="<?php echo e(asset($award->pdf_path)); ?>" target="_blank" class="btn-sharp w-full group/btn text-center justify-center">
                            <i class="fa-solid fa-file-pdf mr-4 text-xs group-hover/btn:scale-125 transition-transform"></i> 
                            Institutional Certificate
                        </a>
                        <?php endif; ?>
                        
                        <div class="flex items-center gap-6 p-6 bg-slate-50 border border-slate-100 group-hover:bg-white/5 group-hover:border-white/10 transition-all">
                            <?php if($award->giver_image): ?>
                            <img src="<?php echo e(asset($award->giver_image)); ?>" class="w-16 h-16 grayscale group-hover:grayscale-0 object-cover border border-slate-200 group-hover:border-white/10">
                            <?php else: ?>
                            <div class="w-16 h-16 bg-slate-100 flex items-center justify-center text-slate-300 border border-slate-200 group-hover:bg-white/5 group-hover:border-white/10">
                                <i class="fa-solid fa-user text-xl"></i>
                            </div>
                            <?php endif; ?>
                            <div class="space-y-1">
                                <p class="text-[10px] font-black text-slate-950 uppercase tracking-[0.2em] group-hover:text-white transition-colors"><?php echo e($award->giver_name); ?></p>
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover:text-brand-accent transition-colors"><?php echo e($award->giver_designation); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sharp Hover Accent -->
                <div class="absolute bottom-0 left-0 w-0 h-1 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-full py-48 text-center bg-slate-50 border border-slate-100">
                <i class="fa-solid fa-medal text-8xl text-slate-200 mb-10"></i>
                <h3 class="text-3xl font-black text-slate-400 uppercase tracking-tighter">Global Recognition Nodes Under Review</h3>
            </div>
            <?php endif; ?>
        </div>

        <!-- Pagination (Sharp) -->
        <div class="mt-24">
            <?php echo e($awards->links()); ?>

        </div>
    </div>
</section>

<!-- Sharp CTA Section -->
<section class="py-32 bg-slate-950 relative overflow-hidden border-t border-slate-900">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    <div class="container relative z-10 text-center space-y-16">
        <h2 class="text-5xl md:text-8xl font-black text-white uppercase tracking-tighter leading-none">
            Part of a <span class="text-brand-primary">Global Node.</span>
        </h2>
        <a href="<?php echo e(route('register')); ?>" class="btn-sharp px-20 group">
            Acquire Institutional Pass 
            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
        </a>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/excellence/index.blade.php ENDPATH**/ ?>