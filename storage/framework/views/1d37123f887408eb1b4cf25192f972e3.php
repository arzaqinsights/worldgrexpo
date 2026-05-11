<!-- Why Choose World Grexpo -->
<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Accents -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50/50 -z-0"></div>
    <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:40px_40px] opacity-20"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-12 mb-24">
            <div class="max-w-4xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">The Grexpo Advantage</span>
                    <h2>Why <span class="text-brand-primary">100K+</span> Visionaries Trust Us.</h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-3xl">
                    Connect, grow, and transform with the world's most powerful industrial ecosystem. We provide the intelligence, network, and framework your enterprise needs to lead the global revolution.
                </p>
            </div>
        </div>

        <?php
            $reasons = [
                [
                    'icon' => 'fa-solid fa-network-wired',
                    'color' => 'text-slate-900',
                    'title' => 'Global Intelligence Network',
                    'desc' => 'Connects businesses across global nodes, enabling strategic partnerships and market dominance through an elite ecosystem.',
                    'points' => ['Global Nodes', 'Strategic Alliances', 'Visionary Network']
                ],
                [
                    'icon' => 'fa-solid fa-building-shield',
                    'color' => 'text-slate-900',
                    'title' => 'Sovereign Representation',
                    'desc' => 'Acts as the primary bridge between industry leaders and global policy makers for structural support.'
                ],
                [
                    'icon' => 'fa-solid fa-chart-line',
                    'color' => 'text-slate-900',
                    'title' => 'Growth Framework',
                    'desc' => 'From startups to global conglomerates, we provide proprietary tools for modernization and scaling.',
                    'points' => ['Capital Access', 'ESG Integration', 'Digital Evolution']
                ],
                [
                    'icon' => 'fa-solid fa-microphone-lines',
                    'color' => 'text-slate-900',
                    'title' => 'High-Impact Summits',
                    'desc' => 'Elite-scale global conferences in Green Hydrogen, EV, and Renewable energy frameworks.'
                ],
                [
                    'icon' => 'fa-solid fa-medal',
                    'color' => 'text-slate-900',
                    'title' => 'Market Credibility',
                    'desc' => 'Our global recognition frameworks help brands build unmatched credibility and leadership positioning.',
                    'points' => ['Benchmarking', 'Market Authority', 'Elite Positioning']
                ],
                [
                    'icon' => 'fa-solid fa-user-tie',
                    'color' => 'text-slate-900',
                    'title' => 'Elite Advisory Council',
                    'desc' => 'Guided by global laureates and industry titans for absolute mentorship and strategic direction.'
                ],
                [
                    'icon' => 'fa-solid fa-layer-group',
                    'color' => 'text-slate-900',
                    'title' => 'Cross-Sector Dominance',
                    'desc' => 'Operating across 50+ diverse industries—making it a unified platform for multi-dimensional innovation.',
                    'points' => ['Sector Synergy', 'Impact Innovation', 'Scale Expertise']
                ],
                [
                    'icon' => 'fa-solid fa-rocket',
                    'color' => 'text-slate-900',
                    'title' => 'Sustainability Focus',
                    'desc' => 'Empowering enterprises with the knowledge and frameworks to lead the global green transition.'
                ],
                [
                    'icon' => 'fa-solid fa-certificate',
                    'color' => 'text-slate-900',
                    'title' => 'International Standards',
                    'desc' => 'Collaborations with global entities help industries upgrade to absolute standards and penetrate elite markets.',
                    'points' => ['Absolute Standards', 'Export Dominance', 'Global Entry']
                ],
                [
                    'icon' => 'fa-solid fa-leaf',
                    'color' => 'text-slate-900',
                    'title' => 'Circular Impact',
                    'desc' => 'Leading the charge in circular economy, women in leadership, and ESG-driven social initiatives.'
                ],
            ];
        ?>

        <div class="space-y-1">
            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div class="lg:col-span-3 bg-slate-900 p-6  relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col md:flex-row gap-12 items-start">
                        <div class="w-20 h-20 bg-brand-primary flex items-center justify-center shrink-0">
                            <i class="<?php echo e($reasons[0]['icon']); ?> text-white text-3xl"></i>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter"><?php echo e($reasons[0]['title']); ?></h3>
                            <p class="text-white/60 text-lg leading-relaxed max-w-2xl"><?php echo e($reasons[0]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[0]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 text-[9px] font-black text-white uppercase tracking-widest"><?php echo e($point); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-primary p-6 flex flex-col justify-between group">
                    <div class="w-12 h-12 bg-white flex items-center justify-center mb-10">
                        <i class="<?php echo e($reasons[1]['icon']); ?> text-brand-primary text-xl"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-black text-white uppercase tracking-tighter leading-tight"><?php echo e($reasons[1]['title']); ?></h3>
                        <p class="text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-widest leading-relaxed"><?php echo e($reasons[1]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div class="bg-brand-primary p-6 flex flex-col justify-between group">
                    <div class="w-12 h-12 bg-white flex items-center justify-center mb-10">
                        <i class="<?php echo e($reasons[3]['icon']); ?> text-brand-primary text-xl"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-black text-white uppercase tracking-tighter leading-tight"><?php echo e($reasons[3]['title']); ?></h3>
                        <p class="text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-widest leading-relaxed"><?php echo e($reasons[3]['desc']); ?></p>
                    </div>
                </div>
                <div class="lg:col-span-3 bg-slate-900 p-6  relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col md:flex-row gap-12 items-start">
                        <div class="w-20 h-20 bg-brand-accent flex items-center justify-center shrink-0">
                            <i class="<?php echo e($reasons[2]['icon']); ?> text-brand-primary-dark text-3xl"></i>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter"><?php echo e($reasons[2]['title']); ?></h3>
                            <p class="text-white/60 text-lg leading-relaxed max-w-2xl"><?php echo e($reasons[2]['desc']); ?></p>
                            <div class="grid grid-cols-3 gap-4">
                                <?php $__currentLoopData = $reasons[2]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center gap-3 bg-white/5 p-3 border border-white/10">
                                        <i class="fa-solid fa-plus text-brand-accent text-[8px]"></i>
                                        <span class="text-[9px] font-black text-white uppercase tracking-widest"><?php echo e($point); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div class="lg:col-span-3 bg-slate-900 p-6  relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col md:flex-row gap-12 items-start">
                        <div class="w-20 h-20 bg-white flex items-center justify-center shrink-0">
                            <i class="<?php echo e($reasons[4]['icon']); ?> text-brand-primary text-3xl"></i>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter"><?php echo e($reasons[4]['title']); ?></h3>
                            <p class="text-white/60 text-lg leading-relaxed max-w-2xl"><?php echo e($reasons[4]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[4]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-brand-accent text-brand-primary-dark text-[9px] font-black uppercase tracking-widest"><?php echo e($point); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-primary p-6 flex flex-col justify-between group">
                    <div class="w-12 h-12 bg-white flex items-center justify-center mb-10">
                        <i class="<?php echo e($reasons[5]['icon']); ?> text-brand-primary text-xl"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-black text-white uppercase tracking-tighter leading-tight"><?php echo e($reasons[5]['title']); ?></h3>
                        <p class="text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-widest leading-relaxed"><?php echo e($reasons[5]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div class="bg-brand-primary p-6 flex flex-col justify-between group">
                    <div class="w-12 h-12 bg-white flex items-center justify-center mb-10">
                        <i class="<?php echo e($reasons[7]['icon']); ?> text-brand-primary text-xl"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-black text-white uppercase tracking-tighter leading-tight"><?php echo e($reasons[7]['title']); ?></h3>
                        <p class="text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-widest leading-relaxed"><?php echo e($reasons[7]['desc']); ?></p>
                    </div>
                </div>
                <div class="lg:col-span-3 bg-slate-900 p-6  relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col md:flex-row gap-12 items-start">
                        <div class="w-20 h-20 bg-brand-primary flex items-center justify-center shrink-0">
                            <i class="<?php echo e($reasons[6]['icon']); ?> text-white text-3xl"></i>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter"><?php echo e($reasons[6]['title']); ?></h3>
                            <p class="text-white/60 text-lg leading-relaxed max-w-2xl"><?php echo e($reasons[6]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[6]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 text-[9px] font-black text-white uppercase tracking-widest"><?php echo e($point); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-1">
                <div class="lg:col-span-3 bg-slate-900 p-6  relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col md:flex-row gap-12 items-start">
                        <div class="w-20 h-20 bg-brand-accent flex items-center justify-center shrink-0">
                            <i class="<?php echo e($reasons[8]['icon']); ?> text-brand-primary-dark text-3xl"></i>
                        </div>
                        <div class="space-y-6">
                            <h3 class="text-3xl font-black text-white uppercase tracking-tighter"><?php echo e($reasons[8]['title']); ?></h3>
                            <p class="text-white/60 text-lg leading-relaxed max-w-2xl"><?php echo e($reasons[8]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[8]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 text-[9px] font-black text-white uppercase tracking-widest"><?php echo e($point); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-brand-primary p-6 flex flex-col justify-between group">
                    <div class="w-12 h-12 bg-white flex items-center justify-center mb-10">
                        <i class="<?php echo e($reasons[9]['icon']); ?> text-brand-primary text-xl"></i>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-black text-white uppercase tracking-tighter leading-tight"><?php echo e($reasons[9]['title']); ?></h3>
                        <p class="text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-widest leading-relaxed"><?php echo e($reasons[9]['desc']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sharp Closing Statement -->
        <div class="mt-6 bg-slate-900 p-6 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-[repeating-linear-gradient(45deg,transparent,transparent_10px,rgba(255,255,255,0.02)_10px,rgba(255,255,255,0.02)_20px)]"></div>
            <div class="relative z-10 mx-auto text-center space-y-10">
                <i class="fa-solid fa-quote-left text-5xl text-brand-accent opacity-40"></i>
                <h3 class="text-4xl md:text-5xl font-black text-white leading-tight uppercase tracking-tighter">
                    World Grexpo is more than a foundation — it is a <span class="text-brand-primary">Global Catalyst</span> for the industrial sustainability transition.
                </h3>
                <div class="w-24 h-2 bg-brand-accent mx-auto"></div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/why_choose.blade.php ENDPATH**/ ?>