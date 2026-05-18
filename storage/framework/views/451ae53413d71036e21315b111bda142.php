<?php $__env->startSection('title', 'Plastics Industry Overview'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="<?php echo e(asset('images/sectors/plastic-industry.png')); ?>" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Polymer Synthesis Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Plastic <br>
    <span class="text-blue-600">Industry.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto">
    Essential materials for modern industry, driving innovation across packaging, automotive, and healthcare.
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
      <span class="subtitle">Polymer Value Framework</span>
      <h2 class="text-3xl font-bold text-slate-900">Industrial <br><span class="text-blue-600">Polymers.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Plastics</strong> are synthetic polymer materials derived mainly from petrochemicals. They are lightweight, durable, flexible, and cost-effective.
      </p>
      <p>
       Widely used across packaging, automotive, construction, and healthcare, plastics are essential to modern daily life and industrial productivity.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-blue-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="<?php echo e(asset('images/sectors/plastic-industry.png')); ?>" alt="Plastics Industry"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-blue-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Polymer Standard
      </div>
     </div>
    </div>
   </div>

   <!-- Global vs India Market -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 text-white relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-blue-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Landscape</div>
       <h3 class="text-3xl font-bold text-slate-900">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$963B</span>
       </div>
       <div class="flex items-end justify-between border-b border-white/10 pb-8">
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
        <span class="text-4xl font-bold text-white tracking-tight ">$1.36T</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
       <div class="grid grid-cols-2 gap-4">
        <?php $__currentLoopData = ['E-commerce Pkg', 'Automotive Lightening', 'Infra Expansion', 'Healthcare Usage']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-blue-600 hover:text-slate-950 transition-colors cursor-default group/item">
          <i class="fa-solid fa-circle-check text-blue-600 group-hover/item:text-slate-950 transition-colors"></i>
          <span class="text-[10px] font-bold uppercase tracking-[0.1em] text-center"><?php echo e($driver); ?></span>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>
     </div>
    </div>

    <!-- INDIA -->
    <div class="p-8 lg:p-12 bg-white relative overflow-hidden group border-l border-slate-200">
     <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-industry text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16 text-right">
      <div class="space-y-4">
       <div class="text-blue-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-900 ">Indian Market</h3>
      </div>
      
      <div class="p-12 bg-blue-50 border-l-8 border-blue-600 shadow-sm text-right space-y-6">
       <p class="text-[9px] font-bold text-blue-600 uppercase tracking-[0.4em] ">Market Forecast</p>
       <p class="text-4xl font-bold text-slate-950 uppercase leading-tight tracking-tight">$87B Target (2033)</p>
       <p class="text-[12px] font-bold text-slate-500 uppercase tracking-widest ">5.3% Annual CAGR Growth</p>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Sector Highlights</h4>
       <div class="grid grid-cols-2 gap-6 shadow-sm">
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-blue-600 group-hover:text-white transition-colors">FMCG</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Primary Driver</span>
        </div>
        <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
         <span class="text-4xl font-bold text-blue-600 group-hover:text-white transition-colors">MAKE</span>
         <span class="text-[9px] font-bold uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">In India Init.</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm">
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110">4.4%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">$57.5B</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">5.3%</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR Target</p>
    </div>
    <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all">
     <h4 class="text-4xl font-bold text-blue-600 mb-4 transition-all duration-500 tracking-tight group-hover:scale-110 uppercase">TOP</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Growth Market Hub</p>
    </div>
   </div>

   <!-- Opportunities & Innovation -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-white space-y-16">
     <div class="section-heading text-left">
      <span class="subtitle">Innovation Horizons</span>
      <h2 class="text-3xl font-bold text-slate-900">Emerging <br><span class="text-blue-600">Trends.</span></h2>
      <div class="accent-line bg-blue-600"></div>
     </div>
     
     <div class="grid grid-cols-1 gap-4">
      <?php
       $trends = [
        ['icon' => 'recycle', 'title' => 'Circular Economy & Recycling'],
        ['icon' => 'leaf', 'title' => 'Biodegradable Materials'],
        ['icon' => 'robot', 'title' => 'Automation in Processing'],
        ['icon' => 'shield-halved', 'title' => 'Sustainability Compliance'],
        ['icon' => 'car', 'title' => 'EV Lightweight Components'],
       ];
      ?>
      <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-blue-600 group-hover/opp:bg-blue-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
        <i class="fa-solid fa-<?php echo e($item['icon']); ?> text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight "><?php echo e($item['title']); ?></span>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>

    <div class="p-12 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(37,99,235,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-10">
      <i class="fa-solid fa-cubes-stacked text-[8rem] text-blue-600/10 group-hover:text-blue-600 transition-all duration-700"></i>
      <h4 class="text-3xl font-bold uppercase text-white tracking-tight leading-tight">Key Applications</h4>
      <div class="grid grid-cols-2 gap-4">
       <?php $__currentLoopData = ['Packaging', 'Automotive', 'Construction', 'Electronics', 'Agriculture', 'Healthcare']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="px-4 py-2 border border-white/10 text-[10px] font-bold uppercase tracking-widest text-slate-400 group-hover:text-white group-hover:border-blue-600/50 transition-all">
         <?php echo e($app); ?>

        </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>
    </div>
   </div>

   <!-- Conclusion CTA -->
   <div class="relative p-12 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-sm group">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(37,99,235,0.2),transparent)]"></div>
    <div class="relative z-10 space-y-16">
     <h3 class="text-3xl md:text-5xl font-bold text-white leading-[0.85]">
      Future <br><span class="text-blue-600">Polymers.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 md:text-center mx-auto ">
      The plastics industry remains a key global manufacturing sector, driving innovation across packaging, mobility, and infrastructure.
     </p>
     <div class="flex justify-center">
      <a href="<?php echo e(route('join.index')); ?>" 
       class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
       Partner for Polymer Growth 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/plastic-industry.blade.php ENDPATH**/ ?>