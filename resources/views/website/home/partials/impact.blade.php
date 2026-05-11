<!-- Impact Numbers -->
<section class="relative py-16 bg-brand-primary overflow-hidden border-y border-brand-primary-dark">
    <!-- Industrial Pattern -->
    <div class="absolute inset-0 opacity-[0.03] bg-[repeating-linear-gradient(45deg,transparent,transparent_10px,white_10px,white_20px)]"></div>
    <div class="absolute left-0 top-0 w-full h-full bg-[radial-gradient(circle_at_20%_50%,rgba(170,204,0,0.05)_0%,transparent_50%)]"></div>

    <div class="container relative z-10">
        @php
            $sectorCount = count(config('sectors.sectors'));
        @endphp
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-px bg-white/10 border border-white/10 shadow-2xl" x-data="{
                shown: false,
                animateCount(target, id) {
                    let current = 0;
                    const step = Math.ceil(target / 60);
                    const timer = setInterval(() => {
                        current += step;
                        if (current >= target) { current = target; clearInterval(timer); }
                        document.getElementById(id).textContent = current.toLocaleString();
                    }, 30);
                }
            }" x-intersect.once="
                shown = true;
                animateCount(100, 'count-enterprises');
                animateCount({{ $sectorCount }}, 'count-sectors');
                animateCount(30, 'count-countries');
                animateCount(100, 'count-guest');
            ">

            <!-- Stat Block -->
            <div class="bg-brand-primary p-12 text-center group">
                <div class="text-5xl lg:text-7xl font-black text-white mb-4 tabular-nums tracking-tighter">
                    <span id="count-enterprises">0</span><span class="text-brand-accent">K</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                    <p class="text-white/60 text-[10px] font-black uppercase tracking-[0.3em]">Enterprises</p>
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                </div>
            </div>

            <!-- Stat Block -->
            <div class="bg-brand-primary p-12 text-center group">
                <div class="text-5xl lg:text-7xl font-black text-white mb-4 tabular-nums tracking-tighter">
                    <span id="count-sectors">0</span><span class="text-brand-accent">+</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                    <p class="text-white/60 text-[10px] font-black uppercase tracking-[0.3em]">Sectors</p>
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                </div>
            </div>

            <!-- Stat Block -->
            <div class="bg-brand-primary p-12 text-center group">
                <div class="text-5xl lg:text-7xl font-black text-white mb-4 tabular-nums tracking-tighter">
                    <span id="count-countries">0</span><span class="text-brand-accent">+</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                    <p class="text-white/60 text-[10px] font-black uppercase tracking-[0.3em]">Countries</p>
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                </div>
            </div>

            <!-- Stat Block -->
            <div class="bg-brand-primary p-12 text-center group">
                <div class="text-5xl lg:text-7xl font-black text-white mb-4 tabular-nums tracking-tighter">
                    <span id="count-guest">0</span><span class="text-brand-accent">+</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                    <p class="text-white/60 text-[10px] font-black uppercase tracking-[0.3em]">Dignitaries</p>
                    <span class="w-8 h-px bg-brand-accent/30 group-hover:w-12 transition-all"></span>
                </div>
            </div>

        </div>
    </div>
</section>
