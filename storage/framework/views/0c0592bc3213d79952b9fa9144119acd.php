<section class="py-32 bg-white relative overflow-hidden">
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-left max-w-4xl mb-32 animate-on-scroll">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Trajectory</span>
            </div>
            <h2 class="text-6xl md:text-8xl font-black text-slate-950 mb-10 tracking-tighter uppercase italic leading-[0.85]">
                Our Structural <br> <span class="text-brand-accent not-italic">History</span>
            </h2>
            <p class="text-slate-500 text-2xl font-light leading-relaxed italic border-l-2 border-slate-200 pl-8">
                The strategic evolution of the world's most influential industrial sustainability foundation nodes.
            </p>
        </div>

        <!-- Vertical Timeline Journey -->
        <div class="relative max-w-6xl">
            <!-- Central Line -->
            <div class="hidden md:block absolute top-0 left-12 w-px h-full bg-slate-200"></div>

            <div class="space-y-24">
                <?php
                    $history = [
                        ['y' => '2019', 't' => 'The Genesis Node', 'd' => 'Formally architected under Section 8 of the Companies Act with a distinct vision to uplift global industrial units.', 'i' => 'seedling'],
                        ['y' => '2021', 't' => 'Global Node Expansion', 'd' => 'Dr. Indrajit Ghosh leads institutional delegations to multiple nations, establishing absolute export mechanisms.', 'i' => 'globe'],
                        ['y' => '2024', 't' => 'Strategic Synergy', 'd' => 'A monumental institutional partnership forming unshakeable bonds between industrial units and research nodes.', 'i' => 'handshake'],
                        ['y' => '2026', 't' => 'The Apex Mandate', 'd' => 'Setting the absolute stage for the Sustainable Global Tex Trade Fair, a landmark institutional event.', 'i' => 'flag-checkered']
                    ];
                ?>

                <?php $__currentLoopData = $history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="relative flex flex-col md:flex-row items-start group animate-on-scroll">
                    <!-- Node point -->
                    <div class="hidden md:flex absolute left-12 w-16 h-16 bg-white border border-slate-200 rounded-sm items-center justify-center -translate-x-1/2 z-10 group-hover:bg-slate-950 group-hover:border-slate-950 transition-all duration-700 shadow-2xl">
                        <span class="text-[10px] font-black text-slate-950 group-hover:text-brand-accent transition-colors italic"><?php echo e($h['y']); ?></span>
                    </div>
                    
                    <div class="md:ml-32 w-full">
                        <div class="p-12 bg-slate-50 border border-slate-100 rounded-sm group-hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-12 opacity-5 group-hover:opacity-10 transition-opacity">
                                <i class="fa-solid fa-<?php echo e($h['i']); ?> text-9xl"></i>
                            </div>
                            <div class="md:hidden inline-block px-4 py-2 bg-slate-950 text-brand-accent font-black text-[10px] mb-6 italic rounded-sm"><?php echo e($h['y']); ?></div>
                            <h3 class="text-3xl font-black text-slate-950 mb-6 group-hover:text-white uppercase italic tracking-tighter transition-colors leading-none"><?php echo e($h['t']); ?></h3>
                            <p class="text-slate-500 text-lg leading-relaxed font-light italic group-hover:text-slate-400 transition-colors max-w-2xl">
                                <?php echo e($h['d']); ?>

                            </p>
                            <div class="mt-10 w-0 h-1 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/partials/history.blade.php ENDPATH**/ ?>