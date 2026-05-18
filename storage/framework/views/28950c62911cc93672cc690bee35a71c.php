

<?php $__env->startSection('title', 'Market Intelligence & Data Analytics - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  </div>
  <div class="absolute inset-0 opacity-10 mix-blend-overlay"
   style="background-image: url('https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
  </div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

  <div class="container relative z-10 text-left">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Data Intelligence</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold mb-10 leading-tight">
    Market <br> <span class="text-brand-primary">Intelligence.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-2xl leading-relaxed border-l-4 border-brand-primary pl-6">
    Empowering industrial nodes with absolute real-time data and predictive transition analytics for the global economy.
   </p>
  </div>
 </section>

 <!-- Main Content Interface -->
 <section class="py-20 bg-white relative">
  <div class="container space-y-16">
   
   <!-- Section 1: The Data Edge -->
   <div class="grid lg:grid-cols-2 gap-24 items-center">
    <div class="space-y-12 animate-on-scroll">
     <div class="section-heading text-left">
      <span class="subtitle">Precision Analytics</span>
      <h2>Intelligence is <br> <span class="text-brand-primary">Absolute Power.</span></h2>
      <div class="accent-line"></div>
     </div>
     
     <p class="text-slate-500 text-lg leading-relaxed">
      In a rapidly shifting global industrial economy, intuition is a liability. World Grexpo Foundation's Market Intelligence service provides our nodes with <strong>Real-Time Data Visualization</strong> and comprehensive transition reports. We decode complex market signals into absolute industrial strategies.
     </p>
     
     <div class="grid md:grid-cols-2 gap-6">
      <div class="p-8 bg-slate-50 rounded-2xl group hover:shadow-lg transition-all">
       <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center mb-8 hover:bg-brand-primary hover:border-brand-primary transition-all">
        <i class="fa-solid fa-microchip text-brand-primary text-2xl hover:text-white transition-all"></i>
       </div>
       <span class="text-[10px] font-bold uppercase text-slate-950 tracking-[0.2em] hover:text-white transition-colors">AI-Powered Industrial Analytics</span>
      </div>
      <div class="p-8 bg-slate-900 rounded-2xl group hover:shadow-lg transition-all">
       <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center mb-8 hover:bg-white transition-all duration-700">
        <i class="fa-solid fa-file-invoice-dollar text-brand-primary text-2xl"></i>
       </div>
       <span class="text-[10px] font-bold uppercase text-white tracking-[0.2em] hover:text-slate-900 transition-colors">Carbon Price Volatility Tools</span>
      </div>
     </div>
    </div>

    <div class="relative group">
     <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
      <img src="https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop" 
        class=" transition-all duration-[2000ms] hover:scale-105 opacity-80 hover:opacity-100 h-[600px] object-cover" 
        alt="Data Intelligence">
     </div>
     <!-- Sharp Industrial Decorator -->
     <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
    </div>
   </div>

   <!-- Section 2: Intelligence Portfolio -->
   <div class="space-y-12">
    <div class="max-w-4xl space-y-8">
     <div class="section-heading text-left">
      <span class="subtitle">Predictive Modeling</span>
      <h2>Analytics <br> <span class="text-brand-primary">Portfolio.</span></h2>
      <div class="accent-line"></div>
     </div>
     <p class="text-lg text-slate-500 leading-relaxed">
      Decoding the industrial future through historical and predictive transition modeling across global trade nodes.
     </p>
    </div>
    
    <div class="grid lg:grid-cols-3 gap-6">
     <?php
      $portfolio = [
       ['t' => 'Export Market Audits', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Detailed analysis of global industrial demand for specific nodes.'],
       ['t' => 'Supply Chain Nodes', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad86df6254c1?q=80&w=2070&auto=format&fit=crop', 'd' => 'Identifying bottlenecks and cost-saving lanes in global logistics.'],
       ['t' => 'Industrial behavior', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 'd' => 'Psychographic mapping of your target industrial segments.']
      ];
     ?>
     <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $port): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="group relative h-[600px] overflow-hidden bg-slate-900">
      <img src="<?php echo e($port['img']); ?>" 
        class="w-full h-full object-cover  hover:scale-105 transition-all duration-[2000ms] opacity-60 hover:opacity-100" 
        alt="Intelligence Node">
      
      <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
      
      <div class="absolute inset-0 p-12 flex flex-col justify-end space-y-6">
       <h4 class="text-4xl font-bold text-white uppercase tracking-tight hover:text-brand-primary transition-colors">
        <?php echo e($port['t']); ?>

       </h4>
       <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.3em] leading-relaxed hover:text-white transition-colors">
        <?php echo e($port['d']); ?>

       </p>
      </div>
      
      <!-- Sharp Hover Accent -->
      <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-primary hover:w-full transition-all duration-700"></div>
     </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>

   <!-- Section 3: Tech Stack -->
   <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl">
    <!-- Industrial Pattern -->
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <div class="relative z-10 space-y-12 text-center">
     <div class="section-heading text-center">
      <span class="subtitle">Proprietary Architecture</span>
      <h2 class="text-white">The Intelligence <br> <span class="text-brand-primary">Engine.</span></h2>
      <div class="accent-line mx-auto"></div>
     </div>

     <div class="grid md:grid-cols-4 gap-px bg-white/5 border border-white/10 shadow-3xl">
      <?php $__currentLoopData = [
       ['icon' => 'database', 'title' => 'Big Data Archiving'],
       ['icon' => 'brain', 'title' => 'Predictive AI'],
       ['icon' => 'satellite', 'title' => 'Real-Time Feeds'],
       ['icon' => 'magnifying-glass-chart', 'title' => 'Macro Audits']
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="p-12 bg-transparent hover:bg-brand-primary transition-all duration-700 group">
       <div class="w-20 h-20 bg-white/5 border border-white/10 mx-auto flex items-center justify-center text-brand-primary hover:bg-brand-primary-dark hover:text-white transition-all mb-10">
        <i class="fa-solid fa-<?php echo e($tech['icon']); ?> text-3xl"></i>
       </div>
       <p class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em] hover:text-slate-950 transition-colors">
        <?php echo e($tech['title']); ?>

       </p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>

     <div class="max-w-4xl mx-auto pt-24 border-t border-white/10">
      <p class="text-3xl text-slate-300 font-medium leading-relaxed ">
       "Architecting industrial nodes that study global trends <span class="text-brand-primary not-">before</span> they become headlines."
      </p>
     </div>
    </div>
   </div>

   <!-- Section 4: Call To Action -->
   <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800">
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
    </div>
    
    <div class="relative z-10 space-y-16 max-w-5xl">
     <div class="space-y-8">
      <h3 class="text-4xl md:text-9xl font-bold text-white uppercase tracking-tight leading-[0.85]">
       Architect <br> <span class="text-brand-primary">Clarity.</span>
      </h3>
      <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium">
       The global market does not wait for node clarity. Get the data intelligence you need to make confident, absolute industrial transition moves today through World Grexpo Foundation.
      </p>
     </div>
     
     <a href="<?php echo e(route('forms.show', ['slug' => 'join-us'])); ?>" class="btn-sharp px-20 group">
      Request Market Node Audit 
      <i class="fa-solid fa-arrow-right-long ml-6 hover:translate-x-4 transition-transform"></i>
     </a>
    </div>

    <!-- Industrial Accent Line -->
    <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/services/market-intelligence.blade.php ENDPATH**/ ?>