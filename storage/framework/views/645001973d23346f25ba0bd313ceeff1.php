

<?php $__env->startSection('title', 'Elite Networking & B2B Matchmaking - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay"
            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Exclusive Synergy</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black uppercase mb-12 tracking-tighter leading-[0.85]">
                Elite <br> <span class="text-brand-primary">Networking.</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
                Unlocking industrial transition through strategic institutional matchmaking and professional node synergy.
            </p>
        </div>
    </section>

    <!-- Main Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">
            
            <!-- Section 1: The Power Of Network -->
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="space-y-12 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Institutional Node</span>
                        <h2>Your Network <br> <span class="text-brand-primary">IS Your Net Worth.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <p class="text-slate-500 text-xl leading-relaxed font-medium">
                        In the global industrial node, access is absolute. World Grexpo Foundation's Elite Networking node provides an unparalleled gateway to high-value collaborations. We facilitate strategic connections between industrial units, global investors, and corporate giants through our exclusive core institutional channels.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                        <?php $__currentLoopData = ['Investors', 'CXOs', 'Strategists', 'Founders']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $net): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="px-10 py-6 bg-slate-50 text-[10px] font-black uppercase tracking-[0.3em] text-slate-950 hover:bg-brand-primary hover:text-white transition-all duration-500 cursor-default">
                                <?php echo e($net); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="relative group">
                    <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" 
                             class="grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105 opacity-80 group-hover:opacity-100" 
                             alt="Networking Elite">
                    </div>
                    <!-- Sharp Industrial Decorator -->
                    <div class="absolute -bottom-8 -right-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
                </div>
            </div>

            <!-- Section 2: The Ecosystem -->
            <div class="space-y-24">
                <div class="max-w-4xl space-y-8">
                    <div class="section-heading text-left">
                        <span class="subtitle">Operational Architecture</span>
                        <h2>Matchmaking <br> <span class="text-brand-primary">Ecosystem.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed">
                        A multi-layered institutional approach to building industrial business synergy across global trade corridors.
                    </p>
                </div>

                <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    <?php
                        $ecosystem = [
                            ['t' => 'B2B Matchmaking', 'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=2074&auto=format&fit=crop', 'd' => 'Precise alignment with global supply chain partners and distributors.'],
                            ['t' => 'Investor Pitching', 'img' => 'https://images.unsplash.com/photo-1600880212319-7834e53f12df?q=80&w=2070&auto=format&fit=crop', 'd' => 'Direct access to VCs and transition angel networks for industrial funding.'],
                            ['t' => 'CXO Masterminds', 'img' => 'https://images.unsplash.com/photo-1541746972996-4e0b0f43e01a?q=80&w=2070&auto=format&fit=crop', 'd' => 'Closed-door institutional sessions with industry veterans for market wisdom.']
                        ];
                    ?>
                    <?php $__currentLoopData = $ecosystem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative h-[600px] overflow-hidden bg-slate-900">
                        <img src="<?php echo e($eco['img']); ?>" 
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-60 group-hover:opacity-100" 
                             alt="Networking Node">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute inset-0 p-12 flex flex-col justify-end space-y-6">
                            <h4 class="text-4xl font-black text-white uppercase tracking-tighter group-hover:text-brand-primary transition-colors">
                                <?php echo e($eco['t']); ?>

                            </h4>
                            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed group-hover:text-white transition-colors">
                                <?php echo e($eco['d']); ?>

                            </p>
                        </div>
                        
                        <!-- Sharp Hover Accent -->
                        <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Section 3: Key Deliverables -->
            <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl">
                <!-- Industrial Pattern -->
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                
                <div class="relative z-10 grid lg:grid-cols-2 gap-24 items-center">
                    <div class="space-y-16">
                        <div class="space-y-6">
                            <span class="text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">Proprietary Nodes</span>
                            <h3 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-[0.9]">
                                Node <br> <span class="text-brand-primary">Outputs.</span>
                            </h3>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-1 bg-white/5 border border-white/10">
                            <?php $__currentLoopData = [
                                'Exclusive Directory Access',
                                '1-on-1 Mentorship Slots',
                                'Priority B2B Invitations',
                                'Trade Mission Delegations'
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-10 bg-transparent border border-white/5 hover:bg-brand-primary transition-all duration-700 group flex items-center gap-8">
                                <div class="w-12 h-12 bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-brand-primary-dark group-hover:border-brand-primary-dark transition-all">
                                    <i class="fa-solid fa-link text-xs text-brand-primary group-hover:text-white"></i>
                                </div>
                                <span class="text-[10px] font-black uppercase text-white tracking-[0.2em] group-hover:text-slate-950 transition-colors">
                                    <?php echo e($item); ?>

                                </span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <div class="space-y-12">
                        <div class="p-16 bg-white/5 border border-white/10 shadow-2xl relative overflow-hidden group hover:bg-brand-primary transition-all duration-700">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(255,255,255,0.03)_5px,rgba(255,255,255,0.03)_10px)]"></div>
                            
                            <p class="text-6xl font-black text-white mb-8 uppercase tracking-tighter leading-[0.85] group-hover:text-brand-primary-dark transition-colors">
                                5000+ Elite <br> <span class="text-brand-accent group-hover:text-white transition-colors">Members.</span>
                            </p>
                            <p class="text-slate-400 text-xl font-medium leading-relaxed group-hover:text-slate-900 transition-colors">
                                Join the absolute most influential network of CEOs, Institutional Liaisoning Officers, and industrial founders globally.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Call To Action -->
            <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                
                <div class="relative z-10 space-y-16 max-w-5xl">
                    <div class="space-y-8">
                        <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter leading-[0.85]">
                            Meet the <br> <span class="text-brand-primary">Right Nodes.</span>
                        </h3>
                        <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium">
                            Stop knocking on closed doors. Leverage World Grexpo Foundation's institutional authority to acquire a node at the tables where global mandates are architected.
                        </p>
                    </div>
                    
                    <a href="<?php echo e(route('register')); ?>" class="btn-sharp px-20 group">
                        Acquire Elite Node Access 
                        <i class="fa-solid fa-users ml-6 group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>

                <!-- Industrial Accent Line -->
                <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/services/elite-networking.blade.php ENDPATH**/ ?>