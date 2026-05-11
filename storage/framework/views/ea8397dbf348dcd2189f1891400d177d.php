<?php $__env->startSection('title', 'Solar Panel Recycling Industry'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/solar-recycling.jpeg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(245,158,11,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Photovoltaic Recovery Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Solar <br>
                <span class="text-amber-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Recovering valuable materials from end-of-life solar panels to power the circular clean energy economy.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                <div class="p-16 lg:p-24 bg-white space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">End-of-Life Lifecycle Management</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Solar <br><span class="text-amber-600">Recovery.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Solar recycling</strong> refers to the process of recovering valuable materials such as glass, silicon, silver, and copper from end-of-life panels.
                        </p>
                        <p>
                            With solar panels typically lasting 25–30 years, solar waste is now becoming a fast-growing segment of the circular clean energy economy.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-amber-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/solar-recycling.jpeg')); ?>" alt="Solar Recycling Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-amber-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Urban Mining
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Recycling Processes -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">Operational Sequence</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Technical Processes</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $processes = [
                            ['icon' => 'gears', 'title' => 'Mechanical Dismantling', 'desc' => 'Glass & Al-frame recovery'],
                            ['icon' => 'fire', 'title' => 'Thermal Treatment', 'desc' => 'Layer separation'],
                            ['icon' => 'flask', 'title' => 'Chemical Recovery', 'desc' => 'Silicon & Silver extraction'],
                            ['icon' => 'robot', 'title' => 'Automated PV Systems', 'desc' => 'Advanced recycling tech'],
                        ];
                    ?>
                    <?php $__currentLoopData = $processes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-1 bg-amber-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                            <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-<?php echo e($p['icon']); ?> text-2xl"></i>
                            </div>
                            <h4 class="text-[12px] font-black uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] mb-2"><?php echo e($p['title']); ?></h4>
                            <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.1em] italic leading-tight"><?php echo e($p['desc']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-amber-400 text-[10px] font-black uppercase tracking-[0.4em]">International Momentum</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$422M</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-amber-500 tracking-tighter italic">$718M</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Rapid Installed Growth', 'WEEE Regulations', 'High Mineral Value', 'ESG Mandates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-8 bg-slate-950 text-center text-[10px] font-black uppercase tracking-[0.1em] text-slate-400 hover:bg-amber-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($driver); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">National Strategy</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$5.3M</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-amber-600 tracking-tighter italic">17%</span>
                            </div>
                            <div class="p-12 bg-amber-50 border-l-8 border-amber-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-amber-600 uppercase tracking-[0.4em] mb-4 italic">Forecast (2034)</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">$29 Million Value</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Snapshot -->
            <div class="space-y-12">
                 <div class="text-center">
                    <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Market Comparison</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <div class="p-12 bg-slate-950 text-white space-y-8 flex flex-col justify-center border-r border-white/5">
                        <h4 class="text-2xl font-black uppercase tracking-tighter italic text-amber-500">Parameter</h4>
                        <?php $__currentLoopData = ['Market Size 2025', 'Forecast Value', 'CAGR', 'Market Stage']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $param): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-[10px] font-black uppercase text-slate-500 tracking-[0.4em]"><?php echo e($param); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="p-12 bg-white space-y-8 text-center flex flex-col justify-center group hover:bg-slate-950 transition-all duration-500">
                        <h4 class="text-2xl font-black uppercase tracking-tighter italic text-slate-950 group-hover:text-white">Global</h4>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">$422M</p>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">$718M</p>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">9%+</p>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Early-Growth</p>
                    </div>
                    <div class="p-12 bg-white space-y-8 text-center flex flex-col justify-center group hover:bg-slate-950 transition-all duration-500">
                        <h4 class="text-2xl font-black uppercase tracking-tighter italic text-slate-950 group-hover:text-white">India</h4>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">$5.3M</p>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">$29M</p>
                        <p class="text-2xl font-black text-slate-900 group-hover:text-amber-500 italic tracking-tighter">17%+</p>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Very Early-Stage</p>
                    </div>
                </div>
            </div>

            <!-- Key Materials Recovered -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">Resource Classification</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Materials Recovered</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $materials = [
                            ['icon' => 'glass-water', 'title' => 'Glass', 'desc' => '70–80% Panel Weight', 'color' => 'sky'],
                            ['icon' => 'cube', 'title' => 'Aluminum', 'desc' => 'Panel Frames', 'color' => 'slate'],
                            ['icon' => 'microchip', 'title' => 'Silicon', 'desc' => 'Photovoltaic Wafers', 'color' => 'violet'],
                            ['icon' => 'coins', 'title' => 'Silver', 'desc' => 'High-Value Recovery', 'color' => 'amber'],
                            ['icon' => 'plug', 'title' => 'Copper', 'desc' => 'Internal Wiring', 'color' => 'orange'],
                        ];
                    ?>
                    <?php $__currentLoopData = $materials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-10 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-<?php echo e($m['color']); ?>-500 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-<?php echo e($m['color']); ?>-600 group-hover:bg-<?php echo e($m['color']); ?>-600 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-<?php echo e($m['icon']); ?> text-2xl"></i>
                            </div>
                            <h4 class="text-[12px] font-black uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] mb-2 italic"><?php echo e($m['title']); ?></h4>
                            <p class="text-[9px] font-black uppercase text-slate-400 tracking-[0.1em] leading-tight"><?php echo e($m['desc']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Future Roadmap -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Global 2031 Roadmap</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Future <br><span class="text-amber-600">Evolution.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        <?php $__currentLoopData = [
                            'Market expected to double by early 2030s',
                            'Rise in automated & chemical recycling tech',
                            'Increasing recovery efficiency of Silver',
                            'India rapid growth phase after 2027',
                            'Solar retirement wave from 2030 onward'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-check text-amber-600 group-hover:text-white transition-colors"></i>
                            <span class="text-[14px] font-black uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight italic"><?php echo e($item); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(245,158,11,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-amber-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Sector Maturity
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-amber-600">The Clean <br><span class="text-white">Loop.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-amber-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Solar recycling is an emerging circular economy opportunity in the making.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
                             <?php $__currentLoopData = ['300+ OPERATORS', 'E-WASTE SYNERGY', 'GREEN MINING', 'FORMALIZING']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-black uppercase tracking-[0.4em] text-amber-300 text-center hover:bg-amber-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($tag); ?></span>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Circular <br><span class="text-amber-600">Standard.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-amber-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Solar recycling will become a major clean-tech industry after 2030. Join the mission to recover valuable clean energy resources today.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
                            Explore Solar Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/solar-recycling.blade.php ENDPATH**/ ?>