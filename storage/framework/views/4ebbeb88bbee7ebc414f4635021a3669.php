<?php
    $excellenceAwards = \App\Models\ExcellenceAward::where('status', 'published')
        ->where('show_on_home', true)
        ->orderBy('order')
        ->take(3)
        ->get();
?>

<?php if($excellenceAwards->count() > 0): ?>
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/30 -z-0"></div>

    <div class="container relative z-10">
        <!-- Sharp Section Header -->
        <div class="flex flex-col lg:flex-row justify-between items-end mb-24 gap-12">
            <div class="max-w-3xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Wall of Excellence</span>
                    <h2>Recognized for <span class="text-brand-primary">Excellence.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Celebrating visionary leadership and transformative contributions that define the future of global industry.
                </p>
            </div>
            <a href="<?php echo e(route('excellence.index')); ?>" 
                class="btn-sharp-outline group">
                Explore Full Wall <i class="fa-solid fa-arrow-right-long ml-4 group-hover:translate-x-3 transition-transform"></i>
            </a>
        </div>

        <!-- Sharp Excellence Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-1 border border-slate-100 bg-slate-100">
            <?php $__currentLoopData = $excellenceAwards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="group relative flex flex-col bg-white p-8 transition-all duration-500 hover:bg-slate-50">
                    
                    <!-- Award Image (Sharp) -->
                    <div class="relative aspect-[4/5] overflow-hidden mb-10 bg-slate-100">
                        <img src="<?php echo e(asset($award->award_image)); ?>" alt="<?php echo e($award->title); ?>" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        <div class="absolute inset-0 bg-slate-900/40 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-0 left-0 bg-brand-primary p-6 w-full translate-y-full group-hover:translate-y-0 transition-transform">
                            <p class="text-white font-black text-sm leading-tight tracking-widest uppercase"><?php echo e($award->title); ?></p>
                        </div>
                    </div>
                    
                    <!-- Giver Info (Sharp) -->
                    <div class="flex items-center justify-between gap-6 border-t border-slate-100 pt-8">
                        <div class="flex items-center gap-5">
                            <?php if($award->giver_image): ?>
                                <div class="w-14 h-14 bg-slate-50 overflow-hidden shrink-0 border border-slate-100">
                                    <img src="<?php echo e(asset($award->giver_image)); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all">
                                </div>
                            <?php endif; ?>
                            <div>
                                <p class="text-xs font-black text-slate-900 leading-tight mb-1 uppercase tracking-wider"><?php echo e($award->giver_name); ?></p>
                                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.15em] leading-relaxed"><?php echo e(Str::limit($award->giver_designation, 40)); ?></p>
                            </div>
                        </div>

                        <?php if($award->pdf_path): ?>
                            <a href="<?php echo e(asset($award->pdf_path)); ?>" target="_blank" 
                                class="w-10 h-10 border border-slate-200 text-slate-400 flex items-center justify-center hover:bg-brand-primary hover:text-white hover:border-brand-primary transition-all shrink-0" 
                                title="View Recognition Details">
                                <i class="fa-solid fa-file-invoice text-xs"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/excellence.blade.php ENDPATH**/ ?>