

<?php $__env->startSection('title', 'What is World Grexpo | Global Industrial Sustainability Foundation'); ?>

<?php $__env->startSection('content'); ?>
 <!-- Sharp Industrial Hero -->
 <section class="relative pt-40 pb-20 bg-slate-900 overflow-hidden">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 opacity-20 " 
     style="background-image: url('<?php echo e(asset('images/about/hero-bg.png')); ?>'); background-size: cover; background-position: center;"></div>
   <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
  </div>
  
  <div class="container relative z-10">
   <div class="max-w-3xl space-y-6">
    <div class="section-heading">
     <span class="subtitle text-brand-accent text-xs font-black tracking-[0.2em] uppercase">The Foundation</span>
     <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-black tracking-tight leading-tight uppercase">What is <span class="text-brand-accent">World Grexpo?</span></h1>
     <div class="accent-line bg-brand-accent w-16 h-1 mt-4"></div>
    </div>
    
    <p class="text-sm md:text-base text-slate-300 max-w-2xl leading-relaxed font-medium">
     Pioneering the global industrial transition through strategic ESG frameworks and absolute sustainability advocacy across cross-border trade corridors.
    </p>
   </div>
  </div>
 </section>

 <!-- Modular sections -->
 <?php echo $__env->make('website.about.partials.who_we_are', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

 
 <?php echo $__env->make('website.home.partials.why_choose', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
 <?php echo $__env->make('website.about.partials.history', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 <?php echo $__env->make('website.about.partials.mission_vision', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 <?php echo $__env->make('website.about.partials.core_values', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

 <?php echo $__env->make('website.home.partials.membership', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/what_is.blade.php ENDPATH**/ ?>