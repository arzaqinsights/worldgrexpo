<?php $__env->startSection('title', 'Chemicals & Petrochemicals Industry Overview'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/chemicals-petrochemicals-industry.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Global Manufacturing Backbone</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Chemicals & <br>
                <span class="text-indigo-600">Petrochemicals.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Backbone of Modern Manufacturing & Industrial Transformation.
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
                        <span class="subtitle">Industrial Foundation Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Primary <br><span class="text-indigo-600">Transformation.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            From everyday consumer products to advanced industrial applications, the <strong class="text-slate-900 font-black uppercase tracking-tight">Chemicals & Petrochemicals sector</strong> forms the invisible foundation of the global economy.
                        </p>
                        <p>
                            It powers industries ranging from agriculture and healthcare to automotive, construction, packaging, and energy, transforming raw materials into thousands of value-added products.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-3xl">
                    <?php
                        $segments = [
                            ['icon' => 'flask-vial', 'label' => 'Basic Chemicals', 'color' => 'indigo'],
                            ['icon' => 'oil-well', 'label' => 'Petrochemicals', 'color' => 'indigo'],
                            ['icon' => 'vial-circle-check', 'label' => 'Specialty Chemicals', 'color' => 'indigo'],
                            ['icon' => 'clover', 'label' => 'Agrochemicals', 'color' => 'indigo'],
                        ];
                    ?>
                    <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-<?php echo e($s['icon']); ?> text-3xl font-black"></i>
                            </div>
                            <p class="text-[10px] font-black text-slate-900 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors"><?php echo e($s['label']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Snapshot Bento -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-slate-950 space-y-16 relative group">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(79,70,229,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="text-indigo-400 text-[10px] font-black uppercase tracking-[0.4em]">Sector Metrics</div>
                        <h3 class="text-6xl font-black text-white uppercase tracking-tighter italic leading-tight">Industry <br>Snapshot.</h3>
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-white/10 pl-10 uppercase tracking-tighter">
                            Structural transformation driven by sustainability, innovation, and global supply chain realignment.
                        </p>
                        <div class="space-y-8 pt-12 border-t border-white/5">
                            <?php $__currentLoopData = [
                                'Global Market Size (2025): USD 5.5T+',
                                'Projected Market Size (2031): USD 7.5T+',
                                'Expected Growth Rate: ~5–6% CAGR',
                                'India Market Outlook (2031): USD 400B'
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="flex items-center gap-8 group/item">
                                    <div class="w-2 h-2 bg-indigo-500 group-hover/item:scale-150 transition-transform duration-500"></div>
                                    <span class="text-[12px] font-black uppercase text-slate-400 tracking-[0.3em] group-hover/item:text-white transition-colors duration-500 leading-tight"><?php echo e($stat); ?></span>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200">
                    <div class="p-16 lg:p-24 bg-white space-y-10 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.4em] transition-colors group-hover:text-slate-500">India (2025)</p>
                        <h4 class="text-7xl font-black text-slate-950 group-hover:text-white transition-colors tracking-tighter italic">$220B+</h4>
                    </div>
                    <div class="p-16 lg:p-24 bg-white space-y-10 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.4em] transition-colors group-hover:text-slate-500">India (2031)</p>
                        <h4 class="text-7xl font-black text-indigo-600 group-hover:text-indigo-400 transition-colors tracking-tighter italic">$400B</h4>
                    </div>
                    <div class="col-span-2 p-16 lg:p-24 bg-slate-50 space-y-10 text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-full h-1 bg-indigo-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                         <div class="text-[10px] font-black uppercase tracking-[0.4em] text-indigo-600 group-hover:text-indigo-400">Sector Status</div>
                         <h4 class="text-5xl font-black uppercase tracking-tighter text-slate-950 group-hover:text-white transition-colors italic leading-tight">Rising Sector Momentum</h4>
                    </div>
                </div>
            </div>

            <!-- Global Hub Strategy -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php $__currentLoopData = [
                        ['t' => 'Basic Chemicals', 'd' => 'Industrial Chemicals'],
                        ['t' => 'Petrochemicals', 'd' => 'Polymers & Olefins'],
                        ['t' => 'Specialty Chemicals', 'd' => 'Adhesives & Coatings'],
                        ['t' => 'Agrochemicals', 'd' => 'Fertilizers & Protection'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $pill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <p class="text-[10px] font-black uppercase text-indigo-600 group-hover:text-indigo-400 tracking-[0.4em] mb-6 transition-colors">Segment 0<?php echo e($idx + 1); ?></p>
                        <p class="text-3xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter italic leading-tight mb-4 transition-colors"><?php echo e($pill['t']); ?></p>
                        <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] transition-colors"><?php echo e($pill['d']); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Global Manufacturing Expansion</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">India: A <br><span class="text-indigo-600">Global Hub.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10 uppercase tracking-tighter">
                        India is emerging as a strategic alternative in global supply chains, fueled by competitive manufacturing and domestic demand.
                    </p>
                    <div class="space-y-10 pt-8">
                        <?php $__currentLoopData = [
                            'Competitive manufacturing costs',
                            'Strong domestic demand across sectors',
                            'Government PLI schemes & clusters',
                            'China+1 diversification strategy'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 group">
                            <div class="w-2 h-2 bg-indigo-500 group-hover:scale-150 transition-transform duration-500"></div>
                            <p class="text-[14px] font-black uppercase text-slate-700 tracking-[0.2em] transition-all duration-500 group-hover:translate-x-6 leading-tight group-hover:text-slate-950"><?php echo e($item); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- Connectivity Grid -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-indigo-600 text-[10px] font-black uppercase tracking-[0.4em]">Integrated Industrial Web</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Industry Connectivity</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php $__currentLoopData = ['Packaging & FMCG', 'Agriculture', 'Automotive', 'Construction', 'Healthcare', 'Textiles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-full h-1 bg-indigo-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                             <div class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-600 group-hover:text-white transition-colors leading-tight"><?php echo e($eco); ?></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Systemic Impact Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Strategic <br><span class="text-indigo-600">Significance.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        <?php $__currentLoopData = [
                            'Core input provider for nearly all manufacturing',
                            'Drives industrial growth & export competitiveness',
                            'Enables material & product innovation',
                            'Supports sustainability & advanced materials',
                            'Significant contribution to GDP & employment'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-check text-indigo-400 text-2xl font-black transition-colors group-hover:text-indigo-500"></i>
                            <span class="text-[14px] font-black uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight"><?php echo e($imp); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(79,70,229,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-indigo-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Evolution
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-indigo-600">The Transition <br><span class="text-white">Ahead.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-indigo-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Low-carbon technologies, hydrogen feedstocks, and green chemicals will define the next decade of industrial transformation.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12">
                             <?php $__currentLoopData = ['GREEN CHEM', 'ESG FOCUS', 'HYDROGEN', 'CIRCULAR']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="p-6 bg-slate-950 border border-white/5 text-[10px] font-black uppercase tracking-[0.4em] text-indigo-300 text-center hover:bg-indigo-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($tag); ?></span>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Industrial <br><span class="text-indigo-600">Foundation.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
                        India stands at a pivotal point to become a global leader in chemical manufacturing and exports. Join the mission to shape the future of industrial manufacturing.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
                            Register for Chemical Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/chemicals-petrochemicals-industry.blade.php ENDPATH**/ ?>