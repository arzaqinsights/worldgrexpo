<section class="section-padding bg-white relative overflow-hidden">
    <!-- Visual Decorators -->
    <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-brand-primary/5 rounded-full blur-[150px] translate-x-1/2 translate-y-1/2"></div>
    
    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row justify-between items-end mb-24 gap-12 animate-on-scroll">
            <div class="space-y-6 max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                    Executive Board
                </div>
                <h2 class="text-6xl md:text-8xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                    Institutional <br> <span class="text-brand-primary italic">Leadership.</span>
                </h2>
            </div>
            <p class="text-xl text-slate-500 font-medium italic max-w-sm leading-relaxed border-l-4 border-brand-primary/20 pl-8 pb-4">
                Architecting the global mission of World Grexpo Foundation through distinguished board governance.
            </p>
        </div>

        <!-- Leadership Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <?php
                $leaders = [
                    [
                        'name' => 'Dr. Indrajit Ghosh',
                        'role' => 'Global Chairman & MD',
                        'img' => asset('images/about/chairman.png'),
                        'desc' => 'Mechanical Engineer and MBA holder with over 36 years of international expertise spanning Plastics, Packaging, Leather, and Waste Management sectors.',
                        'delay' => 0
                    ],
                    [
                        'name' => 'Dr. Nirmalendu Nath',
                        'role' => 'President',
                        'img' => asset('images/about/president.png'),
                        'desc' => 'PhD in Botany, Dr. Nath serves as the backbone of our agrarian initiatives. Former Director of the Pusa Institute and the Botanical Survey of India.',
                        'delay' => 100
                    ],
                    [
                        'name' => 'Ms. Sagarika Ghosh',
                        'role' => 'Director',
                        'img' => asset('images/about/director.png'),
                        'desc' => 'Ms. Ghosh spearheads strategic alliance with ‘Publishing Matters’. A dynamic leader in scholarly publishing and an ardent advocate for Open Research.',
                        'delay' => 200
                    ],
                    [
                        'name' => 'Mr. Aditya Ghosh',
                        'role' => 'Managing Director',
                        'img' => asset('images/about/md.png'),
                        'desc' => 'Based strategically in Australia, Mr. Aditya pioneers aggressive international outreach and establishing high-value global trade corridors.',
                        'delay' => 300
                    ]
                ];
            ?>

            <?php $__currentLoopData = $leaders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="group relative rounded-[3rem] overflow-hidden bg-slate-50 border border-slate-100 shadow-xl transition-all duration-700 hover:-translate-y-4 hover:shadow-brand-primary/20 animate-on-scroll" style="transition-delay: <?php echo e($leader['delay']); ?>ms">
                <!-- Media Layer -->
                <div class="relative aspect-[4/5] overflow-hidden">
                    <img src="<?php echo e($leader['img']); ?>" 
                        alt="<?php echo e($leader['name']); ?>" 
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-110">
                    
                    <!-- Premium Overlays -->
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/40 to-transparent opacity-80 group-hover:opacity-40 transition-opacity"></div>
                    
                    <!-- Content Overlay -->
                    <div class="absolute bottom-0 left-0 right-0 p-10 space-y-4">
                        <div class="space-y-1">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter leading-none group-hover:text-brand-primary transition-colors">
                                <?php echo e($leader['name']); ?>

                            </h3>
                            <div class="flex items-center gap-3">
                                <div class="h-[1px] w-6 bg-brand-primary transition-all group-hover:w-12"></div>
                                <span class="text-[9px] font-black text-brand-accent uppercase tracking-[0.2em] italic"><?php echo e($leader['role']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bio Layer -->
                <div class="p-10 space-y-6 bg-white group-hover:bg-slate-950 transition-colors duration-700 h-full">
                    <p class="text-slate-500 text-[11px] font-bold uppercase tracking-widest leading-relaxed group-hover:text-slate-400 transition-colors">
                        <?php echo e($leader['desc']); ?>

                    </p>
                    
                    <div class="pt-6 border-t border-slate-100 group-hover:border-white/10 transition-colors">
                        <a href="#" class="inline-flex items-center gap-4 text-[9px] font-black text-slate-950 uppercase tracking-[0.3em] group-hover:text-brand-accent transition-all">
                            View Profile <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/partials/leadership.blade.php ENDPATH**/ ?>