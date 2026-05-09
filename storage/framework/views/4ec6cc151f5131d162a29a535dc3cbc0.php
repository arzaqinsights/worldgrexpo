<section class="section-padding bg-white relative overflow-hidden">
    <!-- Sophisticated Background Decorators -->
    <div class="absolute top-1/2 right-0 -translate-y-1/2 w-96 h-96 bg-brand-primary/5 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-accent/5 rounded-full blur-[80px]"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <!-- Content Side -->
            <div class="space-y-10" x-data="{ visible: false }" x-intersect="visible = true">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                        Recognition of Excellence
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                        National Business <br>
                        <span class="text-brand-primary italic">Excellence Awards.</span>
                    </h2>
                    <p class="text-xl text-slate-500 font-medium leading-relaxed">
                        World Grexpo's National Business Excellence Awards celebrate the remarkable achievements of India's SMEs, MSMEs, Mid-Sized Industries, and Corporates who are setting new benchmarks in innovation, sustainability, and business excellence.
                    </p>
                </div>

                <!-- Stats Highlighting -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 group hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-500">
                        <div class="text-3xl font-black text-slate-900 mb-1 group-hover:text-brand-primary transition-colors tracking-tighter">
                            <?php echo e(count(config('sectors.sectors'))); ?>+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.1em] text-slate-400">Industry Sectors</div>
                    </div>
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 group hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-500">
                        <div class="text-3xl font-black text-slate-900 mb-1 group-hover:text-brand-primary transition-colors tracking-tighter">
                            2300+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.1em] text-slate-400">Award Categories</div>
                    </div>
                    <div class="p-6 rounded-3xl bg-slate-50 border border-slate-100 group hover:border-brand-primary/20 hover:bg-brand-primary/5 transition-all duration-500">
                        <div class="text-3xl font-black text-slate-900 mb-1 group-hover:text-brand-primary transition-colors tracking-tighter">
                            350+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.1em] text-slate-400">Past Awardees</div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="<?php echo e(route('join.index')); ?>"
                        class="px-10 py-5 rounded-2xl bg-brand-primary text-white font-bold text-sm uppercase tracking-widest shadow-xl shadow-brand-primary/20 hover:bg-brand-primary-dark transition-all flex items-center gap-2 group">
                        Nominate Now <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
            </div>

            <!-- Visual Side -->
            <div class="relative group" x-data="{ visible: false }" x-intersect="visible = true">
                <div class="relative z-10 rounded-[3rem] overflow-hidden shadow-2xl border-4 border-white transform group-hover:scale-[1.02] transition-transform duration-1000">
                    <img src="<?php echo e(asset('images/home/award.jpeg')); ?>" alt="Awards Ceremony" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950/40 via-transparent to-transparent"></div>
                </div>

                <!-- Floating Trophy Badge -->
                <div class="absolute -top-10 -left-10 glass-panel p-8 rounded-3xl shadow-2xl z-20 animate-float"
                    x-show="visible" x-transition:enter="transition ease-out duration-1000 delay-500" x-transition:enter-start="scale-50 opacity-0">
                    <div class="w-16 h-16 bg-brand-accent rounded-2xl flex items-center justify-center text-brand-primary shadow-xl mb-4">
                        <i class="fa-solid fa-trophy text-3xl"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="text-lg font-black text-slate-900">3rd Edition</div>
                        <div class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Coming Soon 2026</div>
                    </div>
                </div>

                <!-- Decorative Elements -->
                <div class="absolute -bottom-10 -right-10 w-64 h-64 border-2 border-brand-primary/10 rounded-full -z-10 group-hover:scale-110 transition-transform duration-1000"></div>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[110%] h-[110%] bg-brand-primary/5 blur-3xl -z-20"></div>
            </div>

        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\worldgrexpo\resources\views/website/home/partials/awards.blade.php ENDPATH**/ ?>