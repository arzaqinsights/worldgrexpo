<section class="py-32 bg-white relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50 -skew-x-12 translate-x-1/2"></div>
    
    <div class="container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-24">
            
            <!-- Content Area -->
            <div class="w-full lg:w-1/2 animate-on-scroll">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                    <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">The Global Foundation</span>
                </div>

                <h2 class="text-5xl md:text-8xl font-black text-slate-950 uppercase tracking-tighter italic leading-[0.85] mb-12">
                    World <span class="text-brand-accent not-italic">Grexpo</span> <br> Foundation
                </h2>

                <div class="space-y-8 mb-12">
                    <p class="text-2xl text-slate-600 leading-relaxed font-light">
                        World Grexpo Foundation (WGF) is a Section-8 Global Think-Tank and Not-for-Profit organization architecting the future of <span class="font-black text-slate-950 uppercase italic tracking-tighter">Industrial Sustainability</span>.
                    </p>

                    <p class="text-lg text-slate-500 leading-relaxed font-light italic border-l-2 border-slate-100 pl-8">
                        We operate at the absolute intersection of industrial innovation and environmental stewardship, driving the global transition toward a zero-carbon economy.
                    </p>
                </div>

                <!-- Key Focus Areas Grid -->
                <div class="grid grid-cols-2 gap-4 mb-14">
                    @php
                        $focus = [
                            ['icon' => 'fa-leaf', 'label' => 'Green Hydrogen'],
                            ['icon' => 'fa-cloud-sun', 'label' => 'Carbon Neutrality'],
                            ['icon' => 'fa-recycle', 'label' => 'Circular Economy'],
                            ['icon' => 'fa-water', 'label' => 'ESG Frameworks'],
                        ];
                    @endphp
                    @foreach($focus as $item)
                        <div class="flex items-center gap-4 p-4 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                            <div class="w-10 h-10 bg-white border border-slate-200 flex items-center justify-center rounded-sm group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-500">
                                <i class="fa-solid {{ $item['icon'] }} text-slate-950 text-sm group-hover:scale-110"></i>
                            </div>
                            <span class="text-slate-950 font-black uppercase tracking-widest text-[10px] group-hover:text-white transition-colors">{{ $item['label'] }}</span>
                        </div>
                    @endforeach
                </div>

                <!-- Highlight Box -->
                <div class="bg-slate-950 p-12 rounded-sm relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-brand-accent opacity-10 -translate-y-1/2 translate-x-1/2 rotate-45 group-hover:rotate-90 transition-transform duration-1000"></div>
                    <p class="text-white italic font-light relative z-10 text-2xl leading-tight tracking-tight">
                        <i class="fa-solid fa-quote-left absolute -top-8 -left-8 text-white/5 text-8xl -z-10"></i>
                        "Architecting a global industrial ecosystem where <span class="text-brand-accent not-italic">growth</span> and <span class="text-brand-accent not-italic">sustainability</span> are structurally inseparable."
                    </p>
                </div>
            </div>

            <!-- Image Area -->
            <div class="w-full lg:w-1/2 relative group animate-on-scroll delay-100">
                <div class="relative rounded-sm overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.2)] h-[750px] border border-slate-100">
                    <img src="{{ asset('images/about/who-we-are.png') }}" alt="World Grexpo Foundation Global" class="w-full h-full object-cover grayscale group-hover:grayscale-0 scale-105 group-hover:scale-100 transition-all duration-[2000ms]">
                    
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-1000"></div>
                    
                    <!-- Stats overlay -->
                    <div class="absolute bottom-12 left-12 right-12 p-12 bg-white/95 backdrop-blur-xl shadow-2xl rounded-sm border-t-4 border-brand-accent">
                        <div class="flex items-center justify-around">
                            <div class="text-center">
                                <span class="block text-4xl font-black text-slate-950 italic tracking-tighter mb-1">7+</span>
                                <span class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-500">Impact Nodes</span>
                            </div>
                            <div class="w-px h-16 bg-slate-200"></div>
                            <div class="text-center">
                                <span class="block text-4xl font-black text-slate-950 italic tracking-tighter mb-1">{{ count(config('sectors.sectors')) }}</span>
                                <span class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-500">Global Sectors</span>
                            </div>
                            <div class="w-px h-16 bg-slate-200"></div>
                            <div class="text-center">
                                <span class="block text-4xl font-black text-slate-950 italic tracking-tighter mb-1">30+</span>
                                <span class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-500">Active Nations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
