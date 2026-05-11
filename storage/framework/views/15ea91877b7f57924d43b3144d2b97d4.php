<?php $__env->startSection('title', 'Tyre & Rubber Recycling'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/tyre-rubber-recycling.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(249,115,22,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-orange-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-orange-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-orange-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Rubber Recovery Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Tyre & <br>
                <span class="text-orange-600">Rubber.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-orange-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Turning waste into value through advanced collection, processing, and circular repurposing.
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
                        <span class="subtitle">Material Value Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Waste to <br><span class="text-orange-600">Worth.</span></h2>
                        <div class="accent-line bg-orange-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Tyre and Rubber Recycling</strong> refers to the recovery and repurposing of used tyres into reusable raw materials and energy.
                        </p>
                        <p>
                            The process prevents environmental pollution, recovers valuable rubber compounds, and supports circular economy initiatives across the automotive and industrial sectors.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-orange-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/tyre-rubber-recycling.jpg')); ?>" alt="Tyre Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="bg-orange-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Material Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-orange-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-orange-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$8B+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$12B+</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Vehicle Ownership', 'Disposal Volume', 'Regulations', 'Circular Economy']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-orange-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-orange-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em] text-center leading-tight"><?php echo e($driver); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-orange-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-orange-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-orange-50 border-l-8 border-orange-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-orange-600 uppercase tracking-[0.4em] italic">Market Forecast</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">₹25,000 Cr Target (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">10-14% Annual CAGR Growth</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Segment Highlights</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-orange-600 group-hover:text-white transition-colors">₹15K Cr</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Market (2025)</span>
                                </div>
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-orange-600 group-hover:text-white transition-colors">FAST</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Growing Segment</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Grid -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-slate-950 text-white space-y-16">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-orange-500 border-l-8 border-orange-600 pl-10">Recycling Protocol</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-white/5 border border-white/5">
                        <?php $__currentLoopData = [
                            ['icon' => 'truck-ramp-box', 'label' => 'Scrap Collection'],
                            ['icon' => 'cubes', 'label' => 'Rubber Crumb'],
                            ['icon' => 'fire', 'label' => 'Pyrolysis / Fuel'],
                            ['icon' => 'recycle', 'label' => 'Reclaimed Rubber'],
                            ['icon' => 'atom', 'label' => 'Devulcanization'],
                            ['icon' => 'road', 'label' => 'Infrastructure Apps'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-10 bg-slate-950 group/item hover:bg-orange-600 transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <i class="fa-solid fa-<?php echo e($cat['icon']); ?> text-3xl mb-6 text-orange-600 group-hover/item:text-slate-950 transition-colors"></i>
                                <p class="text-[12px] font-black uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors italic"><?php echo e($cat['label']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-24 bg-white space-y-16 border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950 border-l-8 border-slate-950 pl-10">Strategic Verticals</h3>
                    <div class="grid grid-cols-1 gap-4">
                        <?php
                            $trends = [
                                ['icon' => 'bolt', 'title' => 'Energy Recovery Systems'],
                                ['icon' => 'industry', 'title' => 'Rubber Product Mfg'],
                                ['icon' => 'leaf', 'title' => 'ESG Sustainability Projects'],
                                ['icon' => 'road', 'title' => 'Rubberized Asphalt Tech'],
                            ];
                        ?>
                        <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden shadow-sm">
                            <div class="absolute top-0 left-0 w-1 h-full bg-orange-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-orange-600 group-hover/opp:bg-orange-600 group-hover/opp:text-white transition-all duration-500">
                                <i class="fa-solid fa-<?php echo e($t['icon']); ?> text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic"><?php echo e($t['title']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Architecture CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(249,115,22,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Circular <br><span class="text-orange-600">Rubber.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-orange-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Tyre and rubber recycling is a strategic sector driving environmental responsibility and industrial innovation.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-orange-600/30 hover:!bg-orange-600">
                            Partner for Recycling 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/tyre-rubber-recycling.blade.php ENDPATH**/ ?>