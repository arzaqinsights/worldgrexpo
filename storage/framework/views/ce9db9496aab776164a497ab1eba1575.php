

<?php $__env->startSection('title', 'Non-Ferrous & Scrap Recycling'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="<?php echo e(asset('images/sectors/non-ferrous-scrap-recycling.jpeg')); ?>" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(139,92,246,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-violet-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-violet-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-violet-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Secondary Metal Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Non-Ferrous <br>
    <span class="text-violet-600">Recycling.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-violet-600 pl-10 md:text-center mx-auto">
    Metals Reborn, Value Restored — Driving Circular Industrial Independence.
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
      <span class="subtitle">Scrap Asset Architecture</span>
      <h2 class="text-3xl font-bold text-slate-900">Resource <br><span class="text-violet-600">Recovery.</span></h2>
      <div class="accent-line bg-violet-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Non-Ferrous Recycling</strong> refers to the collection, segregation, and processing of discarded non-iron-based metals into valuable secondary raw materials.
      </p>
      <p>
       Recycling these metals reduces mining dependency, saves significant energy, lowers carbon emissions, and supports high-performance circular manufacturing across electronics and automotive sectors.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-violet-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="<?php echo e(asset('images/sectors/non-ferrous-scrap-recycling.jpeg')); ?>" alt="Non-Ferrous Recycling"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-violet-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Metal Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Metal Types Grid -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-violet-600 text-[10px] font-bold uppercase tracking-[0.4em]">Resource Classification</span>
     <h3 class="text-4xl font-bold text-slate-900">Non-Ferrous Inventory</h3>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
     <?php
      $metals = [
       ['icon' => 'cube', 'title' => 'Aluminium', 'color' => 'amber'],
       ['icon' => 'ring', 'title' => 'Copper', 'color' => 'orange'],
       ['icon' => 'coins', 'title' => 'Brass', 'color' => 'yellow'],
       ['icon' => 'weight-hanging', 'title' => 'Lead', 'color' => 'slate'],
       ['icon' => 'layer-group', 'title' => 'Zinc', 'color' => 'blue'],
       ['icon' => 'circle-dot', 'title' => 'Nickel', 'color' => 'violet'],
       ['icon' => 'recycle', 'title' => 'Stainless Steel', 'color' => 'emerald'],
       ['icon' => 'microchip', 'title' => 'E-Metal Scrap', 'color' => 'rose'],
      ];
     ?>
     <?php $__currentLoopData = $metals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="p-12 bg-slate-50 rounded-2xl p-8 flex flex-col items-center text-center group hover:shadow-lg transition-all">
       <div class="absolute top-0 left-0 w-1 h-full bg-violet-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-violet-600 group-hover:bg-violet-600 group-hover:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-<?php echo e($metal['icon']); ?> text-2xl"></i>
       </div>
       <h4 class="text-[12px] font-bold uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] "><?php echo e($metal['title']); ?></h4>
      </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-violet-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-violet-400 text-[10px] font-bold uppercase tracking-[0.4em]">International Transition</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2026)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$249B+</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2030)</span>
        <span class="text-4xl font-bold text-violet-500 tracking-tight ">$300B+</span>
       </div>
      </div>

      <div class="p-10 bg-violet-600/10 border-l-8 border-violet-600">
       <p class="text-[10px] font-bold text-violet-500 uppercase tracking-[0.4em] mb-2">Growth Drivers</p>
       <div class="grid grid-cols-2 gap-4">
        <?php $__currentLoopData = ['EV Mfg', 'Renewables', 'Infra Expansion', 'Circular Economy']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="flex items-center gap-3">
          <div class="w-1.5 h-1.5 bg-violet-600"></div>
          <span class="text-[10px] font-bold uppercase text-slate-400 tracking-widest"><?php echo e($driver); ?></span>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-violet-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-violet-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-violet-50 border-l-8 border-violet-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-violet-600 uppercase tracking-[0.4em] ">Market Projection</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">₹5 Lakh Cr+</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">Fastest Growing Global Market</p>
      </div>

      <div class="space-y-8 text-right">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Recycling Hubs</h4>
       <div class="flex flex-wrap justify-end gap-2">
        <?php $__currentLoopData = ['Mumbai', 'Delhi NCR', 'Gujarat', 'Alang', 'Chennai', 'Kolkata', 'Ludhiana']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <span class="px-6 py-2 bg-slate-950 text-white text-[10px] font-bold uppercase tracking-widest "><?php echo e($hub); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-violet-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">$249B+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market (2026)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-violet-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">₹34K Cr+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Metal Scrap</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-violet-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">20K+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Recyclers</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-violet-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">5L+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Direct Jobs India</p>
    </div>
   </div>

   <!-- Emerging Opportunities -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Innovation Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-violet-600">Trends.</span></h2>
      <div class="accent-line bg-violet-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      <?php
       $trends = [
        ['icon' => 'battery-full', 'title' => 'Battery Metal Recycling Growth'],
        ['icon' => 'robot', 'title' => 'AI & Automated Scrap Sorting'],
        ['icon' => 'gem', 'title' => 'High-Purity Metal Recovery'],
        ['icon' => 'car-battery', 'title' => 'EV Battery Dismantling'],
        ['icon' => 'microchip', 'title' => 'Precious Metal Extraction'],
        ['icon' => 'industry', 'title' => 'Integrated Recycling Parks'],
       ];
      ?>
      <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-violet-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-violet-600 group-hover/opp:bg-violet-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-<?php echo e($item['icon']); ?> text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight "><?php echo e($item['title']); ?></span>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 flex flex-col justify-center">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(139,92,246,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4 text-center">
       <div class="text-violet-400 text-[10px] font-bold uppercase tracking-[0.4em]">India Context</div>
       <h3 class="text-3xl font-bold text-white ">Global Scrap Hub</h3>
      </div>
      <div class="grid grid-cols-1 gap-6">
       <?php $__currentLoopData = [
        'Huge domestic industrial demand',
        'Cost-effective labor and processing',
        'Strategic import/export ports',
        'Growing manufacturing sector',
        'Strong infra/auto/electrical demand'
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reason): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex items-center gap-6 group/item">
         <i class="fa-solid fa-circle-check text-violet-600 group-hover:text-white transition-colors"></i>
         <span class="text-lg font-bold uppercase text-slate-400 group-hover:text-white transition-colors tracking-widest "><?php echo e($reason); ?></span>
        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(139,92,246,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Metals <br><span class="text-violet-600">Reborn.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-violet-600 pl-10 md:text-center mx-auto ">
      Non-ferrous and scrap recycling is the backbone of India's circular manufacturing economy, driving sustainable industrial growth and resource independence.
     </p>
     <div class="flex justify-center">
      <a href="<?php echo e(route('join.index')); ?>" 
       class="btn-sharp px-16 group !border-violet-600/30 hover:!bg-violet-600">
       Register for Metal Recovery 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/non-ferrous-scrap-recycling.blade.php ENDPATH**/ ?>