<?php $__env->startSection('title', 'Packaging Machinery Industry'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/packaging-machinery.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(139,92,246,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-violet-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-violet-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-violet-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Mechanical Conversion Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Packaging <br>
                <span class="text-violet-600">Machinery.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-violet-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Industrial equipment powering the global packaging ecosystem — from film extrusion to high-speed printing and molding.
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
                        <span class="subtitle">Industrial Equipment Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Precision <br><span class="text-violet-600">Dynamics.</span></h2>
                        <div class="accent-line bg-violet-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Packaging Machinery</strong> refers to industrial equipment used to convert raw plastic polymers into finished products like films, pouches, and containers.
                        </p>
                        <p>
                            From film production to printing and molding, these machines form the backbone of the global logistics and consumer goods ecosystem, enabling mass distribution and safety.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-violet-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/packaging-machinery.jpg')); ?>" alt="Packaging Machinery"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-violet-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Mechanical Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-violet-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-violet-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$60B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$90B</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['FMCG Demand', 'E-commerce', 'Automation', 'Film Expansion']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-violet-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-violet-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em] text-center leading-tight"><?php echo e($driver); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-violet-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-violet-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-violet-50 border-l-8 border-violet-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-violet-600 uppercase tracking-[0.4em] italic">Market Forecast</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">$12B Projected (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">7.7% - 9% Annual CAGR</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Major Hubs</h4>
                            <div class="grid grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                <?php $__currentLoopData = ['Gujarat', 'Maharashtra', 'Tamil Nadu', 'Delhi NCR', 'Punjab', 'Karnataka']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                        <div class="w-1.5 h-1.5 bg-violet-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight text-center"><?php echo e($city); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segments Grid -->
            <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <?php
                    $segments = [
                        ['icon' => 'industry', 'title' => 'Film Extrusion', 'desc' => 'PET, BOPP, CPP, Stretch Lines'],
                        ['icon' => 'print', 'title' => 'Printing Tech', 'desc' => 'Rotogravure & Flexo Printing'],
                        ['icon' => 'scissors', 'title' => 'Converting', 'desc' => 'Slitters, Pouches, Lamination'],
                        ['icon' => 'wand-sparkles', 'title' => 'Metallizing', 'desc' => 'Vacuum Metallization Units'],
                        ['icon' => 'cubes', 'title' => 'Injection Molding', 'desc' => 'Caps, Closures, Containers'],
                        ['icon' => 'flask', 'title' => 'Blow Molding', 'desc' => 'Bottles, Jars, Liquid Pack'],
                    ];
                ?>
                <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="p-16 bg-white space-y-8 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-violet-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <div class="w-20 h-20 border border-slate-200 flex items-center justify-center text-violet-600 group-hover:bg-violet-600 group-hover:text-white transition-all duration-500">
                            <i class="fa-solid fa-<?php echo e($seg['icon']); ?> text-3xl"></i>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl font-black uppercase tracking-tighter italic text-slate-900 group-hover:text-white transition-colors"><?php echo e($seg['title']); ?></h4>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-slate-500 transition-colors"><?php echo e($seg['desc']); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Value Chain Interface -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Industrial Intelligence</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Process <br><span class="text-violet-600">Evolution.</span></h2>
                        <div class="accent-line bg-violet-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        <?php
                            $trends = [
                                ['icon' => 'robot', 'title' => 'AI Production Lines'],
                                ['icon' => 'bolt', 'title' => 'Energy Efficient Engines'],
                                ['icon' => 'recycle', 'title' => 'Integrated Recycling'],
                                ['icon' => 'leaf', 'title' => 'Biodegradable Systems'],
                                ['icon' => 'wifi', 'title' => 'Smart Factory 4.0'],
                            ];
                        ?>
                        <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-violet-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-violet-600 group-hover/opp:bg-violet-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-<?php echo e($t['icon']); ?> text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic"><?php echo e($t['title']); ?></span>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(139,92,246,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-violet-400 text-[10px] font-black uppercase tracking-[0.4em]">Future Outlook</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Machine Hub</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-4 border-violet-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            India is emerging as a high-potential global hub for both consumption and manufacturing of advanced packaging machinery.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/5 pt-12">
                             <?php $__currentLoopData = ['PET EXTRUSION', 'ROTO PRINTING', 'BLOW MOLDING', 'SMART LOGISTICS']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-violet-600 transition-all duration-500">
                                    <span class="text-[10px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight text-center"><?php echo e($tag); ?></span>
                                </div>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(139,92,246,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Global <br><span class="text-violet-600">Dynamics.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-violet-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Packaging machinery is the core pillar of industrial scalability. Join World Grexpo to explore machinery sourcing and export protocols.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-violet-600/30 hover:!bg-violet-600">
                            Register for Machinery 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/packaging-machinery.blade.php ENDPATH**/ ?>