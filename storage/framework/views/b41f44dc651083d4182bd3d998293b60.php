<section class="section-padding bg-slate-50 relative overflow-hidden">
    <!-- Visual Decorators -->
    <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-brand-primary/5 rounded-full blur-[150px] -translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="max-w-4xl mb-24 animate-on-scroll">
            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    Institutional DNA
                </div>
                <h2 class="text-6xl md:text-8xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                    The <span class="text-brand-primary italic">POWER</span> <br> Framework.
                </h2>
                <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-200 pl-8">
                    The structural DNA of World Grexpo Foundation is built upon the proprietary POWER framework, driving absolute precision in global industrial node governance.
                </p>
            </div>
        </div>

        <!-- P-O-W-E-R Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <?php
                $power = [
                    ['l' => 'P', 't' => 'Passion', 'd' => 'Unwavering institutional dedication to our mission and nodes.', 'icon' => 'fa-fire-flame-curved'],
                    ['l' => 'O', 't' => 'Ownership', 'd' => 'Taking absolute responsibility for global industrial outcomes.', 'icon' => 'fa-hand-holding-heart'],
                    ['l' => 'W', 't' => 'Work-Life', 'd' => 'Promoting a sustainable balance for industrial visionaries.', 'icon' => 'fa-scale-balanced'],
                    ['l' => 'E', 't' => 'Excellence', 'd' => 'Consistently exceeding absolute global industrial standards.', 'icon' => 'fa-award'],
                    ['l' => 'R', 't' => 'Respect', 'd' => 'Operating with absolute institutional integrity and honor.', 'icon' => 'fa-handshake'],
                ];
            ?>

            <?php $__currentLoopData = $power; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-10 rounded-[3rem] bg-white border border-slate-100 shadow-xl group hover:bg-slate-950 transition-all duration-700 animate-on-scroll" style="transition-delay: <?php echo e($idx * 100); ?>ms">
                    <div class="space-y-8">
                        <div class="w-16 h-16 rounded-2xl bg-brand-primary/5 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all shadow-lg">
                            <i class="fa-solid <?php echo e($p['icon']); ?> text-xl"></i>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-baseline gap-2">
                                <span class="text-4xl font-black text-brand-primary italic leading-none"><?php echo e($p['l']); ?></span>
                                <h4 class="text-2xl font-black text-slate-900 group-hover:text-white uppercase tracking-tighter italic transition-colors leading-none"><?php echo e($p['t']); ?></h4>
                            </div>
                            <p class="text-[10px] font-black text-slate-400 group-hover:text-slate-500 uppercase tracking-[0.2em] leading-relaxed transition-colors"><?php echo e($p['d']); ?></p>
                        </div>
                        
                        <!-- Interactive Progress -->
                        <div class="pt-6">
                            <div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
                                <div class="h-full bg-brand-primary w-0 group-hover:w-full transition-all duration-1000 ease-out"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/partials/core_values.blade.php ENDPATH**/ ?>