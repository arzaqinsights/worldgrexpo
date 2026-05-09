<section class="section-padding bg-white relative overflow-hidden">
    <!-- Visual Decorators -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-brand-primary/5 rounded-full blur-[150px] translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            
            <!-- Information Layer -->
            <div class="space-y-12 animate-on-scroll">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        The Global Foundation
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                        World <span class="text-brand-primary italic">Grexpo.</span> <br> Foundation
                    </h2>
                </div>

                <div class="space-y-8">
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed">
                        World Grexpo Foundation (WGF) is a Section-8 Global Think-Tank and Not-for-Profit organization architecting the future of <strong class="text-slate-900 uppercase">Industrial Sustainability</strong>.
                    </p>

                    <div class="p-10 rounded-[3rem] bg-slate-50 border border-slate-100 relative group overflow-hidden">
                        <div class="absolute inset-0 bg-linear-to-br from-brand-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <p class="text-lg text-slate-500 leading-relaxed font-medium italic relative z-10">
                            We operate at the absolute intersection of industrial innovation and environmental stewardship, driving the global transition toward a zero-carbon economy.
                        </p>
                    </div>
                </div>

                <!-- Focus Areas -->
                <div class="grid grid-cols-2 gap-4">
                    @php
                        $focus = [
                            ['icon' => 'fa-leaf', 'label' => 'Green Hydrogen'],
                            ['icon' => 'fa-cloud-sun', 'label' => 'Carbon Neutrality'],
                            ['icon' => 'fa-recycle', 'label' => 'Circular Economy'],
                            ['icon' => 'fa-water', 'label' => 'ESG Frameworks'],
                        ];
                    @endphp
                    @foreach($focus as $item)
                        <div class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 group hover:bg-brand-primary transition-all duration-500">
                            <div class="w-10 h-10 bg-white shadow-md flex items-center justify-center rounded-xl group-hover:scale-110 transition-transform">
                                <i class="fa-solid {{ $item['icon'] }} text-brand-primary text-sm transition-colors group-hover:text-brand-primary"></i>
                            </div>
                            <span class="text-slate-900 font-black uppercase tracking-widest text-[9px] group-hover:text-white transition-colors">{{ $item['label'] }}</span>
                        </div>
                    @endforeach
                </div>

                <!-- Quote Box -->
                <div class="relative p-12 rounded-[3rem] bg-slate-950 overflow-hidden shadow-2xl">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/10 rounded-full blur-2xl"></div>
                    <i class="fa-solid fa-quote-left text-brand-primary/10 text-8xl absolute -top-4 -left-4"></i>
                    <p class="text-2xl text-white font-black italic tracking-tight leading-tight relative z-10">
                        "Architecting a global industrial ecosystem where <span class="text-brand-primary not-italic">growth</span> and <span class="text-brand-primary not-italic">sustainability</span> are structurally inseparable."
                    </p>
                </div>
            </div>

            <!-- Media Layer -->
            <div class="relative animate-on-scroll delay-100">
                <div class="relative rounded-[4rem] overflow-hidden shadow-2xl h-[800px] group border border-slate-100">
                    <img src="{{ asset('images/about/who-we-are.png') }}" 
                        alt="World Grexpo Foundation Global" 
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-[3000ms] group-hover:scale-110">
                    
                    <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                    
                    <!-- Stats Floating Card -->
                    <div class="absolute bottom-12 left-12 right-12 p-12 bg-white/10 backdrop-blur-3xl rounded-[3rem] border border-white/20 shadow-2xl">
                        <div class="grid grid-cols-3 gap-8 text-center divide-x divide-white/10">
                            <div class="space-y-1">
                                <span class="block text-4xl font-black text-white tracking-tighter">7+</span>
                                <span class="text-[8px] font-black uppercase tracking-[0.3em] text-brand-accent">Impact Nodes</span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-4xl font-black text-white tracking-tighter">{{ count(config('sectors.sectors')) }}</span>
                                <span class="text-[8px] font-black uppercase tracking-[0.3em] text-brand-accent">Sectors</span>
                            </div>
                            <div class="space-y-1">
                                <span class="block text-4xl font-black text-white tracking-tighter">30+</span>
                                <span class="text-[8px] font-black uppercase tracking-[0.3em] text-brand-accent">Nations</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Decorator -->
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-brand-primary rounded-[3rem] -z-10 animate-pulse"></div>
            </div>

        </div>
    </div>
</section>
