

<?php $__env->startSection('title', 'Elite Networking & B2B Matchmaking - World Grexpo Foundation'); ?>

<?php $__env->startSection('content'); ?>

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Exclusive Synergy</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Elite <span class="text-brand-accent not-italic">Networking</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Unlocking industrial transition through strategic institutional matchmaking and professional node synergy.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE POWER OF NETWORK -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Your Network IS <br> <span class="text-brand-primary not-italic">Your Net Worth</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        In the global industrial node, access is absolute. World Grexpo Foundation's Elite Networking node provides an unparalleled gateway to high-value collaborations. We facilitate strategic connections between industrial units, global investors, and corporate giants through our exclusive core institutional channels.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <?php $__currentLoopData = ['Investors', 'CXOs', 'Strategists', 'Founders']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $net): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="px-8 py-4 bg-slate-50 border border-slate-100 rounded-sm text-[10px] font-black uppercase tracking-widest text-slate-950 hover:bg-slate-950 hover:text-brand-accent transition-all duration-500 cursor-default italic">
                                <?php echo e($net); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Networking Elite">
                    </div>
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
            </div>

            <!-- SECTION 2: THE ECOSYSTEM -->
            <div class="space-y-20">
                <div class="text-left max-w-3xl">
                    <h3 class="text-5xl font-black uppercase italic text-slate-950 mb-8 tracking-tighter">Matchmaking Ecosystem</h3>
                    <p class="text-slate-500 text-xl font-light italic">A multi-layered institutional approach to building industrial business synergy.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    <?php
                        $ecosystem = [
                            ['t' => 'B2B Matchmaking', 'img' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=2074&auto=format&fit=crop', 'd' => 'Precise alignment with global supply chain partners and distributors.'],
                            ['t' => 'Investor Pitching', 'img' => 'https://images.unsplash.com/photo-1600880212319-7834e53f12df?q=80&w=2070&auto=format&fit=crop', 'd' => 'Direct access to VCs and transition angel networks for industrial funding.'],
                            ['t' => 'CXO Masterminds', 'img' => 'https://images.unsplash.com/photo-1541746972996-4e0b0f43e01a?q=80&w=2070&auto=format&fit=crop', 'd' => 'Closed-door institutional sessions with industry veterans for market wisdom.']
                        ];
                    ?>
                    <?php $__currentLoopData = $ecosystem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative h-[550px] overflow-hidden rounded-sm border border-slate-900">
                        <img src="<?php echo e($eco['img']); ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Networking Node">
                        <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>
                        <div class="absolute inset-0 p-12 flex flex-col justify-end">
                            <h4 class="text-3xl font-black text-brand-accent mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors"><?php echo e($eco['t']); ?></h4>
                            <p class="text-slate-400 text-[10px] font-bold leading-relaxed uppercase tracking-widest group-hover:text-white transition-colors"><?php echo e($eco['d']); ?></p>
                        </div>
                        <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- SECTION 3: KEY DELIVERABLES -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden text-center space-y-20">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-24 text-left">
                    <div class="lg:w-1/2 space-y-12">
                        <h3 class="text-5xl md:text-7xl font-black text-white uppercase italic tracking-tighter leading-none mb-8">Node <span class="text-brand-accent">Outputs</span></h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <?php $__currentLoopData = [
                                'Exclusive Directory Access',
                                '1-on-1 Mentorship Slots',
                                'Priority B2B Invitations',
                                'Trade Mission Delegations'
                            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-8 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group flex items-center gap-6">
                                <div class="w-10 h-10 bg-white/10 rounded-sm flex items-center justify-center group-hover:bg-white group-hover:text-brand-primary transition-all duration-700">
                                    <i class="fa-solid fa-link text-xs"></i>
                                </div>
                                <span class="text-[10px] font-black uppercase text-white tracking-[0.2em] group-hover:text-slate-950 transition-colors"><?php echo e($item); ?></span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="p-16 bg-white/5 border border-white/10 rounded-sm backdrop-blur-md group hover:bg-brand-primary transition-all duration-700">
                            <p class="text-5xl font-black text-white mb-6 italic leading-[0.85] uppercase tracking-tighter group-hover:text-slate-950 transition-colors">5000+ Elite <br> <span class="text-brand-accent group-hover:text-white transition-colors">Memberships</span></p>
                            <p class="text-slate-400 text-xl italic font-light leading-relaxed group-hover:text-slate-900 transition-colors">Join the absolute most influential network of CEOs, Institutional Liaisoning Officers, and industrial founders globally.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 p-24 rounded-sm text-left overflow-hidden border-l-[20px] border-brand-accent group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter italic leading-none">Meet the <br> <span class="text-brand-accent">Right Nodes</span></h3>
                    <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-light italic opacity-80 mb-16">
                        Stop knocking on closed doors. Leverage World Grexpo Foundation's institutional authority to acquire a node at the tables where global mandates are architected.
                    </p>
                    <a href="<?php echo e(route('register')); ?>" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Acquire Elite Node Access <i class="fa-solid fa-users text-brand-accent group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/services/elite-networking.blade.php ENDPATH**/ ?>