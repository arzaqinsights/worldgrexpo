<?php $__env->startSection('title', 'Circular Economy'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 overflow-hidden border-b border-slate-900">
  <!-- Visual Backdrop -->
  <div class="absolute inset-0 opacity-20">
   <img src="<?php echo e(asset('images/sectors/circular-economy.jpg')); ?>" class="w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(20,184,166,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-teal-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
  <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-teal-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

  <div class="container relative z-10 text-center space-y-12">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
    <span class="w-2 h-2 bg-teal-400 animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Resource Efficiency Protocol</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight">
    Circular <br>
    <span class="text-teal-600">Economy.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-teal-600 pl-10 md:text-center mx-auto">
    Redefining How We Make, Use & Reuse.
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
      <span class="subtitle">Systemic Resource Management</span>
      <h2 class="text-3xl font-bold text-slate-900">Industrial <br><span class="text-teal-600">Circularity.</span></h2>
      <div class="accent-line bg-teal-600"></div>
     </div>
     
     <div class="space-y-8 text-lg text-slate-600 leading-relaxed border-l-4 border-slate-200 pl-8">
      <p>
       <strong class="text-slate-900 font-bold ">Circular Economy</strong> is an economic and industrial model focused on minimizing waste, maximizing resource efficiency, and continuously reusing materials throughout the product lifecycle.
      </p>
      <p>
       Unlike the traditional <strong>"take-make-dispose"</strong> linear economy, circularity promotes a system where products and resources remain in use for as long as possible.
      </p>
     </div>
    </div>

    <div class="relative group">
     <div class="absolute inset-0 bg-teal-600/10"></div>
     <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-sm">
      <img src="<?php echo e(asset('images/sectors/circular-economy.jpg')); ?>" alt="Circular Economy"
       class="w-full h-full object-cover transition-all duration-1000">
     </div>
     <div class="absolute top-0 right-0 p-8">
      <div class="bg-teal-600 text-white text-[10px] font-bold px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
       Resource Restoration
      </div>
     </div>
    </div>
   </div>

   <!-- Why It Matters -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm overflow-hidden">
    <div class="p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(20,184,166,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-teal-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Strategic Value
      </div>
      <h3 class="text-4xl font-bold text-teal-600 leading-tight">Why Circular <br><span class="text-white">Economy Matters.</span></h3>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-teal-600/30 pl-10 leading-relaxed ">
       Circular economy has become a global priority as industries seek sustainable solutions to reduce waste and combat climate change.
      </p>
      <ul class="space-y-10 pt-8">
       <?php $__currentLoopData = [
        'Reduced Operational Costs',
        'Improved Resource Efficiency',
        'Lower Environmental Impact',
        'Enhanced Brand Reputation',
        'Greater Supply Chain Resilience',
        'Long-Term Sustainable Growth'
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="flex items-start gap-10 group/item">
         <i class="fa-solid fa-check-circle text-teal-600 text-3xl group-hover/item:scale-125 transition-transform duration-500"></i>
         <span class="text-slate-400 text-xl font-bold uppercase tracking-widest group-hover/item:text-white transition-colors duration-500 leading-tight"><?php echo e($point); ?></span>
        </li>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
     </div>
    </div>
    <div class="relative overflow-hidden group">
     <img src="<?php echo e(asset('images/sectors/circular-economy.jpg')); ?>" alt="Strategic Importance"
      class="w-full h-full object-cover group- transition-all duration-1000 scale-110 group-hover:scale-100">
     <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
    </div>
   </div>

   <!-- Global vs India Stats -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm">
    <!-- GLOBAL -->
    <div class="p-8 lg:p-12 bg-slate-950 relative overflow-hidden group">
     <div class="absolute top-0 right-0 p-12 text-teal-600 opacity-5 group-hover:opacity-10 transition-opacity">
      <i class="fa-solid fa-earth-americas text-[12rem]"></i>
     </div>
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-teal-400 text-[10px] font-bold uppercase tracking-[0.4em]">Global Opportunity</div>
       <h3 class="text-3xl font-bold text-white ">Global Market</h3>
      </div>
      
      <div class="space-y-12">
       <div class="space-y-4 border-b border-white/10 pb-10">
        <span class="text-8xl font-bold text-white tracking-tight block transition-transform group-hover:translate-x-4 duration-500">$4.5T+</span>
        <span class="text-[10px] font-bold uppercase text-slate-500 tracking-[0.3em]">Economic benefits by 2030</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-500 uppercase tracking-[0.4em]">Adoption Drivers</h4>
       <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10">
        <?php $__currentLoopData = ['Raw Material Costs', 'Resource Scarcity', 'Climate Mitigation', 'ESG Mandates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <span class="px-8 py-6 bg-slate-950 text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-teal-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($driver); ?></span>
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
     <div class="relative z-10 space-y-16">
      <div class="space-y-4">
       <div class="text-teal-600 text-[10px] font-bold uppercase tracking-[0.4em]">National Momentum</div>
       <h3 class="text-3xl font-bold text-slate-950 ">India Potential</h3>
      </div>
      
      <div class="space-y-12">
       <div class="space-y-4 border-b border-slate-100 pb-10 text-right">
        <span class="text-8xl font-bold text-slate-950 tracking-tight block transition-transform group-hover:-translate-x-4 duration-500">$500B+</span>
        <span class="text-[10px] font-bold uppercase text-slate-400 tracking-[0.3em]">Market potential by 2030</span>
       </div>
      </div>

      <div class="space-y-8">
       <h4 class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.4em]">Key Focus Areas</h4>
       <div class="grid grid-cols-2 md:grid-cols-3 gap-6 shadow-sm">
        <?php $__currentLoopData = ['Waste Management', 'Sustainable Packaging', 'Renewable Energy', 'Water Reuse', 'Industrial Efficiency', 'Green Manufacturing']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="p-8 bg-white flex items-center gap-6 group/item hover:bg-slate-950 transition-all duration-500">
          <div class="w-2 h-2 bg-teal-600 group-hover/item:scale-150 transition-transform"></div>
          <span class="text-[10px] font-bold uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight transition-colors"><?php echo e($area); ?></span>
         </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
      </div>
     </div>
    </div>
   </div>

   <!-- Stats Grid -->
   <div class="grid grid-cols-2 md:grid-cols-3 gap-6 shadow-sm">
    <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
     <h4 class="text-7xl font-bold text-teal-600 mb-6 tracking-tight group-hover:scale-110 transition-transform duration-500">$4.5T+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Opportunity</p>
    </div>
    <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
     <h4 class="text-7xl font-bold text-teal-600 mb-6 tracking-tight group-hover:scale-110 transition-transform duration-500">$500B+</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Potential</p>
    </div>
    <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700 col-span-2 md:col-span-1">
     <h4 class="text-7xl font-bold text-teal-600 mb-6 tracking-tight group-hover:scale-110 transition-transform duration-500">∞</h4>
     <p class="text-[10px] font-bold text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Lifecycle Value</p>
    </div>
   </div>

   <!-- 5 Pillars Grid -->
   <div class="space-y-12">
    <div class="text-center space-y-4">
     <span class="text-teal-600 text-[10px] font-bold uppercase tracking-[0.4em]">Structural Methodologies</span>
     <h3 class="text-4xl font-bold text-slate-900">Pillars of Circularity</h3>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 shadow-sm">
     <?php
      $pillars = [
       ['icon' => 'arrow-down', 'title' => 'Reduce', 'desc' => 'Minimize consumption', 'color' => 'teal'],
       ['icon' => 'arrows-rotate', 'title' => 'Reuse', 'desc' => 'Extend product life', 'color' => 'teal'],
       ['icon' => 'recycle', 'title' => 'Recycle', 'desc' => 'Resource recovery', 'color' => 'teal'],
       ['icon' => 'bolt', 'title' => 'Recover', 'desc' => 'Energy extraction', 'color' => 'teal'],
       ['icon' => 'seedling', 'title' => 'Regenerate', 'desc' => 'Restore systems', 'color' => 'teal'],
      ];
     ?>
     <?php $__currentLoopData = $pillars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="p-8 bg-slate-50 rounded-2xl text-center group hover:shadow-lg transition-all relative overflow-hidden">
       <div class="absolute top-0 left-0 w-1 h-full bg-teal-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
       <div class="w-24 h-24 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-teal-600 group-hover:bg-teal-600 group-hover:text-white transition-all shadow-sm duration-500">
        <i class="fa-solid fa-<?php echo e($p['icon']); ?> text-4xl"></i>
       </div>
       <h4 class="text-2xl font-bold text-slate-950 group-hover:text-white mb-4 leading-tight transition-colors"><?php echo e($p['title']); ?></h4>
       <p class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.2em] leading-tight transition-colors"><?php echo e($p['desc']); ?></p>
      </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   </div>

   <!-- Trends & Opportunities -->
   <div class="grid lg:grid-cols-2 gap-6 shadow-sm">
    <div class="p-12 bg-white space-y-16">
     <h3 class="text-3xl font-bold uppercase text-slate-950 border-l-8 border-slate-950 pl-10 tracking-tight">Emerging Trends</h3>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-100 border border-slate-100">
      <?php
       $trends = [
        ['icon' => 'pencil-ruler', 'label' => 'Design Innovation'],
        ['icon' => 'coins', 'label' => 'Waste-to-Value'],
        ['icon' => 'cloud', 'label' => 'SaaS Models'],
        ['icon' => 'truck-ramp-box', 'label' => 'Reverse Logistics'],
        ['icon' => 'qrcode', 'label' => 'Material Tracking'],
        ['icon' => 'link', 'label' => 'Supply Chain Transformation'],
       ];
      ?>
      <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="p-12 bg-white group/item hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-teal-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
        <div class="w-16 h-16 mb-8 bg-slate-50 border border-slate-100 flex items-center justify-center text-teal-600 group-hover/item:bg-teal-600 group-hover/item:text-white transition-all shadow-sm">
         <i class="fa-solid fa-<?php echo e($trend['icon']); ?> text-2xl"></i>
        </div>
        <span class="text-[12px] font-bold uppercase text-slate-900 group-hover/item:text-white tracking-[0.2em] leading-tight transition-colors"><?php echo e($trend['label']); ?></span>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>

    <div class="p-12 bg-slate-50 space-y-16 border-l border-slate-200 shadow-2xl">
     <h3 class="text-3xl font-bold uppercase text-slate-950 border-l-8 border-teal-600 pl-10 tracking-tight">Industry Opportunities</h3>
     <div class="space-y-12">
      <?php $__currentLoopData = [
       ['icon' => 'lightbulb', 'label' => 'Sustainable Product Development'],
       ['icon' => 'recycle', 'label' => 'Recycling and Recovery Solutions'],
       ['icon' => 'link', 'label' => 'Circular Supply Chain Management'],
       ['icon' => 'gears', 'label' => 'Resource Optimization Technologies'],
       ['icon' => 'bolt', 'label' => 'Waste-to-Energy Projects'],
       ['icon' => 'leaf', 'label' => 'ESG and Sustainability Consulting'],
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex items-center gap-10 group/opp">
       <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-teal-600 group-hover/opp:bg-teal-600 group-hover/opp:text-white transition-all duration-500">
        <i class="fa-solid fa-<?php echo e($opp['icon']); ?> text-2xl"></i>
       </div>
       <span class="text-xl font-bold uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-slate-950 transition-colors leading-tight "><?php echo e($opp['label']); ?></span>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
   </div>

   <!-- Future Outlook -->
   <div class="grid lg:grid-cols-2 gap-32 items-center">
    <div class="relative group">
     <div class="absolute inset-0 bg-teal-600/10"></div>
     <div class="relative overflow-hidden border border-slate-200 shadow-sm h-[700px]">
      <img src="<?php echo e(asset('images/sectors/circular-economy.jpg')); ?>" alt="Circular Economy Future"
       class="w-full h-full object-cover transition-all duration-1000 scale-110 group-hover:scale-100">
     </div>
    </div>

    <div class="p-8 lg:p-12 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-sm">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(20,184,166,0.05),transparent)]"></div>
     <div class="relative z-10 space-y-12">
      <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-teal-400 text-[10px] font-bold uppercase tracking-[0.4em]">
       Future Evolution
      </div>
      <h3 class="text-4xl font-bold text-teal-600 leading-tight">Strategic <br><span class="text-white">Transformation.</span></h3>
      <p class="text-2xl text-slate-400 font-medium border-l-8 border-teal-600/30 pl-10 leading-relaxed ">
       Circular economy is transforming from an environmental initiative into a core strategic business model.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
       <?php $__currentLoopData = [
        ['icon' => 'industry', 'label' => 'Manufacturing Processes'],
        ['icon' => 'lightbulb', 'label' => 'Product Development'],
        ['icon' => 'box', 'label' => 'Packaging Design'],
        ['icon' => 'link', 'label' => 'Supply Chains'],
        ['icon' => 'cart-shopping', 'label' => 'Procurement Strategies'],
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="p-8 bg-slate-950 border border-white/5 flex items-center gap-8 group/item hover:bg-teal-600 transition-all duration-500">
         <i class="fa-solid fa-<?php echo e($fut['icon']); ?> text-teal-600 text-2xl group-hover/item:text-slate-950 transition-colors"></i>
         <span class="text-[12px] font-bold uppercase text-slate-300 group-hover/item:text-slate-950 tracking-[0.2em] transition-colors leading-tight"><?php echo e($fut['label']); ?></span>
        </div>
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
      The <br><span class="text-teal-600">Future.</span>
     </h3>
     <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-teal-600 pl-10 md:text-center mx-auto">
      Circular economy is no longer a concept — it is the foundation of modern sustainable business, enabling industries to balance profitability and environmental responsibility.
     </p>
     <div class="flex justify-center">
      <a href="<?php echo e(route('join.index')); ?>" 
       class="btn-sharp px-16 group !border-teal-600/30 hover:!bg-teal-600">
       Join the Circular Transition 
       <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/circular-economy.blade.php ENDPATH**/ ?>