<?php $__env->startSection('title', 'Waste Management Industry'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/waste-management.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(16,185,129,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-emerald-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-emerald-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-emerald-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Sustainable Resource Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Waste <br>
                <span class="text-emerald-600">Management.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-emerald-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Building a Cleaner, Sustainable Future through resource recovery.
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
                        <span class="subtitle">Environmental Optimization Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Systematic <br><span class="text-emerald-600">Processing.</span></h2>
                        <div class="accent-line bg-emerald-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Waste Management</strong> refers to the systematic collection, transportation, processing, recycling, and disposal of waste materials.
                        </p>
                        <p>
                            It plays a vital role in maintaining public health, conserving natural resources, and supporting global circular economy initiatives.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-emerald-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/waste-management.jpg')); ?>" alt="Waste Management"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-emerald-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Resource Management
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-emerald-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.4em]">International Value</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$1.5T+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2035)</span>
                                <span class="text-6xl font-black text-emerald-500 tracking-tighter italic">$2.5T+</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-1 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Rising urban waste generation', 'Industrial expansion', 'Environmental regulations', 'Circular economy initiatives']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-emerald-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-emerald-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em]"><?php echo e($driver); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-emerald-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-emerald-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">₹1L Cr+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-emerald-600 tracking-tighter italic">14%</span>
                            </div>
                            <div class="p-12 bg-emerald-50 border-l-8 border-emerald-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-emerald-600 uppercase tracking-[0.4em] mb-4 italic">Projection (2031)</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">₹2 Lakh Cr+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-emerald-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">$1.5T+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-emerald-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">₹1L Cr+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-emerald-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">10-14%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-emerald-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$2.5T</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global 2035</p>
                </div>
            </div>

            <!-- Key Segments -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-emerald-600 text-[10px] font-black uppercase tracking-[0.4em]">Resource Classification</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Key Waste Segments</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $segments = [
                            ['icon' => 'trash-can', 'title' => 'Municipal Waste', 'desc' => 'Residential and commercial treatment.', 'color' => 'emerald'],
                            ['icon' => 'industry', 'title' => 'Industrial Waste', 'desc' => 'Manufacturing and industrial operations.', 'color' => 'blue'],
                            ['icon' => 'skull-crossbones', 'title' => 'Hazardous Waste', 'desc' => 'Toxic and dangerous disposal.', 'color' => 'rose'],
                            ['icon' => 'recycle', 'title' => 'Resource Recovery', 'desc' => 'Plastic, metal, and glass recycling.', 'color' => 'cyan'],
                            ['icon' => 'bolt', 'title' => 'Waste-to-Energy', 'desc' => 'Electricity and fuel conversion.', 'color' => 'orange', 'col' => 'md:col-span-2'],
                        ];
                    ?>
                    <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white <?php echo e($s['col'] ?? ''); ?> flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-<?php echo e($s['color']); ?>-500 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 mb-8 border border-slate-100 bg-slate-50 flex items-center justify-center text-<?php echo e($s['color']); ?>-600 group-hover:bg-<?php echo e($s['color']); ?>-600 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-<?php echo e($s['icon']); ?> text-2xl"></i>
                            </div>
                            <h4 class="text-[12px] font-black uppercase text-slate-950 group-hover:text-white transition-colors tracking-[0.15em] mb-2 italic"><?php echo e($s['title']); ?></h4>
                            <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.1em] leading-tight"><?php echo e($s['desc']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Trends & Opportunities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-slate-950 text-white space-y-16">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-emerald-500 border-l-8 border-emerald-600 pl-10">Emerging Trends</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-white/5 border border-white/5">
                        <?php $__currentLoopData = [
                            ['icon' => 'microchip', 'label' => 'Smart Collection'],
                            ['icon' => 'brain', 'label' => 'AI Sorting Tech'],
                            ['icon' => 'bolt', 'label' => 'Energy Expansion'],
                            ['icon' => 'building', 'label' => 'Decentralized Prc'],
                            ['icon' => 'recycle', 'label' => 'Circular Models'],
                            ['icon' => 'chart-line', 'label' => 'ESG Reporting'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-10 bg-slate-950 group/item hover:bg-emerald-600 transition-all duration-500 relative overflow-hidden text-center">
                                <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <i class="fa-solid fa-<?php echo e($trend['icon']); ?> text-3xl mb-6 text-emerald-600 group-hover/item:text-slate-950 transition-colors"></i>
                                <p class="text-[12px] font-black uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors italic"><?php echo e($trend['label']); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-24 bg-white space-y-16 border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950 border-l-8 border-slate-950 pl-10">High Potential</h3>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-sm">
                        <?php $__currentLoopData = [
                            ['icon' => 'recycle', 'label' => 'Recovery Infrastructure'],
                            ['icon' => 'bolt', 'label' => 'Waste-to-Energy Projects'],
                            ['icon' => 'leaf', 'label' => 'Sustainability Consulting'],
                            ['icon' => 'microchip', 'label' => 'Smart Waste Tech'],
                            ['icon' => 'globe', 'label' => 'Environmental Services'],
                            ['icon' => 'arrow-trend-down', 'label' => 'Carbon Reduction'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-white group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-emerald-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-<?php echo e($opp['icon']); ?> text-2xl text-emerald-600 group-hover/opp:text-white transition-colors"></i>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic"><?php echo e($opp['label']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Future Roadmap -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Systemic Resilience Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Future <br><span class="text-emerald-600">Evolution.</span></h2>
                        <div class="accent-line bg-emerald-600"></div>
                    </div>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        <?php $__currentLoopData = [
                            'Cleaner Environment & Public Health focus',
                            'Resource Recovery & Recycling dominance',
                            'Reduced Landfill Dependency mandates',
                            'Lower Carbon Emission standards',
                            'Regulatory Compliance transformation'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-emerald-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-check text-emerald-600 group-hover:text-white transition-colors"></i>
                            <span class="text-[14px] font-black uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight italic"><?php echo e($item); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(16,185,129,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                         <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-emerald-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Sector Maturity
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-emerald-600">Strategic <br><span class="text-white">Resilience.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-emerald-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Waste management is evolving into a resource optimization sector.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
                             <?php $__currentLoopData = ['ESG COMPLIANT', 'RECOVERY FOCUS', 'SMART LOGISTICS', 'CIRCULAR HUB']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-black uppercase tracking-[0.4em] text-emerald-300 text-center hover:bg-emerald-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($tag); ?></span>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(16,185,129,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Strategic <br><span class="text-emerald-600">Enabler.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-emerald-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Waste management is no longer merely an environmental necessity — it is a strategic enabler of cleaner cities and economic resilience.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-emerald-600/30 hover:!bg-emerald-600">
                            Register for Waste Management 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/waste-management.blade.php ENDPATH**/ ?>