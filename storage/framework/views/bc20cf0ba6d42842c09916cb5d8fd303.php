<!-- CONFERENCE GROWTH SECTION (Homepage) -->
<section class="py-32 bg-white relative overflow-hidden">
    <!-- Premium Accents -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50 -z-0"></div>
    <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(to_right,#00000003_1px,transparent_1px),linear-gradient(to_bottom,#00000003_1px,transparent_1px)] bg-[size:60px_60px]"></div>

    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-20">
            <!-- Left Content -->
            <div class="w-full lg:w-1/3 text-left animate-on-scroll">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-accent/10 border-l-4 border-brand-accent mb-8">
                    <span class="text-brand-primary text-xs font-black tracking-[0.2em] uppercase">Impact Growth</span>
                </div>
                
                <h2 class="text-5xl md:text-6xl font-black text-slate-950 leading-[0.9] mb-10 tracking-tighter uppercase italic">
                    Scaling <br/>
                    <span class="text-brand-accent not-italic">Global</span> <br>
                    Excellence
                </h2>

                <div class="space-y-8">
                    <p class="text-slate-500 font-light text-xl leading-relaxed">
                        What started as a focused initiative has evolved into a global powerhouse, connecting visionaries across the sustainability spectrum.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-8 pt-6 border-t border-slate-100">
                        <div class="flex flex-col">
                            <span class="text-4xl font-black text-slate-950 tracking-tighter italic leading-none mb-2">5.2X</span>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Growth Factor</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-4xl font-black text-slate-950 tracking-tighter italic leading-none mb-2">1.8K+</span>
                            <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Expected 2027</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content (Dynamic Staircase) -->
            <div class="w-full lg:w-2/3 relative group">
                <!-- Sharp Geometric Decor -->
                <div class="absolute -top-10 -right-10 w-40 h-40 border border-brand-accent/20 -z-10 rotate-12"></div>
                <div class="absolute -bottom-10 -left-10 w-60 h-60 border border-brand-primary/10 -z-10 -rotate-6"></div>
                
                <div class="relative bg-white border border-slate-100 p-8 md:p-16 shadow-2xl rounded-sm">
                    <div class="flex items-end justify-center gap-3 md:gap-8" style="min-height: 400px;">
                        <?php 
                            $maxVal = $delegates->max(function($d) { 
                                return (int) preg_replace('/[^0-9]/', '', $d->value); 
                            }) ?: 1;
                        ?>
                        <?php $__currentLoopData = $delegates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $numericVal = (int) preg_replace('/[^0-9]/', '', $stat->value);
                                $percent = ($numericVal / $maxVal) * 100;
                                $h = max(25, $percent); 
                                $isLatest = ($index === count($delegates) - 1);
                            ?>
                            <div class="flex-1 flex flex-col items-center group/bar cursor-pointer">
                                <!-- Year Badge -->
                                <div class="mb-6 transition-transform group-hover/bar:-translate-y-2">
                                    <span class="text-xs md:text-sm font-black <?php echo e($isLatest ? 'text-brand-accent' : 'text-slate-400'); ?> tracking-widest uppercase"><?php echo e($stat->year); ?></span>
                                </div>

                                <!-- The Bar -->
                                <div class="w-full relative overflow-hidden transition-all duration-700 <?php echo e($isLatest ? 'shadow-[0_20px_50px_rgba(170,204,0,0.3)]' : 'shadow-xl'); ?> group-hover/bar:-translate-y-4 rounded-sm"
                                     style="height: <?php echo e(($h / 100) * 350); ?>px; background: <?php echo e($isLatest ? 'var(--color-brand-accent)' : 'var(--color-brand-primary)'); ?>;">
                                    
                                    <!-- Decorative Sharp Lines -->
                                    <div class="absolute inset-0 opacity-10">
                                        <div class="absolute top-0 left-0 w-full h-px bg-white"></div>
                                        <div class="absolute top-4 left-0 w-full h-px bg-white"></div>
                                        <div class="absolute top-8 left-0 w-full h-px bg-white"></div>
                                    </div>

                                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-1">
                                        <div class="text-xl md:text-3xl font-black <?php echo e($isLatest ? 'text-brand-primary-dark' : 'text-white'); ?> leading-none tracking-tighter"><?php echo e($stat->value); ?></div>
                                        <div class="text-[8px] font-black <?php echo e($isLatest ? 'text-brand-primary-dark/60' : 'text-white/40'); ?> uppercase tracking-widest mt-3 border-t <?php echo e($isLatest ? 'border-brand-primary-dark/10' : 'border-white/10'); ?> pt-3 hidden md:block">
                                            <?php echo e($stat->label ?: 'Visitors'); ?>

                                        </div>
                                    </div>

                                    <!-- Bottom Light Gradient -->
                                    <div class="absolute bottom-0 left-0 w-full h-1.5 bg-white/30 <?php echo e($isLatest ? '' : 'hidden'); ?>"></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="mt-24 flex flex-col md:flex-row items-center justify-center gap-12 animate-on-scroll delay-300">
             <a href="<?php echo e(route('growth')); ?>" class="group relative px-12 py-6 bg-slate-950 text-white rounded-sm overflow-hidden shadow-2xl transition-all hover:-translate-y-1">
                <div class="absolute inset-0 bg-brand-accent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative flex items-center gap-6">
                    <span class="font-black text-sm uppercase tracking-[0.2em] group-hover:text-brand-primary-dark transition-colors">Statistical Report</span>
                    <i class="fa-solid fa-arrow-right group-hover:text-brand-primary-dark group-hover:translate-x-2 transition-all"></i>
                </div>
             </a>
             <div class="text-center md:text-left">
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] mb-2 italic">
                    ( Including <?php echo e(count(config('sectors.sectors'))); ?>+ Global Sectors )
                </p>
                <div class="flex gap-1.5 justify-center md:justify-start">
                    <?php for($i=0; $i<5; $i++): ?>
                        <i class="fa-solid fa-star text-brand-accent text-[10px]"></i>
                    <?php endfor; ?>
                </div>
             </div>
        </div>
    </div>
</section>

<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/growth.blade.php ENDPATH**/ ?>