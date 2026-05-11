@extends('layouts.website')

@section('title', 'Biofuel / Bio Energy Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/biofuel.jpeg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Sustainable Energy Architecture</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Biofuel & <br>
                <span class="text-brand-primary">Bio Energy.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10 md:text-center mx-auto uppercase tracking-widest italic">
                Powering Tomorrow with Nature through sustainable alternatives to fossil fuels.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-white space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Renewable Infrastructure</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Sustainable Energy <br><span class="text-brand-primary">Solutions.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Biofuel and Bio Energy</strong> refer to renewable energy sources derived from biological materials such as agricultural residue, biomass, vegetable oils, and organic waste.
                        </p>
                        <p>
                            As the world shifts towards carbon neutrality, these fuels provide a critical alternative for power generation, transportation, and industrial heating, significantly reducing greenhouse gas emissions.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-brand-primary/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/biofuel.jpeg') }}" alt="Biofuel Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-brand-primary text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Carbon Neutral Focus
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Grid -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">Global Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Biofuel Market (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$180 Billion+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Bioenergy Market</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$350 Billion+</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-brand-primary tracking-tighter italic">10%</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10">
                                @foreach(['Carbon Neutrality', 'Blending Mandates', 'Clean Energy Demand', 'SAF'] as $driver)
                                    <span class="px-8 py-6 bg-slate-950 text-[9px] font-black text-slate-300 uppercase tracking-[0.2em] text-center hover:bg-brand-primary hover:text-slate-950 transition-colors cursor-default">{{ $driver }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm mb-12">
                            <div class="bg-white p-12">
                                <p class="text-[9px] text-slate-400 uppercase font-black tracking-[0.4em] mb-4">Market value (2025)</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic tracking-tighter">₹60K Cr+</p>
                            </div>
                            <div class="bg-white p-12">
                                <p class="text-[9px] text-slate-400 uppercase font-black tracking-[0.4em] mb-4">Target by 2031</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic tracking-tighter">₹1.5L Cr+</p>
                            </div>
                        </div>

                        <div class="space-y-px bg-slate-200 border border-slate-200">
                            <div class="flex items-center justify-between p-10 bg-white group/stat">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover/stat:text-brand-primary transition-colors">Ethanol Blending Target</span>
                                <span class="text-2xl font-black text-brand-primary uppercase italic">20%+</span>
                            </div>
                            <div class="flex items-center justify-between p-10 bg-white group/stat">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover/stat:text-slate-950 transition-colors">Projected CAGR</span>
                                <span class="text-2xl font-black text-slate-950 uppercase italic">15-20%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-all duration-500 tracking-tighter">$180B</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Global Biofuel</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-all duration-500 tracking-tighter">700+</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Ethanol Plants</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-all duration-500 tracking-tighter">15-20%</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">India CAGR</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-all duration-500 tracking-tighter">TOP HUB</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Energy Security</div>
                </div>
            </div>

            <!-- High Potential Segments -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Investment Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">High Potential <br><span class="text-brand-primary">Segments.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @php
                            $items = [
                                ['icon' => 'flask', 'title' => 'Ethanol Distilleries'],
                                ['icon' => 'gas-pump', 'title' => 'Biodiesel Plants'],
                                ['icon' => 'cubes', 'title' => 'Biomass Pellets'],
                                ['icon' => 'bolt', 'title' => 'Waste-to-Energy'],
                                ['icon' => 'plane', 'title' => 'Aviation Biofuel'],
                                ['icon' => 'fire-flame-curved', 'title' => 'Bio-CNG Infra'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-8 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-brand-primary scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all shadow-sm">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="text-[10px] font-black text-slate-600 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(148,163,184,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Projections
                        </div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-brand-primary">Emerging Trends <br><span class="text-white">(2026–2031)</span></h3>
                        <div class="space-y-10">
                            @foreach([
                                '2G / 3G Ethanol Plants development.',
                                'Sustainable Aviation Fuel (SAF) adoption.',
                                'Green Methanol and Bio-Hydrogen production.',
                                'Waste-to-Biofuel Refineries expansion.'
                            ] as $trend)
                            <div class="flex items-start gap-10 group/item">
                                <div class="w-2 h-2 bg-brand-primary mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
                                <p class="text-xl font-black uppercase tracking-widest text-slate-400 group-hover/item:text-white transition-colors duration-500 leading-tight">{{ $trend }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,75,35,0.3),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Bio Energy <br><span class="text-brand-primary">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-brand-primary pl-10 md:text-center mx-auto">
                        Biofuel and bio energy are powering the transition from fossil fuels to sustainable energy. With India's 20%+ ethanol blending target, the sector represents one of the most significant clean energy opportunities of our time.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-brand-primary/30 hover:!bg-brand-primary">
                            Join the Energy Transition 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
