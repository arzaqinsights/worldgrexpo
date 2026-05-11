<section class="section-padding bg-white relative overflow-hidden border-b border-slate-100">
    <!-- Industrial Background Decorators -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50/50 -z-0"></div>

    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">

            <!-- Content Side -->
            <div class="space-y-12">
                <div class="space-y-8">
                    <div class="section-heading">
                        <span class="subtitle">Recognition of Excellence</span>
                        <h2>National Business <span class="text-brand-primary">Excellence Awards.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
                        World Grexpo's National Business Excellence Awards celebrate the remarkable achievements of India's SMEs, MSMEs, Mid-Sized Industries, and Corporates who are setting new benchmarks in innovation, sustainability, and business excellence.
                    </p>
                </div>

                <!-- Stats Grid (Sharp) -->
                <div class="grid grid-cols-3 gap-px bg-slate-200">
                    <div class="p-8 bg-white group hover:bg-slate-50 transition-all">
                        <div class="text-3xl font-black text-slate-900 mb-2 group-hover:text-brand-primary transition-colors tracking-tighter tabular-nums">
                            {{ count(config('sectors.sectors')) }}+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-400">Industry Sectors</div>
                    </div>
                    <div class="p-8 bg-white group hover:bg-slate-50 transition-all">
                        <div class="text-3xl font-black text-slate-900 mb-2 group-hover:text-brand-primary transition-colors tracking-tighter tabular-nums">
                            2300+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-400">Categories</div>
                    </div>
                    <div class="p-8 bg-white group hover:bg-slate-50 transition-all">
                        <div class="text-3xl font-black text-slate-900 mb-2 group-hover:text-brand-primary transition-colors tracking-tighter tabular-nums">
                            350+
                        </div>
                        <div class="text-[9px] font-black uppercase tracking-[0.2em] text-slate-400">Past Awardees</div>
                    </div>
                </div>

                <!-- <div class="pt-6">
                    <a href="{{ route('join.index') }}"
                        class="btn-sharp px-12 group">
                        Nominate Now 
                        <i class="fa-solid fa-arrow-right ml-4 group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div> -->
            </div>

            <!-- Visual Side (Sharp) -->
            <div class="relative group">
                <!-- Sharp Image Frame -->
                <div class="relative z-10 border-20 border-slate-200 bg-white overflow-hidden shadow-[20px_20px_0px_0px_rgba(170,204,0,0.1)]">
                    <img src="{{ asset('images/home/award.jpeg') }}" alt="Awards Ceremony" class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-1000 group-hover:scale-105">
                </div>

                <!-- Sharp Trophy Badge -->
                <!-- <div class="absolute -top-10 -left-10 bg-brand-primary p-10 text-white z-20 shadow-2xl">
                    <div class="w-12 h-12 bg-brand-accent text-brand-primary flex items-center justify-center mb-6">
                        <i class="fa-solid fa-trophy text-2xl"></i>
                    </div>
                    <div class="space-y-1">
                        <div class="text-2xl font-black uppercase tracking-tighter">3rd Edition</div>
                        <div class="text-[10px] font-black uppercase tracking-[0.3em] opacity-60">Coming Soon 2026</div>
                    </div>
                </div> -->

                <!-- Decorative Sharp Grid -->
                <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-slate-50 -z-10 group-hover:translate-x-5 group-hover:translate-y-5 transition-transform duration-700"></div>
            </div>

        </div>
    </div>
</section>
