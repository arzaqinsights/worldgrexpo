

<?php $__env->startSection('title', 'Media Gallery | World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  </div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-8">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Visual Archives</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-[0.85] tracking-tight uppercase">
    Media <br>
    <span class="text-brand-primary">Gallery.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
    Explore institutional summits, industrial highlights, and memories from the global World Grexpo ecosystem.
   </p>
  </div>
 </section>

 <!-- Album Archives -->
 <section class="py-20 bg-white relative">
  <div class="container">
   <?php if($categories->count() > 0): ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 shadow-sm">
     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="<?php echo e(route('gallery.show', base64_encode($category->category))); ?>" 
       class="group relative block bg-slate-950 overflow-hidden transition-all duration-700 hover:-translate-y-4 shadow-sm">
       
       <!-- Media Node -->
       <div class="aspect-video w-full relative overflow-hidden">
        <img src="<?php echo e(asset($category->cover)); ?>" 
         class="w-full h-full object-cover transition-all duration-[3000ms] hover:scale-110 opacity-80 hover:opacity-100" 
         alt="<?php echo e($category->category); ?>">
        
        <!-- Industrial Overlays -->
        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent opacity-90 hover:opacity-60 transition-opacity"></div>
        
        <!-- Expansion Indicator -->
        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-all duration-700">
         <div class="w-20 h-20 bg-white/5 backdrop-blur-xl border border-white/20 flex items-center justify-center text-white text-3xl translate-y-12 hover:translate-y-0 transition-all">
          <i class="fa-solid fa-expand"></i>
         </div>
        </div>
       </div>

       <!-- Content Overlay -->
       <div class="absolute bottom-0 left-0 right-0 p-12 space-y-8">
        <div class="space-y-4">
         <h4 class="text-2xl font-bold text-white uppercase tracking-tight leading-none hover:text-brand-primary transition-colors">
          <?php echo e($category->category); ?>

         </h4>
         <div class="flex items-center gap-6">
          <div class="h-1 w-12 bg-brand-primary transition-all hover:w-24"></div>
          <span class="text-[10px] font-bold text-white/60 uppercase tracking-[0.3em]">Visual Archive</span>
         </div>
        </div>
        
        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md text-brand-primary text-[10px] font-bold uppercase tracking-[0.3em]">
         <i class="fa-regular fa-images"></i> 
         <?php echo e($category->image_count); ?> Nodes
        </div>
       </div>

       <!-- Industrial Top Border -->
       <div class="absolute top-0 left-0 w-full h-2 bg-brand-primary scale-x-0 hover:scale-x-100 transition-transform origin-left duration-700 z-30"></div>
      </a>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   <?php else: ?>
    <div class="max-w-4xl mx-auto p-24 bg-slate-50 border border-slate-100 shadow-sm text-center space-y-8 relative">
     <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
     <div class="w-32 h-32 bg-white border border-slate-100 mx-auto flex items-center justify-center text-slate-200 text-3xl shadow-xl">
      <i class="fa-regular fa-folder-open"></i>
     </div>
     <div class="space-y-6">
      <h3 class="text-3xl font-bold text-slate-950 uppercase tracking-tight">Archives <span class="text-brand-primary">Gathering.</span></h3>
      <p class="text-2xl text-slate-500 font-medium leading-relaxed italic max-w-2xl mx-auto">
       We are currently gathering our absolute industrial moments and summit captures. Check back soon for institutional visual intelligence.
      </p>
     </div>
    </div>
   <?php endif; ?>
  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/gallery/index.blade.php ENDPATH**/ ?>