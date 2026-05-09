<!-- Why Choose World Grexpo -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Sharp Geometric Decor -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-slate-50 -z-0"></div>
    <div class="absolute top-0 left-0 w-full h-full bg-[linear-gradient(to_right,#00000003_1px,transparent_1px),linear-gradient(to_bottom,#00000003_1px,transparent_1px)] bg-[size:50px_50px]"></div>

    <div class="container relative z-10">
        <!-- Section Header -->
        <div class="text-left flex flex-col md:flex-row items-center justify-between mb-24 animate-on-scroll">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-accent/10 border-l-4 border-brand-accent mb-8">
                    <i class="fa-solid fa-shield-halved text-brand-primary text-xs"></i>
                    <span class="text-brand-primary text-[10px] font-black tracking-[0.2em] uppercase">The World Grexpo Advantage</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-950 mb-10 leading-[0.9] tracking-tighter uppercase italic">
                    Why <span class="text-brand-accent not-italic">100K+</span> Visionaries Trust <span class="text-brand-accent not-italic">Grexpo</span>
                </h2>
            </div>
            <p class="text-slate-500 max-w-xl font-light text-xl leading-relaxed">
                Connect, grow, and transform with the world's most powerful sustainability ecosystem. We provide the intelligence, network, and framework your enterprise needs to lead the green revolution.
            </p>
        </div>

        <?php
            $reasons = [
                [
                    'icon' => 'fa-solid fa-network-wired',
                    'color' => 'text-slate-950',
                    'title' => 'Global Intelligence Network',
                    'desc' => 'Connects businesses across global nodes, enabling strategic partnerships and market dominance through an elite ecosystem of industry visionaries.',
                    'points' => ['Global Nodes', 'Strategic Alliances', 'Visionary Network']
                ],
                [
                    'icon' => 'fa-solid fa-building-shield',
                    'color' => 'text-slate-950',
                    'title' => 'Sovereign Representation',
                    'desc' => 'Acts as the primary bridge between industry leaders and global policy makers for structural support.'
                ],
                [
                    'icon' => 'fa-solid fa-chart-line',
                    'color' => 'text-slate-950',
                    'title' => 'Exponential Growth Framework',
                    'desc' => 'From startups to global conglomerates, we provide proprietary tools for modernization and scaling.',
                    'points' => [
                        'Global Capital Access',
                        'ESG Integration',
                        'Digital Evolution',
                        'Advanced Certification'
                    ]
                ],
                [
                    'icon' => 'fa-solid fa-microphone-lines',
                    'color' => 'text-slate-950',
                    'title' => 'High-Impact Summits',
                    'desc' => 'Elite-scale global conferences in Green Hydrogen, EV, and Renewable energy frameworks.'
                ],
                [
                    'icon' => 'fa-solid fa-medal',
                    'color' => 'text-slate-950',
                    'title' => 'Prestige & Market Credibility',
                    'desc' => 'Our global recognition frameworks help brands build unmatched credibility and leadership positioning across international markets.',
                    'points' => ['Global Benchmarking', 'Market Authority', 'Elite Positioning']
                ],
                [
                    'icon' => 'fa-solid fa-user-tie',
                    'color' => 'text-slate-950',
                    'title' => 'Elite Advisory Council',
                    'desc' => 'Guided by global laureates and industry titans for absolute mentorship and strategic direction.'
                ],
                [
                    'icon' => 'fa-solid fa-layer-group',
                    'color' => 'text-slate-950',
                    'title' => 'Cross-Sector Dominance',
                    'desc' => 'Operating across 50+ diverse industries—making it a unified platform for multi-dimensional innovation.',
                    'points' => ['Sector Synergy', 'Impact Innovation', 'Scale Expertise']
                ],
                [
                    'icon' => 'fa-solid fa-rocket',
                    'color' => 'text-slate-950',
                    'title' => 'Focus on Sustainability',
                    'desc' => 'Empowering enterprises with the knowledge and frameworks to lead the global green transition.'
                ],
                [
                    'icon' => 'fa-solid fa-certificate',
                    'color' => 'text-slate-950',
                    'title' => 'International Frameworks',
                    'desc' => 'Collaborations with global entities help industries upgrade to absolute standards and penetrate elite international markets.',
                    'points' => ['Absolute Standards', 'Export Dominance', 'Global Market Entry']
                ],
                [
                    'icon' => 'fa-solid fa-leaf',
                    'color' => 'text-slate-950',
                    'title' => 'Circular Impact',
                    'desc' => 'Leading the charge in circular economy, women in leadership, and ESG-driven social initiatives.'
                ],
            ];
        ?>        <div class="space-y-12">
            
            <?php
                $bigCardClass = "lg:col-span-3 rounded-sm p-12 bg-slate-950 border border-slate-900 hover:border-brand-accent transition-all duration-700 group animate-on-scroll relative overflow-hidden shadow-2xl";
                $smallCardClass = "rounded-sm p-10 bg-brand-primary border border-brand-primary-dark hover:border-brand-accent transition-all duration-500 animate-on-scroll flex flex-col justify-between relative overflow-hidden group shadow-xl";
                $iconBox = "w-20 h-20 shrink-0 rounded-sm bg-white shadow-2xl flex items-center justify-center group-hover:scale-110 transition-transform mb-8";
                $titleClass = "text-2xl md:text-4xl font-black text-white mb-6 tracking-tighter uppercase italic group-hover:text-brand-accent transition-colors leading-none";
                $descClass = "text-slate-400 font-light text-lg leading-relaxed mb-8 group-hover:text-slate-200 transition-colors";
            ?>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <div class="<?php echo e($bigCardClass); ?>">
                    <div class="flex flex-col md:flex-row items-start gap-10 relative z-10">
                        <div class="<?php echo e($iconBox); ?>">
                            <i class="<?php echo e($reasons[0]['icon']); ?> <?php echo e($reasons[0]['color']); ?> text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="<?php echo e($titleClass); ?>"><?php echo e($reasons[0]['title']); ?></h3>
                            <p class="<?php echo e($descClass); ?>"><?php echo e($reasons[0]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[0]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-white/5 rounded-sm text-[10px] font-black text-white border border-white/10 uppercase tracking-widest italic">
                                        <?php echo e($point); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-accent opacity-5 -translate-y-1/2 translate-x-1/2 rotate-45"></div>
                </div>
                <div class="<?php echo e($smallCardClass); ?>">
                    <div class="w-14 h-14 rounded-sm bg-white flex items-center justify-center mb-8 shadow-xl group-hover:rotate-12 transition-transform">
                        <i class="<?php echo e($reasons[1]['icon']); ?> <?php echo e($reasons[1]['color']); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white text-xl mb-4 leading-tight uppercase tracking-tighter italic"><?php echo e($reasons[1]['title']); ?></h3>
                        <p class="text-[10px] text-slate-100 font-bold leading-relaxed uppercase tracking-widest opacity-60"><?php echo e($reasons[1]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <div class="<?php echo e($bigCardClass); ?> lg:order-2">
                    <div class="flex flex-col md:flex-row items-start gap-10 relative z-10">
                        <div class="<?php echo e($iconBox); ?>">
                            <i class="<?php echo e($reasons[2]['icon']); ?> <?php echo e($reasons[2]['color']); ?> text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="<?php echo e($titleClass); ?>"><?php echo e($reasons[2]['title']); ?></h3>
                            <p class="<?php echo e($descClass); ?>"><?php echo e($reasons[2]['desc']); ?></p>
                            <div class="grid grid-cols-2 gap-4">
                                <?php $__currentLoopData = $reasons[2]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center gap-3 bg-white/5 p-3 rounded-sm border border-white/10">
                                        <i class="fa-solid fa-check text-brand-accent text-[10px]"></i>
                                        <span class="text-[10px] font-black text-slate-200 uppercase tracking-widest italic"><?php echo e($point); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-brand-primary-light opacity-5 translate-y-1/2 -translate-x-1/2 -rotate-12"></div>
                </div>
                <div class="<?php echo e($smallCardClass); ?> lg:order-1">
                    <div class="w-14 h-14 rounded-sm bg-white flex items-center justify-center mb-8 shadow-xl group-hover:-rotate-12 transition-transform">
                        <i class="<?php echo e($reasons[3]['icon']); ?> <?php echo e($reasons[3]['color']); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white text-xl mb-4 leading-tight uppercase tracking-tighter italic"><?php echo e($reasons[3]['title']); ?></h3>
                        <p class="text-[10px] text-slate-100 font-bold leading-relaxed uppercase tracking-widest opacity-60"><?php echo e($reasons[3]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <div class="<?php echo e($bigCardClass); ?>">
                    <div class="flex flex-col md:flex-row items-start gap-10 relative z-10">
                        <div class="<?php echo e($iconBox); ?>">
                            <i class="<?php echo e($reasons[4]['icon']); ?> <?php echo e($reasons[4]['color']); ?> text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="<?php echo e($titleClass); ?>"><?php echo e($reasons[4]['title']); ?></h3>
                            <p class="<?php echo e($descClass); ?>"><?php echo e($reasons[4]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[4]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-brand-accent text-brand-primary-dark rounded-sm text-[10px] font-black uppercase tracking-widest italic shadow-lg">
                                        <?php echo e($point); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="<?php echo e($smallCardClass); ?>">
                    <div class="w-14 h-14 rounded-sm bg-white flex items-center justify-center mb-8 shadow-xl group-hover:scale-110 transition-transform">
                        <i class="<?php echo e($reasons[5]['icon']); ?> <?php echo e($reasons[5]['color']); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white text-xl mb-4 leading-tight uppercase tracking-tighter italic"><?php echo e($reasons[5]['title']); ?></h3>
                        <p class="text-[10px] text-slate-100 font-bold leading-relaxed uppercase tracking-widest opacity-60"><?php echo e($reasons[5]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <div class="<?php echo e($bigCardClass); ?> lg:order-2">
                    <div class="flex flex-col md:flex-row items-start gap-10 relative z-10">
                        <div class="<?php echo e($iconBox); ?>">
                            <i class="<?php echo e($reasons[6]['icon']); ?> <?php echo e($reasons[6]['color']); ?> text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="<?php echo e($titleClass); ?>"><?php echo e($reasons[6]['title']); ?></h3>
                            <p class="<?php echo e($descClass); ?>"><?php echo e($reasons[6]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[6]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-4 py-1.5 bg-white/5 rounded-sm text-[10px] font-black text-white border border-white/10 italic uppercase tracking-widest">
                                        # <?php echo e($point); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="<?php echo e($smallCardClass); ?> lg:order-1">
                    <div class="w-14 h-14 rounded-sm bg-white flex items-center justify-center mb-8 shadow-xl group-hover:rotate-12 transition-transform">
                        <i class="<?php echo e($reasons[7]['icon']); ?> <?php echo e($reasons[7]['color']); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white text-xl mb-4 leading-tight uppercase tracking-tighter italic"><?php echo e($reasons[7]['title']); ?></h3>
                        <p class="text-[10px] text-slate-100 font-bold leading-relaxed uppercase tracking-widest opacity-60"><?php echo e($reasons[7]['desc']); ?></p>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <div class="<?php echo e($bigCardClass); ?>">
                    <div class="flex flex-col md:flex-row items-start gap-10 relative z-10">
                        <div class="<?php echo e($iconBox); ?>">
                            <i class="<?php echo e($reasons[8]['icon']); ?> <?php echo e($reasons[8]['color']); ?> text-3xl"></i>
                        </div>
                        <div>
                            <h3 class="<?php echo e($titleClass); ?>"><?php echo e($reasons[8]['title']); ?></h3>
                            <p class="<?php echo e($descClass); ?>"><?php echo e($reasons[8]['desc']); ?></p>
                            <div class="flex flex-wrap gap-3">
                                <?php $__currentLoopData = $reasons[8]['points']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="flex items-center gap-2 px-3 py-1.5 bg-white/5 text-white rounded-sm text-[9px] font-black uppercase italic tracking-widest border border-white/10">
                                        <i class="fa-solid fa-star text-brand-accent"></i> <?php echo e($point); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="<?php echo e($smallCardClass); ?>">
                    <div class="w-14 h-14 rounded-sm bg-white flex items-center justify-center mb-8 shadow-xl group-hover:scale-110 transition-transform">
                        <i class="<?php echo e($reasons[9]['icon']); ?> <?php echo e($reasons[9]['color']); ?> text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-black text-white text-xl mb-4 leading-tight uppercase tracking-tighter italic"><?php echo e($reasons[9]['title']); ?></h3>
                        <p class="text-[10px] text-slate-100 font-bold leading-relaxed uppercase tracking-widest opacity-60"><?php echo e($reasons[9]['desc']); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Powerful Closing Statement -->
        <div class="mt-32 p-16 bg-slate-50 border border-slate-100 rounded-sm relative overflow-hidden text-center animate-on-scroll shadow-xl">
            <div class="absolute top-0 left-0 w-full h-1.5 bg-brand-accent"></div>
            <p class="relative z-10 text-4xl md:text-7xl font-black text-slate-950 leading-[0.85] mx-auto tracking-tighter uppercase italic">
                "World Grexpo is more than a foundation—it is a <span class="text-brand-accent not-italic">Global Catalyst</span> for the industrial sustainability transition."
            </p>
        </div>

    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/why_choose.blade.php ENDPATH**/ ?>