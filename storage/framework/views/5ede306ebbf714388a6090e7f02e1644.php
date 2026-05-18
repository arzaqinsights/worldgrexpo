

<?php $__env->startSection('title', 'Funding Initiative for Industries (2026) - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

 <!-- Architectural Hero -->
 <section class="relative pt-40 pb-20 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
  </div>
  <div class="absolute inset-0 opacity-10 mix-blend-overlay"
   style="background-image: url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
  </div>
  
  <!-- Industrial Accents -->
  <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

  <div class="container relative z-10 text-left">
   <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
    <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
    <span class="text-white text-[10px] font-bold tracking-[0.4em] uppercase">Financial Growth Node 2026</span>
   </div>
   <h1 class="text-3xl md:text-5xl font-bold mb-10 leading-tight">
    Funding <br> <span class="text-brand-primary">Initiative.</span>
   </h1>
   <p class="text-lg text-slate-400 max-w-2xl leading-relaxed border-l-4 border-brand-primary pl-6">
    Empowering industrial growth through structured financial access nodes and seamless institutional banking facilitation.
   </p>
  </div>
 </section>

 <!-- Main Content Interface -->
 <section class="py-20 bg-white relative">
  <div class="container space-y-16">
   
   <!-- Section 1: Overview -->
   <div class="grid lg:grid-cols-2 gap-24 items-center">
    <div class="space-y-12 animate-on-scroll">
     <div class="section-heading text-left">
      <span class="subtitle">Institutional Overview</span>
      <h2>Bridging the <br> <span class="text-brand-primary">Capital Gap.</span></h2>
      <div class="accent-line"></div>
     </div>
     <p class="text-slate-500 text-lg leading-relaxed">
      World Grexpo Foundation introduces a dedicated <strong>Funding Facilitation Node</strong> aimed at strengthening global industrial units by enabling seamless access to transition capital through elite financial institutions.
     </p>
     <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200">
      <?php $__currentLoopData = ['Transition Capital', 'Expansion Nodes', 'Banking Liaison', 'Financial Inclusion']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex items-center gap-6 p-8 bg-white group hover:bg-slate-950 transition-all duration-500">
       <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center hover:bg-brand-primary hover:border-brand-primary transition-all">
        <i class="fa-solid fa-check text-brand-primary hover:text-white text-xs"></i>
       </div>
       <span class="text-[10px] font-bold uppercase text-slate-950 tracking-[0.2em] hover:text-white transition-colors"><?php echo e($item); ?></span>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
    
    <div class="relative group">
     <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
      <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop" 
        class=" transition-all duration-[2000ms] hover:scale-105 opacity-80 hover:opacity-100 h-[650px] object-cover" 
        alt="Funding Node">
     </div>
     <!-- Sharp Industrial Decorator -->
     <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
    </div>
   </div>

   <!-- Section 2: Funding Options -->
   <div class="grid md:grid-cols-3 gap-6">
    <?php $__currentLoopData = [
     ['icon' => 'building-columns', 't' => 'Project Financing', 'd' => 'Comprehensive institutional funding for new industrial projects and infrastructure nodes.'],
     ['icon' => 'gears', 't' => 'Machinery Finance', 'd' => 'Upgrade transition capacity with customized institutional equipment and machinery loan nodes.'],
     ['icon' => 'receipt', 't' => 'Invoice Discounting', 'd' => 'Improve operational cash flow by unlocking capital tied up in institutional invoice nodes.']
    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="group relative bg-white p-16 hover:bg-slate-950 transition-all duration-700">
     <div class="w-24 h-24 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary mb-12 hover:bg-brand-primary hover:text-white transition-all">
      <i class="fa-solid fa-<?php echo e($step['icon']); ?> text-4xl"></i>
     </div>
     <h4 class="text-3xl font-bold text-slate-950 mb-8 uppercase tracking-tight hover:text-white transition-colors leading-none"><?php echo e($step['t']); ?></h4>
     <p class="text-slate-500 text-[10px] font-bold leading-relaxed uppercase tracking-[0.3em] hover:text-slate-400 transition-colors"><?php echo e($step['d']); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>

   <!-- Section 3: Funding Range -->
   <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl">
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <div class="relative z-10 grid lg:grid-cols-2 gap-24 items-center">
     <div class="space-y-12 text-left">
      <div class="space-y-6">
       <span class="text-brand-accent text-[10px] font-bold uppercase tracking-[0.4em]">Node Liquidity Range</span>
       <h3 class="text-3xl md:text-8xl font-bold text-white uppercase tracking-tight leading-none">
        Capital <br> <span class="text-brand-primary">Liquidity.</span>
       </h3>
      </div>
      
      <div class="p-12 bg-white/5 border border-white/10 inline-block group hover:bg-brand-primary transition-all duration-700">
       <p class="text-brand-accent font-bold text-4xl md:text-9xl uppercase tracking-tight hover:text-white transition-colors">
        ₹5L <span class="text-white text-3xl opacity-30 hover:opacity-50">to</span> ₹5Cr
       </p>
      </div>
      <p class="text-slate-400 text-xl font-medium leading-relaxed">
       Flexible transition funding nodes tailored for elite startups and established units seeking absolute growth.
      </p>
     </div>

     <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10">
      <?php $__currentLoopData = [
       ['icon' => 'bolt', 'title' => 'Priority Node', 'desc' => 'Priority Processing'],
       ['icon' => 'file-lines', 'title' => 'Structural', 'desc' => 'Documentation Support'],
       ['icon' => 'percent', 'title' => 'Best Rates', 'desc' => 'Lender Node Match'],
       ['icon' => 'shield-check', 'title' => 'Institutional', 'desc' => 'Scheme Advisory']
      ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="p-12 bg-transparent hover:bg-brand-primary transition-all duration-700 group">
       <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center mb-10 hover:bg-brand-primary-dark hover:border-brand-primary-dark transition-all">
        <i class="fa-solid fa-<?php echo e($dev['icon']); ?> text-2xl text-brand-primary hover:text-white"></i>
       </div>
       <h4 class="text-[10px] font-bold uppercase text-white mb-2 tracking-[0.2em] hover:text-slate-950 transition-colors"><?php echo e($dev['title']); ?></h4>
       <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest hover:text-slate-900 transition-colors"><?php echo e($dev['desc']); ?></p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
   </div>

   <!-- Section 4: Proposal Structure -->
   <div class="grid lg:grid-cols-2 gap-24 items-center">
    <div class="order-2 lg:order-1 grid gap-px bg-slate-200 border border-slate-200">
     <?php $__currentLoopData = [
      ['n' => '01', 't' => 'Executive Node', 'd' => 'A concise institutional overview of business transition goals.'],
      ['n' => '02', 't' => 'Transition Metrics', 'd' => 'Industrial trends, competitive matrix, and 5-year cash projections.'],
      ['n' => '03', 't' => 'Institutional Compliance', 'd' => 'Global identifiers and audited institutional statements.']
     ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $struct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="bg-white p-12 flex gap-10 items-center group hover:bg-slate-950 transition-all duration-700">
      <span class="text-7xl font-bold text-slate-100 hover:text-brand-primary transition-colors leading-none"><?php echo e($struct['n']); ?></span>
      <div class="space-y-4">
       <h5 class="font-bold text-slate-950 uppercase text-2xl tracking-tight hover:text-white transition-colors leading-none"><?php echo e($struct['t']); ?></h5>
       <p class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.2em] hover:text-slate-400 transition-colors leading-relaxed"><?php echo e($struct['d']); ?></p>
      </div>
     </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <div class="order-1 lg:order-2 space-y-12 animate-on-scroll">
     <div class="section-heading text-left">
      <span class="subtitle">Institutional Role</span>
      <h2>Your Absolute <br> <span class="text-brand-primary">Facilitator Node.</span></h2>
      <div class="accent-line"></div>
     </div>
     <p class="text-slate-500 text-lg leading-relaxed">
      World Grexpo Foundation acts as your strategic financial mentor, ensuring your industrial node is "Transition Ready" before reaching the lender node.
     </p>
     <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200">
      <?php $__currentLoopData = ['Pre-screening', 'Lender Node Connect', 'Transition Camps', 'Mentorship']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="px-8 py-5 bg-slate-950 text-white text-[10px] font-bold uppercase tracking-[0.3em] text-center border border-white/5">
        <?php echo e($tag); ?>

       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>
    </div>
   </div>

   <!-- Final Call To Action -->
   <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800 text-center">
    <div class="absolute inset-0 z-0">
     <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <div class="relative z-10 space-y-16 max-w-5xl mx-auto">
     <div class="space-y-8">
      <h3 class="text-3xl md:text-5xl font-bold text-white uppercase tracking-tight leading-[0.85]">
       Architect Your <br> <span class="text-brand-primary">Capital Node.</span>
      </h3>
      <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium">
       Unlock your industrial node potential with World Grexpo Foundation's Funding Support mandate. Acquire transition capital today.
      </p>
     </div>
     
     <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
      <a href="<?php echo e(route('contact')); ?>" class="btn-sharp px-16 group w-full sm:w-auto text-center justify-center">
       Apply for Funding 
       <i class="fa-solid fa-arrow-right-long ml-6 hover:translate-x-4 transition-transform"></i>
      </a>
      <a href="<?php echo e(route('register')); ?>" class="w-full sm:w-auto px-16 py-8 bg-white text-slate-950 font-bold uppercase tracking-[0.4em] text-[11px] hover:bg-brand-primary hover:text-white transition-all shadow-4xl">
       Acquire Membership
      </a>
     </div>
    </div>
   </div>

  </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/services/funding-initiative.blade.php ENDPATH**/ ?>