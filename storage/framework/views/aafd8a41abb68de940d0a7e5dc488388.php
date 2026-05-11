<?php $__env->startSection('title', 'Chemical Recycling Industry'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="<?php echo e(asset('images/sectors/chemical-recycling.jpg')); ?>" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-cyan-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-cyan-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-cyan-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Advanced Molecular Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Chemical <br>
                <span class="text-cyan-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-cyan-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Advanced waste processing technology transforming plastic waste.
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
                        <span class="subtitle">Molecular Recovery Systems</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Industrial <br><span class="text-cyan-600">Evolution.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Chemical recycling</strong> is an advanced waste processing technology that breaks down plastic waste into its original chemical building blocks (monomers, oils, gases, or feedstock) so it can be reused to produce virgin-quality plastics or other chemicals.
                        </p>
                        <p>
                            Unlike mechanical recycling, it can process <strong>mixed plastics, multilayer packaging, contaminated plastics, and low-value plastic waste</strong>.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-cyan-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="<?php echo e(asset('images/sectors/chemical-recycling.jpg')); ?>" alt="Chemical Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-cyan-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Molecular Restoration
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technologies Grid -->
            <div class="space-y-16">
                <div class="text-center space-y-4">
                    <span class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">Core Process Methodologies</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Advanced Technologies</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $techs = [
                            ['icon' => 'fire-flame-curved', 'title' => 'Pyrolysis', 'desc' => 'Plastic → Oil', 'color' => 'orange'],
                            ['icon' => 'wind', 'title' => 'Gasification', 'desc' => 'Plastic → Syngas', 'color' => 'sky'],
                            ['icon' => 'atom', 'title' => 'Depolymerization', 'desc' => 'Polymer → Monomer', 'color' => 'violet'],
                            ['icon' => 'flask', 'title' => 'Solvent-based', 'desc' => 'Purification Process', 'color' => 'emerald'],
                        ];
                    ?>
                    <?php $__currentLoopData = $techs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-cyan-600 group-hover:bg-cyan-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-<?php echo e($tech['icon']); ?> text-3xl"></i>
                            </div>
                            <h4 class="text-xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter mb-2 italic leading-tight"><?php echo e($tech['title']); ?></h4>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] leading-tight transition-colors"><?php echo e($tech['desc']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-cyan-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$10–12B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$40B+</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-cyan-500 tracking-tighter italic">15%</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                <?php $__currentLoopData = ['Plastic Crisis', 'ESG Commitments', 'Food-grade Demand', 'Circular Regulation']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="px-8 py-6 bg-slate-950 text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-cyan-600 hover:text-slate-950 transition-colors cursor-default"><?php echo e($driver); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-cyan-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8 text-right">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic block">$400M</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8 text-right">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-cyan-600 tracking-tighter italic block">25%</span>
                            </div>
                            <div class="p-12 bg-cyan-50 border-l-8 border-cyan-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-cyan-600 uppercase tracking-[0.4em] mb-4">India Forecast (2031)</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">USD 3 Billion+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic">$12B</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Size</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic">$400M</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Size</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic">15%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic">25%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="space-y-16">
                <div class="text-center space-y-4">
                    <span class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">Analytical Comparison</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Global vs India Snapshot</h3>
                </div>
                <div class="overflow-x-auto shadow-3xl">
                    <table class="w-full text-sm border-collapse border border-slate-200">
                        <thead>
                            <tr class="bg-slate-950 text-white">
                                <th class="text-left p-12 font-black uppercase tracking-[0.3em] border border-white/10">Parameter</th>
                                <th class="text-left p-12 font-black uppercase tracking-[0.3em] border border-white/10">Global Market</th>
                                <th class="text-left p-12 font-black uppercase tracking-[0.3em] border border-white/10">India Market</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white italic font-medium">
                            <?php
                                $rows = [
                                    ['Market Size (2025)', '$10–12B', '$0.2–0.4B'],
                                    ['Forecast Value', '$28–40B+', '$1.5–3B+'],
                                    ['CAGR (2026–2031)', '10–15%', '18–25%'],
                                    ['Market Stage', 'Early-commercial', 'Early-emerging'],
                                    ['Key Driver', 'ESG + Regulation', 'Waste crisis + EPR'],
                                ];
                            ?>
                            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="p-10 font-black text-slate-900 uppercase tracking-[0.1em] border border-slate-200 bg-slate-50/50"><?php echo e($row[0]); ?></td>
                                    <td class="p-10 text-slate-600 font-bold border border-slate-200 tracking-widest"><?php echo e($row[1]); ?></td>
                                    <td class="p-10 text-slate-600 font-bold border border-slate-200 tracking-widest"><?php echo e($row[2]); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Growth Outlook -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-white space-y-16">
                    <h3 class="text-5xl font-black uppercase text-slate-950 italic border-l-8 border-slate-950 pl-10 tracking-tighter">Global Outlook</h3>
                    <ul class="space-y-10">
                        <?php $__currentLoopData = [
                            'Rapid expansion of pyrolysis-based plants',
                            'Integration with petrochemical industries',
                            'Rise of advanced recycling partnerships',
                            'Scaling of food-grade recycled plastic production',
                            'Strong investments from global energy giants'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-start gap-8 group/item">
                                <div class="w-2 h-2 bg-slate-950 mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
                                <span class="text-[12px] font-black text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-slate-950 transition-colors leading-relaxed"><?php echo e($outlook); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="p-24 bg-slate-50 space-y-16 border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase text-slate-950 italic border-l-8 border-cyan-600 pl-10 tracking-tighter">India Outlook</h3>
                    <ul class="space-y-10">
                        <?php $__currentLoopData = [
                            'Rapid entry of startups and pilot plants',
                            'Growing collaboration with FMCG brands',
                            'Expansion of EPR-driven recycling obligations',
                            'High demand for technology transfer (EU/US)',
                            'Shift from informal to organized recycling'
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outlook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="flex items-start gap-8 group/item">
                                <div class="w-2 h-2 bg-cyan-600 mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
                                <span class="text-[12px] font-black text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-slate-950 transition-colors leading-relaxed"><?php echo e($outlook); ?></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <!-- Scale + Capacity -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-slate-950 text-white space-y-12 group">
                    <div class="text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">Worldwide Infrastructure</div>
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic leading-tight">300–500 Plants <br><span class="text-white/40">Globally (Pilot/Ops)</span></h3>
                    <div class="flex flex-wrap gap-4 pt-12">
                        <?php $__currentLoopData = ['Europe', 'USA', 'Japan', 'China']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="px-8 py-4 bg-white/5 border border-white/10 text-[9px] font-black uppercase tracking-[0.3em] hover:bg-cyan-600 hover:text-slate-950 transition-all cursor-default"><?php echo e($hub); ?> Hubs</span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="p-24 bg-white space-y-12 border-l border-slate-200">
                    <div class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">National Infrastructure</div>
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950 leading-tight">30–70 Plants <br><span class="text-slate-400">In India (Early Stage)</span></h3>
                    <p class="text-2xl text-slate-500 font-medium italic border-l-4 border-slate-100 pl-10 leading-relaxed uppercase tracking-tighter">
                        Mostly pyrolysis oil plants and small depolymerization units. Rapid pipeline of new projects expected post-2026.
                    </p>
                </div>
            </div>

            <!-- Key Outputs -->
            <div class="space-y-16">
                <div class="text-center space-y-4">
                    <span class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">Resource Recovery Outputs</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Key Industrial Outputs</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <?php
                        $outputs = [
                            ['icon' => 'cube', 'label' => 'Virgin-like Resin', 'sub' => 'Recycled Polymer', 'color' => 'cyan'],
                            ['icon' => 'oil-can', 'label' => 'Pyrolysis Oil', 'sub' => 'Refinery Feedstock', 'color' => 'cyan'],
                            ['icon' => 'bolt', 'label' => 'Syngas', 'sub' => 'Energy Recovery', 'color' => 'cyan'],
                            ['icon' => 'atom', 'label' => 'Monomers', 'sub' => 'PET / PS Recovery', 'color' => 'cyan'],
                        ];
                    ?>
                    <?php $__currentLoopData = $outputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $out): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-cyan-600 group-hover:bg-cyan-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-<?php echo e($out['icon']); ?> text-3xl"></i>
                            </div>
                            <h4 class="text-xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter mb-2 italic leading-tight"><?php echo e($out['label']); ?></h4>
                            <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] leading-tight transition-colors"><?php echo e($out['sub']); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-cyan-600/10"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl h-[600px]">
                        <img src="<?php echo e(asset('images/sectors/chemical-recycling.jpg')); ?>" alt="Strategic Importance"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(6,182,212,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Strategic Value
                        </div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-cyan-600">Why Chemical <br><span class="text-white">Recycling Matters.</span></h3>
                        <ul class="space-y-12">
                            <?php $__currentLoopData = [
                                'Mechanical recycling alone cannot solve the plastic waste crisis',
                                'Enables recycling of previously non-recyclable plastics',
                                'Supports corporate net-zero and ESG targets',
                                'Converts waste into high-value raw materials',
                                'Bridges the gap between petrochemical and recycling industries'
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex items-start gap-10 group/item">
                                    <i class="fa-solid fa-check-circle text-cyan-600 text-3xl group-hover/item:scale-125 transition-transform duration-500"></i>
                                    <span class="text-slate-400 text-xl font-black uppercase tracking-widest group-hover/item:text-white transition-colors duration-500 leading-tight"><?php echo e($point); ?></span>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(8,145,178,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Molecular <br><span class="text-cyan-600">Economy.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-cyan-600 pl-10 md:text-center mx-auto">
                        Chemical recycling represents the next evolution of the global recycling industry. Globally moving to commercial scaling, and in India expected to grow rapidly post-2026.
                    </p>
                    <div class="flex justify-center">
                        <a href="<?php echo e(route('join.index')); ?>" 
                            class="btn-sharp px-16 group !border-cyan-600/30 hover:!bg-cyan-600">
                            Join the Circular Transition 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/sectors/chemical-recycling.blade.php ENDPATH**/ ?>