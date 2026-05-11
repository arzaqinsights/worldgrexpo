<?php $__env->startSection('title', 'E-Waste Recycling Industry'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/e-waste-recycling.jpeg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-yellow-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-yellow-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-yellow-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Urban Mining Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                E-Waste <br>
                <span class="text-yellow-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-yellow-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Mining the Urban Goldmine: Turning electronic waste into precious resources.
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
                        <span class="subtitle">Molecular Resource Recovery</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Resource <br><span class="text-yellow-600">Restoration.</span></h2>
                        <div class="accent-line bg-yellow-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">E-Waste Recycling</strong> refers to the collection, dismantling, and recovery of valuable materials from discarded electrical equipment.
                        </p>
                        <p>
                            The process helps recover precious metals like <strong>gold, silver, and copper</strong> while reducing hazardous landfill waste and environmental pollution.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-yellow-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/e-waste-recycling.jpeg')); ?>" alt="E-Waste Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-yellow-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Urban Mining
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Grid -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-yellow-600 text-[10px] font-black uppercase tracking-[0.4em]">Operational Sequence</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Recycling Process</h3>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $process = [
                            ['icon' => 'truck-ramp-box', 'label' => 'Collection'],
                            ['icon' => 'screwdriver-wrench', 'label' => 'Dismantling'],
                            ['icon' => 'gears', 'label' => 'Shredding'],
                            ['icon' => 'recycle', 'label' => 'Material Recovery'],
                            ['icon' => 'gem', 'label' => 'Metal Extraction'],
                        ];
                    ?>
                    <?php $__currentLoopData = $process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-yellow-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-yellow-600 group-hover:bg-yellow-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-<?php echo e($p['icon']); ?> text-3xl"></i>
                            </div>
                            <p class="text-[10px] font-black text-slate-900 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors"><?php echo e($p['label']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-yellow-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-yellow-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Opportunity</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$70B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$110B</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-yellow-500 tracking-tighter italic">10%</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Rapid Consumption', 'Shorter Lifecycles', 'IT Upgrades', 'ESG Mandates']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-8 py-6 bg-slate-950 text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-yellow-600 hover:text-slate-950 transition-colors cursor-default"><?php echo e($driver); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-yellow-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-yellow-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">₹10K Cr</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">₹25K Cr</span>
                            </div>
                            <div class="p-12 bg-yellow-50 border-l-8 border-yellow-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-yellow-600 uppercase tracking-[0.4em] mb-4">India Rank</p>
                                <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">Top 5 E-Waste Nation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-yellow-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">$70B+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-yellow-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">₹10K Cr</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-yellow-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">5M+ MT</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Annual Waste</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-yellow-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">18%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
            </div>

            <!-- Hubs & Drivers -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-white space-y-12 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                    <h3 class="text-4xl font-black uppercase tracking-tighter italic text-slate-950 group-hover:text-white transition-colors">India Capacity</h3>
                    <p class="text-2xl text-slate-500 group-hover:text-slate-400 font-medium italic border-l-4 border-slate-100 pl-10 leading-relaxed uppercase tracking-tighter transition-colors">
                        500+ authorized recyclers registered with CPCB/SPCB.
                    </p>
                    <div class="grid grid-cols-2 gap-4 pt-8">
                         <?php $__currentLoopData = ['Delhi NCR', 'Mumbai', 'Bengaluru', 'Chennai', 'Hyderabad', 'Pune']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center gap-4 group/item">
                                <div class="w-2 h-2 bg-yellow-600 group-hover/item:scale-150 transition-transform"></div>
                                <span class="text-[12px] font-black uppercase text-slate-600 group-hover:text-slate-400 tracking-[0.2em] transition-colors leading-relaxed group-hover/item:text-yellow-600"><?php echo e($hub); ?></span>
                            </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="p-16 lg:p-24 bg-slate-50 space-y-12 group relative overflow-hidden border-l border-slate-200">
                    <div class="absolute top-0 left-0 w-1 h-full bg-yellow-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                    <h3 class="text-4xl font-black uppercase tracking-tighter italic text-slate-950">Market Drivers</h3>
                    <ul class="space-y-6">
                        <?php $__currentLoopData = [
                            'Massive electronics consumption',
                            'Rapid technology obsolescence',
                            'High value recovery (Gold, Silver, Copper)',
                            'E-Waste Management Rules / EPR mandates',
                            'Rising corporate ESG initiatives'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-start gap-8 group/item">
                                <div class="w-2 h-2 bg-yellow-600 mt-4 group-hover/item:scale-150 transition-transform"></div>
                                <span class="text-[14px] font-black uppercase text-slate-600 tracking-[0.2em] transition-colors leading-relaxed group-hover/item:text-slate-950 italic"><?php echo e($driver); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <!-- High Potential Segments -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-yellow-600 text-[10px] font-black uppercase tracking-[0.4em]">Vertical Opportunities</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">High Potential Segments</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php $__currentLoopData = ['Precious Metal Recovery', 'PCB Recycling', 'Battery Recycling', 'Refurbishment', 'Data Destruction', 'Reverse Logistics']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-1 bg-yellow-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                             <p class="text-[12px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.2em] transition-colors italic leading-tight"><?php echo e($seg); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Strategic Hub -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-yellow-600/10"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl h-[500px]">
                        <img src="<?php echo e(asset('images/sectors/e-waste-recycling.jpeg')); ?>" alt="India E-Waste Hub"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(234,179,8,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-yellow-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Strategic Value
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-yellow-600">Why India <br><span class="text-white">Hub.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-yellow-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            India is positioned as an urban mining leader due to its massive domestic market and cost-effective processing ecosystem.
                        </p>
                        <div class="grid grid-cols-1 gap-px bg-white/5 pt-12 border border-white/10">
                             <?php $__currentLoopData = ['Massive Electronics Market', 'Cost-effective processing', 'Technical labor availability', 'Government formalization']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="p-8 bg-slate-950 border border-white/5 flex items-center gap-8 group/item hover:bg-yellow-600 transition-all duration-500">
                                    <i class="fa-solid fa-check-circle text-yellow-600 text-2xl group-hover/item:text-slate-950 transition-colors"></i>
                                    <span class="text-[12px] font-black uppercase text-slate-300 group-hover/item:text-slate-950 tracking-[0.2em] transition-colors leading-tight"><?php echo e($tag); ?></span>
                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(234,179,8,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Urban Mining <br><span class="text-yellow-600">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-yellow-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        E-waste recycling is transforming discarded electronics into valuable resources. Join the urban mining and circular economy leadership.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-yellow-600/30 hover:!bg-yellow-600">
                            Register for E-Waste Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/e-waste-recycling.blade.php ENDPATH**/ ?>