

<?php $__env->startSection('title', 'What is World Grexpo | Global industrial Sustainability Foundation'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Banner -->
    <section class="relative h-[55vh] min-h-[450px] w-full bg-slate-950 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:60px_60px]"></div>
            <img src="<?php echo e(asset('images/about/hero-bg.png')); ?>" alt="World Grexpo Global Background" class="w-full h-full object-cover opacity-30 grayscale scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/60 via-slate-950/80 to-slate-950"></div>
        </div>
        <div class="container relative z-10 text-center animate-on-scroll">
            <nav class="flex justify-center mb-10" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-[10px] font-black uppercase tracking-[0.3em]">
                    <li class="inline-flex items-center"><a href="/" class="text-slate-500 hover:text-brand-accent transition-colors flex items-center gap-2">Home</a></li>
                    <li><div class="flex items-center text-slate-700"><i class="fa-solid fa-chevron-right text-[8px] mx-4"></i><span class="text-brand-accent italic">The Foundation</span></div></li>
                </ol>
            </nav>
            <h1 class="text-5xl md:text-8xl font-black text-white tracking-tighter leading-[0.9] uppercase italic">
                What is <span class="text-brand-accent not-italic">World Grexpo?</span>
            </h1>
            <p class="text-slate-400 mt-8 text-xl md:text-2xl max-w-3xl mx-auto font-light leading-relaxed">
                Pioneering the global industrial transition through strategic ESG frameworks and absolute sustainability advocacy.
            </p>
        </div>
    </section>

    <!-- Modular sections -->
    <?php echo $__env->make('website.about.partials.who_we_are', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('website.home.partials.why_choose', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.home.partials.growth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.home.partials.values', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->make('website.about.partials.history', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.about.partials.mission_vision', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('website.about.partials.core_values', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    
    <?php echo $__env->make('website.home.partials.membership', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/what_is.blade.php ENDPATH**/ ?>