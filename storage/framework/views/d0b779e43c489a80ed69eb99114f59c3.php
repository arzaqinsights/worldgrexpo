

<?php $__env->startSection('title', 'Global Chairman | World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>
 <!-- Sharp Industrial Hero -->
 <section class="relative pt-40 pb-20 bg-slate-900 overflow-hidden">
  <div class="absolute inset-0 z-0">
   <div class="absolute inset-0 opacity-40 " 
     style="background-image: url('<?php echo e(asset('images/home/chairman.jpg')); ?>'); background-size: cover; background-position: center top;"></div>
   <div class="absolute inset-0 bg-linear-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
  </div>
  
  <div class="container relative z-10">
   <div class="max-w-4xl space-y-10">
    <div class="section-heading">
     <span class="subtitle !text-brand-accent">Global Leadership Node</span>
     <h1 class="text-white">The <span class="text-brand-primary">Chairman's</span> Vision.</h1>
     <div class="accent-line !bg-brand-accent"></div>
    </div>
    
    <div class="flex items-center gap-8 border-l-4 border-brand-primary pl-8">
     <div>
      <h2 class="text-4xl font-bold text-white uppercase tracking-tight">Dr. Indrajit Ghosh</h2>
      <p class="text-brand-primary font-bold uppercase tracking-widest text-sm mt-2">Global Chairman, World Grexpo Foundation</p>
     </div>
    </div>
   </div>
  </div>
 </section>

 <!-- Sharp Bento Message Grid -->
 <section class="py-20 bg-white relative overflow-hidden">
  <div class="container relative z-10">
   <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Main Message Card -->
    <div class="lg:col-span-2 bg-white p-12 lg:p-20 space-y-12 border-b lg:border-b-0 lg:border-r border-slate-100">
     <div class="space-y-8">
      <div class="flex items-center gap-4">
       <span class="w-12 h-1 bg-brand-primary"></span>
       <span class="text-[10px] font-bold uppercase tracking-[0.3em] text-slate-400">Strategic Mandate</span>
      </div>
      <h3 class="text-3xl font-bold text-slate-900 leading-[1.1] uppercase tracking-tight italic">
       "I am profoundly honored to lead the <span class="text-brand-primary">World Grexpo Foundation</span> as we architect the most sustainable industrial framework for the next century."
      </h3>
     </div>

     <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-12 border-t border-slate-50">
      <div class="space-y-6">
       <h4 class="text-xs font-bold uppercase tracking-widest text-slate-900">The Collective Vision</h4>
       <p class="text-slate-500 text-lg leading-relaxed">
        Together with our Board of Directors and dedicated staff, we share a singular, unwavering vision: to make World Grexpo the strongest, most sustainable, and inclusive community for global industries.
       </p>
      </div>
      <div class="space-y-6">
       <h4 class="text-xs font-bold uppercase tracking-widest text-slate-900">Industrial Legacy</h4>
       <p class="text-slate-500 text-lg leading-relaxed">
        Throughout my 36+ years of global operation, I have witnessed the incredible potential of sustainable manufacturing. My mandate is clear—bridging the gap between industrial brilliance and global economic stages.
       </p>
      </div>
     </div>

     <div class="p-10 bg-slate-50 border border-slate-100 relative group overflow-hidden">
      <div class="absolute left-0 top-0 w-1.5 h-full bg-brand-primary"></div>
      <p class="text-xl text-slate-900 font-bold uppercase tracking-tight italic">
       "We do not simply offer networking; we architect massive growth corridors through Circular Economy strategies and ESG-driven frameworks."
      </p>
     </div>
    </div>

    <!-- Stats & Credentials Column -->
    <div class="bg-slate-950 p-12 lg:p-16 flex flex-col justify-between space-y-16">
     <div class="space-y-12">
      <div class="flex items-center gap-4">
       <span class="w-8 h-[1px] bg-brand-accent"></span>
       <span class="text-[9px] font-bold uppercase tracking-[0.3em] text-brand-accent">Global Footprint</span>
      </div>
      
      <div class="space-y-10">
       <?php $__currentLoopData = [
        ['v' => '36+', 'l' => 'Years Active', 's' => 'Industrial Operations'],
        ['v' => '40+', 'l' => 'Countries', 's' => 'Strategic Reach'],
        ['v' => '2019', 'l' => 'Foundation', 's' => 'Global Inception'],
       ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="space-y-2">
        <span class="block text-3xl font-bold text-white tracking-tight"><?php echo e($stat['v']); ?></span>
        <div class="flex flex-col">
         <span class="text-[9px] font-bold uppercase tracking-[0.2em] text-brand-primary"><?php echo e($stat['l']); ?></span>
         <span class="text-[8px] font-bold uppercase tracking-widest text-slate-500"><?php echo e($stat['s']); ?></span>
        </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
     </div>

     <div class="pt-12 border-t border-white/10">
      <div class="space-y-4">
       <h5 class="text-[10px] font-bold text-white uppercase tracking-[0.3em]">Academic Honors</h5>
       <p class="text-xs font-bold text-slate-400 uppercase tracking-widest leading-loose">Mechanical Engineering & MBA <br> Academic Excellence Node</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section>

 <!-- Global Invitation CTA -->
 <section class="py-24 bg-slate-50 border-b border-slate-100">
  <div class="container">
   <div class="max-w-4xl mx-auto text-center space-y-10">
    <h3 class="text-4xl font-bold text-slate-900 uppercase tracking-tight">Architect Your Future With Us.</h3>
    <p class="text-xl text-slate-500 text-lg leading-relaxed">
     I invite every passionate visionary to step forward and journey with us toward a zero-carbon, high-growth global future.
    </p>
    <div class="flex justify-center pt-6">
     <a href="<?php echo e(route('register')); ?>" class="btn-sharp group">
      Join the Global Network <i class="fa-solid fa-arrow-right ml-4 hover:translate-x-3 transition-transform"></i>
     </a>
    </div>
   </div>
  </div>
 </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/chairman.blade.php ENDPATH**/ ?>