<section class="section-padding bg-slate-950 relative overflow-hidden">
    <!-- Visual Decorators -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[150px]"></div>
    
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Mission Node -->
            <div class="p-16 lg:p-24 rounded-[4rem] bg-white/5 border border-white/10 backdrop-blur-xl group animate-on-scroll relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/10 rounded-full blur-2xl -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="w-20 h-20 bg-brand-primary/10 border border-brand-primary/20 rounded-3xl flex items-center justify-center mb-12 group-hover:bg-brand-primary group-hover:text-slate-950 transition-all duration-700 shadow-2xl">
                    <i class="fa-solid fa-bullseye text-3xl text-brand-primary group-hover:text-slate-950 transition-colors"></i>
                </div>
                
                <div class="space-y-10">
                    <div class="space-y-4">
                        <div class="text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">The Drive</div>
                        <h3 class="text-6xl font-black text-white uppercase tracking-tighter leading-none">
                            Our <br><span class="text-brand-primary italic">Mission.</span>
                        </h3>
                    </div>
                    
                    <p class="text-slate-400 text-2xl font-medium leading-relaxed italic">
                        To architect the global industrial community's involvement and stimulate absolute sustainable growth through innovative ESG advocacy and structural networking excellence.
                    </p>
                    
                    <div class="p-12 rounded-[3rem] bg-white/5 border border-white/10 shadow-2xl">
                        <p class="text-white text-2xl font-black italic leading-tight uppercase tracking-tighter">
                            "Architecting the global industrial transition through absolute sustainability."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Node -->
            <div class="p-16 lg:p-24 rounded-[4rem] bg-brand-primary group animate-on-scroll delay-100 relative overflow-hidden shadow-2xl">
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-white/10 rounded-full blur-3xl translate-y-1/2 translate-x-1/2"></div>
                
                <div class="w-20 h-20 bg-white rounded-3xl flex items-center justify-center mb-12 shadow-2xl group-hover:-rotate-12 transition-transform duration-700">
                    <i class="fa-solid fa-eye text-brand-primary text-3xl"></i>
                </div>

                <div class="space-y-12">
                    <div class="space-y-4">
                        <div class="text-slate-950 text-[10px] font-black uppercase tracking-[0.4em]">The Horizon</div>
                        <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter leading-none">
                            Our <br><span class="text-white italic">Vision.</span>
                        </h3>
                    </div>
                    
                    <p class="text-slate-950 font-medium text-2xl leading-relaxed italic">
                        To be the global benchmark for industrial sustainability, utilizing proprietary strategic pillars to transform the global economy.
                    </p>
                    
                    <div class="space-y-10 pt-10 border-t border-slate-950/10">
                        <?php $__currentLoopData = [
                            ['t' => 'Structural Synergy', 'd' => 'Forging absolute success through systemic connectivity.', 'i' => 'link'],
                            ['t' => 'Global Unity', 'd' => 'Strong industrial bonds in a zero-carbon global marketplace.', 'i' => 'users']
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-start gap-8 group/item">
                            <div class="w-14 h-14 rounded-2xl bg-slate-950/10 border border-slate-950/10 flex items-center justify-center shrink-0 group-hover/item:bg-slate-950 transition-all duration-500">
                                <i class="fa-solid fa-<?php echo e($item['i']); ?> text-slate-950 group-hover/item:text-brand-accent text-lg"></i>
                            </div>
                            <div class="space-y-2">
                                <span class="block text-slate-950 font-black text-3xl uppercase tracking-tighter italic leading-none"><?php echo e($item['t']); ?></span>
                                <span class="block text-slate-950/60 text-[10px] font-black uppercase tracking-[0.2em] leading-relaxed"><?php echo e($item['d']); ?></span>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/about/partials/mission_vision.blade.php ENDPATH**/ ?>