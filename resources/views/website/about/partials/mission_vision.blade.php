<section class="py-32 bg-slate-950 relative overflow-hidden">
    <!-- Industrial Decor -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    
    <div class="container relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
            
            <!-- Mission Column -->
            <div class="bg-slate-900 border border-slate-800 rounded-sm p-16 lg:p-24 group animate-on-scroll relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary opacity-5 -translate-y-1/2 translate-x-1/2 rotate-45"></div>
                
                <div class="w-20 h-20 bg-brand-primary/10 border border-brand-primary/20 rounded-sm flex items-center justify-center mb-12 group-hover:bg-brand-primary group-hover:text-slate-950 transition-all duration-700 shadow-2xl">
                    <i class="fa-solid fa-bullseye text-3xl group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="text-5xl md:text-7xl font-black text-white mb-10 tracking-tighter uppercase italic leading-none">Our <span class="text-brand-accent">Mission</span></h3>
                <p class="text-slate-400 text-2xl font-light leading-relaxed mb-14 italic">
                    To architect the global industrial community's involvement and stimulate absolute sustainable growth through innovative ESG advocacy and structural networking excellence.
                </p>
                <div class="bg-slate-950 p-12 rounded-sm border-l-[12px] border-brand-accent shadow-2xl">
                    <p class="text-white text-2xl font-black italic leading-tight uppercase tracking-tighter">
                        "Architecting the global industrial transition through absolute sustainability."
                    </p>
                </div>
            </div>

            <!-- Vision Column -->
            <div class="bg-brand-primary border border-brand-primary/20 rounded-sm p-16 lg:p-24 group animate-on-scroll delay-100 relative overflow-hidden">
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-white opacity-5 translate-y-1/2 translate-x-1/2 -rotate-12"></div>
                
                <div class="w-20 h-20 bg-white rounded-sm flex items-center justify-center mb-12 group-hover:rotate-12 transition-transform duration-700 shadow-2xl">
                    <i class="fa-solid fa-eye text-brand-primary text-3xl group-hover:scale-110 transition-transform"></i>
                </div>
                <h3 class="text-5xl md:text-7xl font-black text-slate-950 mb-10 tracking-tighter uppercase italic leading-none">Our <span class="text-white">Vision</span></h3>
                <p class="text-slate-950/80 text-2xl font-light leading-relaxed mb-14 italic">
                    To be the global benchmark for industrial sustainability, utilizing proprietary strategic pillars to transform the global economy.
                </p>
                
                <ul class="space-y-12">
                    @foreach([
                        ['t' => 'Structural Synergy', 'd' => 'Forging absolute success through systemic connectivity.', 'i' => 'link'],
                        ['t' => 'Global Unity', 'd' => 'Strong industrial bonds in a zero-carbon global marketplace.', 'i' => 'users']
                    ] as $item)
                    <li class="flex items-start gap-8 group/item">
                        <div class="w-14 h-14 rounded-sm bg-slate-950/10 border border-slate-950/10 flex items-center justify-center shrink-0 group-hover/item:bg-slate-950 group-hover/item:text-brand-accent transition-all duration-500">
                            <i class="fa-solid fa-{{ $item['i'] }} text-slate-950 group-hover/item:text-brand-accent text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-slate-950 font-black text-3xl mb-2 uppercase tracking-tighter italic">{{ $item['t'] }}</span>
                            <span class="text-slate-950/60 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed">{{ $item['d'] }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>
