<?php $__env->startSection('title', 'Lithium Battery Recycling'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="<?php echo e(asset('images/sectors/lithium-battery-recycling.webp')); ?>" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(20,184,166,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-teal-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-teal-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-teal-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Energy Storage Recovery Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Lithium <br>
    <span class="text-teal-600">Recycling.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-teal-600 pl-10 md:text-center mx-auto">
    Recovering critical minerals from end-of-life batteries for a sustainable future.
   </p>
  </div>
 </section>

 <!-- Content Interface -->
 <section class="py-20 bg-white relative">
  <div class="container space-y-20">

   <!-- Executive Summary -->
   <div class="grid lg:grid-cols-2 gap-6">
    <div class="p-8 lg:p-12 bg-white space-y-12">
     <div class="section-heading text-left">
      <span class="subtitle">Circular Energy Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Mineral <br><span class="text-teal-600">Recovery.</span></h2>
      <div class="accent-line bg-teal-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Lithium Battery Recycling</strong> is the process of recovering critical minerals from used batteries for reuse in new storage systems.
      </p>
      <p>
       With the rapid growth of electric vehicles (EVs) and energy storage, recycling has become a critical pillar of the global circular economy and resource security.
      </p>
     </div>
    </div>

    <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-sm">
     <?php
      $sources = [
       ['icon' => 'car', 'label' => 'EV Batteries'],
       ['icon' => 'laptop', 'label' => 'Electronics'],
       ['icon' => 'mobile-screen', 'label' => 'Mobile Devices'],
       ['icon' => 'bolt', 'label' => 'Storage Systems'],
       ['icon' => 'plug', 'label' => 'Power Backup'],
       ['icon' => 'industry', 'label' => 'Factory Scrap'],
      ];
     ?>
     <?php $__currentLoopData = $sources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="p-10 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
        <div class="absolute top-0 left-0 w-1 h-full bg-teal-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-<?php echo e($s['icon']); ?> text-4xl mb-6 text-slate-200 group-hover:text-teal-600 transition-all duration-500"></i>
       <p class="text-[9px] font-bold uppercase tracking-[0.2em] text-slate-400 group-hover:text-white transition-colors"><?php echo e($s['label']); ?></p>
      </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-teal-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-teal-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$10B</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
        <span class="text-4xl font-bold text-teal-500 tracking-tight ">$35B</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        <?php $__currentLoopData = ['EV Sales Growth', 'Mineral Shortages', 'ESG Pressure', 'Mandatory Mandates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="p-8 bg-slate-950 text-center text-[10px] font-bold uppercase tracking-[0.1em] text-slate-400 hover:bg-teal-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($driver); ?></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-teal-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-teal-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Strategy</div>
       <h3 class="text-3xl font-bold text-slate-950 ">Indian Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-slate-950 tracking-tight ">$1.2B</span>
       </div>
       <div class="flex items-end justify-between border-b border-slate-100 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
        <span class="text-4xl font-bold text-teal-600 tracking-tight ">26%</span>
       </div>
       <div class="p-12 bg-teal-50 border-l-8 border-teal-600 shadow-sm text-right">
        <p class="text-[9px] font-bold text-teal-600 uppercase tracking-[0.4em] mb-4 ">Forecast (2031)</p>
        <p class="text-3xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$5 Billion Value</p>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Technology & Outlook -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16">
     <h3 class="text-3xl font-bold text-slate-900 text-teal-500 border-l-8 border-teal-600 pl-10">Advanced Methods</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <?php $__currentLoopData = [
       ['icon' => 'gears', 'label' => 'Mechanical Separation'],
       ['icon' => 'flask', 'label' => 'Hydrometallurgical'],
       ['icon' => 'fire', 'label' => 'Pyrometallurgical'],
       ['icon' => 'atom', 'label' => 'Direct Cathode'],
       ['icon' => 'recycle', 'label' => 'Black Mass Process'],
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="p-10 bg-slate-950 group/item hover:bg-teal-600 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <i class="fa-solid fa-<?php echo e($tech['icon']); ?> text-3xl mb-6 text-teal-600 group-hover/item:text-slate-950 transition-colors"></i>
        <p class="text-[12px] font-bold uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors "><?php echo e($tech['label']); ?></p>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>

    <div class="p-12 bg-white space-y-16 border-l border-slate-200">
     <h3 class="text-3xl font-bold text-slate-900 border-l-8 border-slate-950 pl-10">Systemic Value</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-100 border border-slate-100 shadow-2xl">
       <?php $__currentLoopData = [
       ['icon' => 'shield-halved', 'label' => 'Pollution Reduction'],
       ['icon' => 'gem', 'label' => 'Mineral Recovery'],
       ['icon' => 'arrow-trend-down', 'label' => 'Import Independence'],
       ['icon' => 'car-side', 'label' => 'EV Sustainability'],
       ['icon' => 'recycle', 'label' => 'Circular Mfg'],
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="p-10 bg-white group/val hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-teal-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
        <i class="fa-solid fa-<?php echo e($val['icon']); ?> text-3xl mb-6 text-teal-600 group-hover/val:text-white transition-colors"></i>
        <p class="text-[11px] font-bold uppercase text-slate-500 group-hover/val:text-white tracking-[0.2em] leading-tight transition-colors "><?php echo e($val['label']); ?></p>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
   </div>

   <!-- Future Roadmap -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Global 2036 Roadmap</span>
      <h2 class="text-3xl font-bold text-slate-900">Future <br><span class="text-teal-600">Evolution.</span></h2>
      <div class="accent-line bg-teal-600"></div>
     </div>
     <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
      <?php $__currentLoopData = [
       'Massive EV battery retirement wave begins',
       'Recycling becomes mandatory worldwide',
       'Recycled content enters mainstream battery production',
       'Urban mining as strategic raw material source'
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-teal-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <i class="fa-solid fa-check text-teal-600 group-hover:text-white transition-colors"></i>
       <span class="text-[14px] font-bold uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight "><?php echo e($item); ?></span>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm border border-white/5">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(20,184,166,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-teal-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Sector Maturity
      </div>
      <h4 class="text-4xl font-bold text-teal-600">Strategic <br><span class="text-white">Security.</span></h4>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-teal-600/30 pl-10 leading-relaxed ">
       Lithium recycling is becoming a strategic raw material destination for India.
      </p>
      <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
        <?php $__currentLoopData = ['50-100 RECYCLERS', 'BLACK MASS HUB', 'URBAN MINING', 'CLOSED LOOP']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-bold uppercase tracking-[0.4em] text-teal-300 text-center hover:bg-teal-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($tag); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(20,184,166,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      The Mineral <br><span class="text-teal-600">Standard.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-teal-600 pl-10 md:text-center mx-auto ">
      Battery recycling is the foundation of a sustainable supply chain. Join the mission to recover critical resources today.
     </p>
     <div class="flex justify-center">
      <a href="<?php echo e(route('join.index')); ?>" 
       class="btn-sharp px-16 group !border-teal-600/30 hover:!bg-teal-600">
       Register for Battery Support 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/lithium-battery-recycling.blade.php ENDPATH**/ ?>