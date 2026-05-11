@extends('layouts.website')

@section('title', 'Biogas Industry')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/biogas-industry.webp') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-lime-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-lime-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
                <span class="w-2 h-2 bg-lime-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Renewable Methane Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Biogas <br>
                <span class="text-lime-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-lime-600 pl-10 uppercase tracking-widest italic">
                Clean Fuel from Organic Waste.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Waste-to-Energy Architecture</span>
                        <h2>The Science of <br><span class="text-lime-600">Biogas.</span></h2>
                        <div class="accent-line bg-lime-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Biogas</strong> is a renewable energy source produced through the <strong>anaerobic digestion</strong> of organic waste materials such as agricultural residue, food waste, animal manure, sewage sludge, and industrial biodegradable waste.
                        </p>
                        <p>
                            It mainly contains methane and carbon dioxide and helps <strong>reduce greenhouse gas emissions, manage waste effectively</strong>, and supports circular economy initiatives.
                        </p>
                    </div>
                </div>

                <div class="relative group animate-on-scroll">
                    <div class="absolute inset-0 bg-lime-600/10 translate-x-4 translate-y-4"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/biogas-industry.webp') }}" alt="Biogas Industry"
                            class="w-full h-[500px] object-cover grayscale hover:grayscale-0 transition-all duration-700">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-lime-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Anaerobic Recovery
                        </div>
                    </div>
                </div>
            </div>

            <!-- Applications -->
            <div class="space-y-16">
                <div class="text-center space-y-4">
                    <span class="text-lime-600 text-[10px] font-black uppercase tracking-[0.4em]">Multi-Vertical Utilization</span>
                    <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Biogas Applications</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    @php
                        $apps = [
                            ['icon' => 'bolt', 'label' => 'Electricity Generation', 'color' => 'lime'],
                            ['icon' => 'fire', 'label' => 'Heating & Cooking', 'color' => 'amber'],
                            ['icon' => 'industry', 'label' => 'Industrial Thermal', 'color' => 'orange'],
                            ['icon' => 'compress', 'label' => 'CBG Production', 'color' => 'green'],
                            ['icon' => 'car-side', 'label' => 'Transport Fuel', 'color' => 'teal'],
                        ];
                    @endphp
                    @foreach($apps as $app)
                        <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                            <div class="w-16 h-16 mx-auto mb-8 bg-slate-50 border border-slate-100 flex items-center justify-center text-{{ $app['color'] }}-600 group-hover:bg-{{ $app['color'] }}-600 group-hover:text-white transition-all shadow-sm">
                                <i class="fa-solid fa-{{ $app['icon'] }} text-2xl"></i>
                            </div>
                            <h4 class="text-[10px] font-black text-slate-900 group-hover:text-white uppercase tracking-[0.3em] leading-tight">{{ $app['label'] }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Global vs India -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-lime-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-globe text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-lime-400 text-[10px] font-black uppercase tracking-[0.4em]">International Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter">Global Market</h3>
                        </div>
                        
                        <div class="space-y-8">
                            <div class="flex items-end justify-between border-b border-white/10 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-5xl font-black text-white tracking-tighter">$75B+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2032)</span>
                                <span class="text-5xl font-black text-white tracking-tighter">$120B+</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-5xl font-black text-lime-500 tracking-tighter">8%</span>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="flex flex-wrap gap-px bg-white/10 border border-white/10">
                                @foreach(['Renewable Demand', 'Decarbonization', 'Waste-to-Energy', 'ESG Adoption', 'Blending Mandates'] as $driver)
                                    <span class="px-6 py-3 bg-slate-950 text-[9px] font-black text-slate-300 uppercase tracking-[0.2em] border-r border-white/10 last:border-0">{{ $driver }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-lime-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-flag-checkered text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-lime-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-8">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-5xl font-black text-slate-950 tracking-tighter">₹15K Cr+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-5xl font-black text-lime-600 tracking-tighter">18%</span>
                            </div>
                            <div class="p-8 bg-lime-50 border-l-4 border-lime-600">
                                <p class="text-[9px] font-black text-lime-600 uppercase tracking-[0.4em] mb-4">India Target (2031)</p>
                                <p class="text-3xl font-black text-slate-950 uppercase italic leading-tight">₹40,000 Crore+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-5xl font-black text-lime-600 mb-2">$75B+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">Global Market</p>
                </div>
                <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-5xl font-black text-lime-600 mb-2">₹15K Cr+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">India Market</p>
                </div>
                <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-5xl font-black text-lime-600 mb-2">5,000+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">India Plants</p>
                </div>
                <div class="p-12 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-5xl font-black text-lime-600 mb-2">15–18%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">India CAGR</p>
                </div>
            </div>

            <!-- Capacity + Ecosystem -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-white space-y-16">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-slate-950 pl-10 tracking-tighter">India Capacity</h3>
                    <div class="space-y-8">
                        <p class="text-xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                            Over <strong>5,000+ operational plants</strong> including small and industrial units. Huge untapped feedstock from agriculture and municipal waste.
                        </p>
                        <div class="space-y-4">
                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.4em]">Major Growth States</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-100 border border-slate-100">
                                @foreach(['Punjab', 'Haryana', 'Uttar Pradesh', 'Maharashtra', 'Gujarat', 'Karnataka'] as $state)
                                    <div class="p-6 bg-white flex items-center gap-4 group/state hover:bg-slate-950 transition-colors">
                                        <i class="fa-solid fa-map-pin text-lime-500 text-xs"></i>
                                        <span class="text-[10px] font-black text-slate-600 group-hover/state:text-white uppercase tracking-[0.2em]">{{ $state }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-24 bg-slate-50 space-y-16">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-lime-600 pl-10 tracking-tighter">Global Ecosystem</h3>
                    <div class="space-y-12">
                        <div class="p-10 bg-slate-950 text-white shadow-2xl">
                             <p class="text-[10px] font-black text-lime-500 uppercase tracking-[0.4em] mb-4 text-center">Global Status</p>
                             <p class="text-4xl font-black text-center uppercase tracking-tighter leading-tight italic">50,000+ Biogas Plants Globally</p>
                        </div>
                        <ul class="space-y-6">
                            @foreach([
                                "Emerging as one of the largest future biofuel markets",
                                "Government aims for 5,000+ CBG plants under SATAT",
                                "Rising fossil fuel costs driving adoption",
                                "Large agricultural residue availability in India",
                                "Clean transportation fuel demand scaling"
                            ] as $point)
                                <li class="flex items-start gap-6 group/item">
                                    <div class="w-2 h-2 bg-lime-500 mt-2 group-hover/item:scale-150 transition-transform"></div>
                                    <span class="text-[10px] font-black text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-slate-950 transition-colors leading-relaxed">{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Trends + Opportunities -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Future Horizons</span>
                        <h2>Emerging <br><span class="text-lime-600">Trends.</span></h2>
                        <div class="accent-line bg-lime-600"></div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @php
                            $trends = [
                                ['icon' => 'compress', 'label' => 'CBG Bottling Plants', 'color' => 'lime'],
                                ['icon' => 'gas-pump', 'label' => 'Bio-CNG Fuel Stations', 'color' => 'green'],
                                ['icon' => 'bolt', 'label' => 'Waste-to-Energy Mega Projects', 'color' => 'amber'],
                                ['icon' => 'users', 'label' => 'Decentralized Digesters', 'color' => 'teal'],
                                ['icon' => 'coins', 'label' => 'Carbon Credit Projects', 'color' => 'violet'],
                                ['icon' => 'seedling', 'label' => 'Organic Fertilizer Sales', 'color' => 'emerald'],
                            ];
                        @endphp
                        @foreach($trends as $trend)
                            <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-1 h-full bg-{{ $trend['color'] }}-500 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <div class="flex items-center gap-6">
                                    <div class="w-10 h-10 bg-{{ $trend['color'] }}-100 flex items-center justify-center text-{{ $trend['color'] }}-600 group-hover:bg-{{ $trend['color'] }}-600 group-hover:text-white transition-all shadow-sm">
                                        <i class="fa-solid fa-{{ $trend['icon'] }} text-sm"></i>
                                    </div>
                                    <span class="text-[9px] font-black text-slate-600 group-hover:text-white uppercase tracking-[0.2em] leading-tight">{{ $trend['label'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group border border-white/5 shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(163,230,53,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-lime-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Sector Advantage
                        </div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-lime-600">Why India is a <br><span class="text-white">Biogas Hub.</span></h3>
                        <ul class="space-y-8">
                            @foreach([
                                'Massive biomass/agri-waste availability',
                                'Strong government push for clean fuel',
                                'Increasing private/public investments',
                                'Large rural and industrial demand',
                                'Supportive sustainability regulations'
                            ] as $why)
                                <li class="flex items-start gap-6 group/item">
                                    <i class="fa-solid fa-check-circle text-lime-600 text-xl group-hover/item:scale-125 transition-transform"></i>
                                    <span class="text-slate-400 text-lg font-black uppercase tracking-widest group-hover/item:text-white transition-colors">{{ $why }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl border border-white/5 group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(132,204,22,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Biogas <br><span class="text-lime-600">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-lime-600 pl-10">
                        Biogas is transforming organic waste into clean energy, driving sustainable waste management and reducing fossil fuel dependency. Join the circular clean energy economy today.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-lime-600/30 hover:!bg-lime-600">
                            Explore Biogas Opportunities 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

