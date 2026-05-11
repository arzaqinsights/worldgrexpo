<section class="section-padding bg-slate-950 relative overflow-hidden border-b border-slate-900">
    <!-- Industrial Pattern -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-slate-800 border border-slate-800 shadow-2xl">
            
            <!-- Mission Node (Sharp) -->
            <div class="p-16 lg:p-24 bg-slate-950 group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(255,255,255,0.02)_5px,rgba(255,255,255,0.02)_10px)]"></div>
                
                <div class="w-20 h-20 bg-brand-primary flex items-center justify-center mb-12 group-hover:scale-110 transition-transform duration-700 shadow-2xl">
                    <i class="fa-solid fa-bullseye text-3xl text-brand-primary-dark"></i>
                </div>
                
                <div class="space-y-12">
                    <div class="space-y-4">
                        <div class="text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">The Drive</div>
                        <h3 class="text-6xl font-black text-white uppercase tracking-tighter leading-none">
                            Our <br><span class="text-brand-primary">Mission.</span>
                        </h3>
                    </div>
                    
                    <p class="text-slate-400 text-2xl font-medium leading-relaxed max-w-xl">
                        To architect the global industrial community's involvement and stimulate absolute sustainable growth through innovative ESG advocacy and structural networking excellence.
                    </p>
                    
                    <div class="p-12 bg-white/5 border border-white/10 relative overflow-hidden">
                        <div class="absolute left-0 top-0 w-1.5 h-full bg-brand-accent"></div>
                        <p class="text-white text-2xl font-black leading-tight uppercase tracking-tighter">
                            "Architecting the global industrial transition through absolute sustainability."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Vision Node (Sharp) -->
            <div class="p-16 lg:p-24 bg-brand-primary group relative overflow-hidden">
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-white/10 -rotate-45 translate-y-1/2 translate-x-1/2"></div>
                
                <div class="w-20 h-20 bg-brand-primary-dark flex items-center justify-center mb-12 shadow-2xl group-hover:rotate-90 transition-transform duration-700">
                    <i class="fa-solid fa-eye text-brand-accent text-3xl"></i>
                </div>

                <div class="space-y-12">
                    <div class="space-y-4">
                        <div class="text-brand-primary-dark text-[10px] font-black uppercase tracking-[0.4em]">The Horizon</div>
                        <h3 class="text-6xl font-black text-brand-primary-dark uppercase tracking-tighter leading-none">
                            Our <br><span class="text-white">Vision.</span>
                        </h3>
                    </div>
                    
                    <p class="text-brand-primary-dark font-medium text-2xl leading-relaxed max-w-xl">
                        To be the global benchmark for industrial sustainability, utilizing proprietary strategic pillars to transform the global economy.
                    </p>
                    
                    <div class="space-y-10 pt-12 border-t border-brand-primary-dark/10">
                        <?php $__currentLoopData = [
                            ['t' => 'Structural Synergy', 'd' => 'Forging absolute success through systemic connectivity.', 'i' => 'link'],
                            ['t' => 'Global Unity', 'd' => 'Strong industrial bonds in a zero-carbon global marketplace.', 'i' => 'users']
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-start gap-8 group/item">
                            <div class="w-14 h-14 bg-brand-primary-dark border border-brand-primary-dark flex items-center justify-center shrink-0 group-hover/item:bg-white transition-all duration-500">
                                <i class="fa-solid fa-<?php echo e($item['i']); ?> text-brand-accent group-hover/item:text-brand-primary text-lg"></i>
                            </div>
                            <div class="space-y-3">
                                <span class="block text-brand-primary-dark font-black text-3xl uppercase tracking-tighter leading-none"><?php echo e($item['t']); ?></span>
                                <span class="block text-brand-primary-dark/60 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed"><?php echo e($item['d']); ?></span>
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