<section class="py-16 bg-slate-950 relative overflow-hidden border-b border-slate-900">
 <!-- Industrial Pattern -->
 <div class="absolute inset-0 z-0 opacity-10">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
 </div>
  
  <div class="container relative z-10">
   <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-slate-800 border border-slate-800 shadow-2xl">
    
    <!-- Mission Node (Sharp) -->
    <div class="p-8 md:p-12 lg:p-16 bg-slate-950 group relative overflow-hidden">
     <div class="absolute top-0 right-0 w-32 h-32 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(255,255,255,0.01)_5px,rgba(255,255,255,0.01)_10px)]"></div>
     
     <div class="w-14 h-14 bg-brand-primary flex items-center justify-center mb-8 shadow-md">
      <i class="fa-solid fa-bullseye text-xl text-slate-950"></i>
     </div>
     
     <div class="space-y-8">
      <div class="space-y-2">
       <div class="text-brand-accent text-[10px] font-bold uppercase tracking-[0.3em]">The Drive</div>
       <h3 class="text-2xl md:text-3xl font-black text-white uppercase tracking-tight leading-tight">
        Our <span class="text-brand-primary">Mission.</span>
       </h3>
      </div>
      
      <p class="text-slate-400 text-xs md:text-sm font-normal leading-relaxed max-w-md">
       To architect the global industrial community's involvement and stimulate absolute sustainable growth through innovative ESG advocacy and structural networking excellence.
      </p>
      
      <div class="p-6 bg-white/5 border border-white/10 relative overflow-hidden">
       <div class="absolute left-0 top-0 w-1 h-full bg-brand-accent"></div>
       <p class="text-white text-xs md:text-sm font-bold leading-snug uppercase tracking-wider">
        "Architecting the global industrial transition through absolute sustainability."
       </p>
      </div>
     </div>
    </div>

    <!-- Vision Node (Sharp) -->
    <div class="p-8 md:p-12 lg:p-16 bg-brand-primary group relative overflow-hidden">
     <div class="absolute bottom-0 right-0 w-48 h-48 bg-white/10 -rotate-45 translate-y-1/2 translate-x-1/2"></div>
     
     <div class="w-14 h-14 bg-slate-950 flex items-center justify-center mb-8 shadow-md">
      <i class="fa-solid fa-eye text-brand-accent text-xl"></i>
     </div>

     <div class="space-y-8">
      <div class="space-y-2">
       <div class="text-white/60 text-[10px] font-bold uppercase tracking-[0.3em]">The Horizon</div>
       <h3 class="text-2xl md:text-3xl font-black text-white uppercase tracking-tight leading-tight">
        Our <span class="text-slate-950">Vision.</span>
       </h3>
      </div>
      
      <p class="text-slate-100 font-normal text-xs md:text-sm leading-relaxed max-w-md">
       To be the global benchmark for industrial sustainability, utilizing proprietary strategic pillars to transform the global economy.
      </p>
      
      <div class="space-y-6 pt-8 border-t border-white/10">
       <?php $__currentLoopData = [
        ['t' => 'Structural Synergy', 'd' => 'Forging absolute success through systemic connectivity.', 'i' => 'link'],
        ['t' => 'Global Unity', 'd' => 'Strong industrial bonds in a zero-carbon global marketplace.', 'i' => 'users']
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="flex items-start gap-4">
        <div class="w-10 h-10 bg-slate-950 flex items-center justify-center shrink-0 border border-slate-950 shadow-sm">
         <i class="fa-solid fa-<?php echo e($item['i']); ?> text-brand-accent text-sm"></i>
        </div>
        <div class="space-y-1">
         <span class="block text-white font-black text-sm md:text-base uppercase tracking-tight"><?php echo e($item['t']); ?></span>
         <span class="block text-slate-200 text-xs font-normal leading-relaxed"><?php echo e($item['d']); ?></span>
        </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>

   </div>
  </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/partials/mission_vision.blade.php ENDPATH**/ ?>