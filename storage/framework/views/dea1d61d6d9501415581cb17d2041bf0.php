<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Decor -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>

    <div class="container relative z-10">
        <!-- Sharp Section Header -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-16 mb-24">
            <div class="max-w-3xl space-y-8">
                <div class="section-heading">
                    <span class="subtitle">Specialized Framework</span>
                    <h2>Our Core <span class="text-brand-primary">Service Pillars.</span></h2>
                    <div class="accent-line"></div>
                </div>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                    Empowering enterprises through strategic initiatives, industry advocacy, and growth-driven solutions designed to foster global competitiveness.
                </p>
            </div>

            <!-- Stats Grid (Sharp) -->
            <div class="grid grid-cols-2 gap-px bg-slate-200">
                <div class="bg-white p-8 group">
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Industry Support</div>
                    <div class="text-3xl font-black text-slate-900 group-hover:text-brand-primary transition-colors">5,000+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Active Members</div>
                </div>
                <div class="bg-white p-8 group">
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-4">Global Presence</div>
                    <div class="text-3xl font-black text-slate-900 group-hover:text-brand-primary transition-colors">40+</div>
                    <div class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">Countries</div>
                </div>
            </div>
        </div>

        <!-- Sharp Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-100">
            <?php
                $services = [
                    [
                        'slug' => 'funding-initiative',
                        'image' => 'https://images.unsplash.com/photo-1560472355-536de3962603?q=80&w=2070&auto=format&fit=crop',
                        'icon' => 'hand-holding-dollar',
                        'title' => 'Funding Initiative',
                        'desc' => 'Strengthening enterprises by enabling seamless access to finance through top-tier global banking networks.'
                    ],
                    [
                        'slug' => 'strategic-promotion',
                        'image' => 'images/services/strategic-promotion.jpg',
                        'icon' => 'chart-line',
                        'title' => 'Strategic Promotion',
                        'desc' => 'Accelerating brand visibility and market share through data-driven promotional strategy and planning.'
                    ],
                    [
                        'slug' => 'global-awareness',
                        'image' => 'images/services/global-awareness.jpg',
                        'icon' => 'bullhorn',
                        'title' => 'Global Awareness',
                        'desc' => 'High-profile international platforms designed to project industrial innovation to global stakeholders.'
                    ],
                    [
                        'slug' => 'elite-networking',
                        'image' => 'images/services/elite-networking.jpg',
                        'icon' => 'people-group',
                        'title' => 'Elite Networking',
                        'desc' => 'Facilitating high-value B2B collaborations and cross-border partnerships through exclusive channels.'
                    ],
                    [
                        'slug' => 'market-intelligence',
                        'image' => 'images/services/market-intelligence.jpg',
                        'icon' => 'chart-pie',
                        'title' => 'Market Intelligence',
                        'desc' => 'Delivering real-time data and actionable insights to keep your business ahead of the global curve.'
                    ],
                    [
                        'slug' => 'policy-advocacy',
                        'image' => 'images/sectors/csr.jpg',
                        'icon' => 'file-contract',
                        'title' => 'Policy Advocacy',
                        'desc' => 'Dedicated representation at national and international governance levels for industrial interests.'
                    ],
                ];
            ?>

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('services/'.$svc['slug'])); ?>" 
                    class="group relative border border-slate-300 bg-white p-8 transition-all duration-500 hover:bg-slate-100 hover:border-brand-primary">
                    
                    <div class="space-y-8">
                        <div class="flex items-center justify-between">
                            <div class="w-16 h-16 bg-brand-primary/5 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-<?php echo e($svc['icon']); ?> text-2xl"></i>
                            </div>
                            <span class="text-[10px] font-black text-slate-300 uppercase tracking-widest">Pillar 0<?php echo e($loop->iteration); ?></span>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-2xl font-black text-slate-900 group-hover:text-brand-primary transition-colors tracking-tighter uppercase leading-tight">
                                <?php echo e($svc['title']); ?>

                            </h3>
                            <p class="text-sm text-slate-500 font-medium leading-relaxed">
                                <?php echo e($svc['desc']); ?>

                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-50 flex items-center gap-4">
                            <span class="text-[10px] font-black text-slate-900 uppercase tracking-widest">Explore Details</span>
                            <div class="w-8 h-8 border border-slate-200 flex items-center justify-center text-slate-400 group-hover:border-brand-primary group-hover:text-brand-primary transition-all">
                                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Sharp CTA Banner -->
        <div class="mt-24 bg-brand-primary p-12 lg:p-24 relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-black/10 -skew-x-12 translate-x-24"></div>
            
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-16">
                <div class="space-y-8 max-w-2xl">
                    <div class="inline-flex items-center gap-4">
                        <span class="w-12 h-1 bg-brand-accent"></span>
                        <span class="text-[11px] font-black uppercase tracking-[0.3em] text-white">Join the Global Ecosystem</span>
                    </div>
                    <h3 class="text-4xl md:text-6xl font-black text-white leading-[1] tracking-tighter uppercase">
                        Transform Your <br> Business into a <br> <span class="text-brand-accent">Global Leader.</span>
                    </h3>
                    <p class="text-white/70 text-lg font-medium leading-relaxed">
                        Access six specialized industrial pillars designed to accelerate your growth and foster international competitiveness.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full lg:w-auto">
                    <a href="<?php echo e(route('register')); ?>" 
                        class="px-12 py-6 bg-brand-accent text-brand-primary-dark font-black uppercase text-sm tracking-widest hover:bg-white transition-all text-center">
                        Register Now
                    </a>
                    <a href="<?php echo e(route('join.index')); ?>" 
                        class="px-12 py-6 bg-white/10 text-white font-black uppercase text-sm tracking-widest border border-white/20 hover:bg-white hover:text-brand-primary-dark transition-all text-center">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/services.blade.php ENDPATH**/ ?>