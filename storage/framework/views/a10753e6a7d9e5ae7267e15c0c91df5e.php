<?php $__env->startSection('title', 'EPR Industry Overview'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/waste-management.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(59,130,246,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Policy Compliance Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                EPR <br>
                <span class="text-blue-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Transforming waste management through Extended Producer Responsibility.
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
                        <span class="subtitle">Regulatory Compliance Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Extended Producer <br><span class="text-blue-600">Responsibility.</span></h2>
                        <div class="accent-line bg-blue-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Extended Producer Responsibility (EPR)</strong> is an environmental policy framework holding manufacturers responsible for the entire life cycle of their products.
                        </p>
                        <p>
                            By shifting waste management responsibility from municipalities to producers, EPR incentivizes sustainable product design and ensures efficient collection and recycling.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-blue-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/waste-management.jpg')); ?>" alt="EPR Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-blue-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Environmental Policy
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Compliance</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$48B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$59B</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Market Drivers</h4>
                            <div class="grid grid-cols-1 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Double-digit CAGR expected', 'Mandatory recycling targets', 'Circular economy transition']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-blue-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-check text-blue-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em]"><?php echo e($driver); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-landmark-flag text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-blue-600 text-[10px] font-black uppercase tracking-[0.4em]">Regulatory Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                            <div class="p-10 bg-white space-y-4">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Market Size 2025</p>
                                <p class="text-4xl font-black text-blue-600 tracking-tighter italic">$982M</p>
                            </div>
                            <div class="p-10 bg-white space-y-4">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Projected 2030</p>
                                <p class="text-4xl font-black text-blue-600 tracking-tighter italic">$1.67B</p>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Waste Streams Covered</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                <?php $__currentLoopData = ['Plastic Packaging', 'E-Waste', 'Battery Waste', 'Waste Tyres', 'Used Oil', 'Hazardous Waste']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stream): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-6 bg-white flex items-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                        <div class="w-1.5 h-1.5 bg-blue-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight"><?php echo e($stream); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">15-20%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">1000+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Compliance Agencies</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">10K+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Providers</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$59B+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Market Cap 2031</p>
                </div>
            </div>

            <!-- Opportunities & Authorities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="relative overflow-hidden group">
                    <img src="<?php echo e(asset('images/sectors/plastic-recycling.jpeg')); ?>" alt="EPR Opportunities"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-110 group-hover:scale-100">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                    <div class="absolute bottom-0 left-0 p-12">
                        <div class="bg-blue-600 text-white p-10 space-y-2 border-l-8 border-white/20">
                            <p class="text-5xl font-black tracking-tighter uppercase italic">CPCB</p>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] opacity-80">Enforcement Authority</p>
                        </div>
                    </div>
                </div>

                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Venture Perspectives</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-blue-600">Opportunities.</span></h2>
                        <div class="accent-line bg-blue-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <?php
                            $opportunities = [
                                ['icon' => 'user-shield', 'title' => 'EPR Compliance Consulting'],
                                ['icon' => 'money-bill-transfer', 'title' => 'Plastic Credit Trading'],
                                ['icon' => 'truck-ramp-box', 'title' => 'Waste Collection Systems'],
                                ['icon' => 'industry', 'title' => 'Recycling Infrastructure'],
                                ['icon' => 'magnifying-glass-chart', 'title' => 'Circular Economy Advisory'],
                                ['icon' => 'microchip', 'title' => 'Waste Traceability Platforms'],
                            ];
                        ?>
                        <?php $__currentLoopData = $opportunities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-blue-600 group-hover/opp:bg-blue-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-<?php echo e($item['icon']); ?> text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic"><?php echo e($item['title']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Global Position -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(59,130,246,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">National Leadership</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">India's Position</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-blue-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            India is among the fastest-growing regulated circular economy markets globally.
                        </p>
                        <div class="space-y-8">
                            <?php $__currentLoopData = [
                                ['icon' => 'arrow-trend-up', 'label' => 'Fastest-growing regulated market'],
                                ['icon' => 'shield-halved', 'label' => 'Stricter CPCB enforcement'],
                                ['icon' => 'file-invoice-dollar', 'label' => 'Digitized EPR certificate systems'],
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-10 group/item">
                                    <div class="w-16 h-16 border border-white/10 flex items-center justify-center text-blue-400 group-hover/item:bg-blue-600 group-hover/item:text-slate-950 transition-all duration-500">
                                        <i class="fa-solid fa-<?php echo e($pos['icon']); ?> text-2xl"></i>
                                    </div>
                                    <span class="text-[14px] font-black uppercase text-slate-300 group-hover/item:text-white tracking-[0.2em] transition-colors italic"><?php echo e($pos['label']); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="p-24 bg-white space-y-12 border-l border-slate-200">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-blue-600 pl-10 tracking-tighter">Active Markets</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <?php $__currentLoopData = ['Germany', 'UK', 'USA', 'Japan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $market): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-16 bg-slate-50 border border-slate-100 flex items-center justify-center group/item hover:bg-slate-950 transition-all duration-700 shadow-sm">
                                <span class="text-[12px] font-black uppercase text-slate-500 group-hover/item:text-white tracking-[0.3em] transition-colors italic"><?php echo e($market); ?></span>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-span-2 p-16 bg-blue-600 flex items-center justify-center border border-blue-600 shadow-xl group/ind hover:bg-slate-950 transition-colors duration-700">
                            <span class="text-4xl font-black uppercase text-white tracking-[0.4em] italic group-hover/ind:text-blue-600 transition-colors">India</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(59,130,246,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Structured <br><span class="text-blue-600">Accountability.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-blue-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        EPR is transforming waste management into a structured and scalable ecosystem. Join the mission to build a compliant and technologically advanced industrial future.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
                            Register for EPR Compliance 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/epr-industry.blade.php ENDPATH**/ ?>