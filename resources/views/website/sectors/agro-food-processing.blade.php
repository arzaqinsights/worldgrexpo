@extends('layouts.website')

@section('title', 'Agro & Food Processing Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/agro-food-processing.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Value-Added Agri Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Agro & Food <br>
                <span class="text-brand-primary">Processing.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Transforming global agriculture through value-added manufacturing and sustainable processing innovations.
            </p>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200">
                <div class="p-16 lg:p-24 bg-white space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Supply Chain Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">From Farm <br><span class="text-brand-primary">To Plate.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Agro and Food Processing</strong> refers to the transformation of agricultural raw materials into value-added products through modern preservation and distribution systems.
                        </p>
                        <p>
                            This sector acts as a vital bridge between agriculture and manufacturing, ensuring food security, reducing wastage, and delivering high-quality products to global markets.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-3xl">
                    @php
                        $segments = [
                            ['icon' => 'cow', 'label' => 'Dairy Processing'],
                            ['icon' => 'apple-whole', 'label' => 'Fruit & Veg'],
                            ['icon' => 'wheat-awn', 'label' => 'Grain & Pulses'],
                            ['icon' => 'bottle-water', 'label' => 'Beverages'],
                        ];
                    @endphp
                    @foreach($segments as $seg)
                        <div class="p-16 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-brand-primary scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-{{ $seg['icon'] }} text-3xl"></i>
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white mt-8 transition-colors">{{ $seg['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Key Activities -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">Operational Sequence</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Processing Activities</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    @php
                        $activities = [
                            'Cleaning & Sorting',
                            'Milling & Grinding',
                            'Packaging & Preservation',
                            'Cold Storage & Logistics',
                            'Quality Testing & Distribution'
                        ];
                    @endphp
                    @foreach($activities as $index => $activity)
                        <div class="relative p-16 bg-white group text-center space-y-10 hover:bg-slate-950 transition-all duration-700 overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-1 bg-brand-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                            <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center mx-auto text-xl font-black text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                {{ $index + 1 }}
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors leading-tight italic">{{ $activity }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Market Intelligence Grid -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- Global Metrics -->
                <div class="p-16 lg:p-24 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">Market Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$8 Trillion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$11 Trillion</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10 shadow-2xl">
                             <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-brand-primary transition-all duration-500 group/card text-white">
                                <p class="text-2xl font-black group-hover/card:text-slate-950 italic">500K+</p>
                                <p class="text-[10px] text-slate-500 uppercase tracking-tight group-hover/card:text-slate-950/70">Global Enterprises</p>
                             </div>
                             <div class="p-10 bg-slate-950 text-center space-y-4 hover:bg-brand-primary transition-all duration-500 group/card text-white">
                                <p class="text-2xl font-black group-hover/card:text-slate-950 italic">6% CAGR</p>
                                <p class="text-[10px] text-slate-500 uppercase tracking-tight group-hover/card:text-slate-950/70">Growth Index</p>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- India Metrics -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">National Focus</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$600B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$1T</span>
                            </div>
                            <div class="p-12 bg-slate-50 border-l-8 border-brand-primary shadow-sm text-right">
                                <p class="text-[9px] font-black text-brand-primary uppercase tracking-[0.4em] mb-4 italic">CAGR (2026–2031)</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">12% Growth Rate</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Future Outlook -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-slate-950 text-white space-y-16">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-brand-primary">Global Outlook</h3>
                    <ul class="space-y-10">
                        @foreach([
                            'Increased automation in food manufacturing',
                            'Rising demand for plant-based and health foods',
                            'Expansion of sustainable and smart packaging',
                            'Strong investment in traceability and food-tech'
                        ] as $outlook)
                            <li class="flex items-start gap-8 group/item">
                                <div class="w-2 h-2 bg-brand-primary mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
                                <span class="text-[12px] font-black text-slate-400 uppercase tracking-[0.2em] group-hover/item:text-white transition-colors leading-relaxed">{{ $outlook }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-24 bg-white space-y-16 border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">India Outlook</h3>
                    <ul class="space-y-10">
                        @foreach([
                            'Rapid growth in packaged & ready-to-eat segments',
                            'Strong export expansion in processed foods',
                            'Increased FDI and private equity investments',
                            'Rise in food-tech startups and processing clusters'
                        ] as $outlook)
                            <li class="flex items-start gap-8 group/item text-right">
                                <span class="text-[12px] font-black text-slate-600 uppercase tracking-[0.2em] group-hover/item:text-brand-primary transition-colors leading-relaxed">{{ $outlook }}</span>
                                <div class="w-2 h-2 bg-brand-primary mt-4 group-hover/item:scale-150 transition-transform duration-500"></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Socio-Economic Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Strategic <br><span class="text-brand-primary">Importance.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @foreach([
                            'Reduces post-harvest agricultural losses',
                            'Enhances farmer income and rural employment',
                            'Supports food security and exports',
                            'Boosts industrialization of agriculture',
                            'Drives value-added manufacturing demand'
                        ] as $imp)
                        <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-brand-primary scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-check text-brand-primary text-2xl group-hover:text-white transition-colors"></i>
                            <span class="text-[14px] font-black uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight italic">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(0,255,100,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Hub
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-brand-primary">The Agri-Tech <br><span class="text-white">Mandate.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-brand-primary pl-10 leading-relaxed uppercase tracking-tighter">
                            With strong policy support, India is set to become one of the largest agro-processing hubs globally.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
                             @foreach(['SUSTAINABILITY', 'AGRI-EXPORTS', 'COLD CHAIN', 'VALUE ADDITION'] as $tag)
                                <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-black uppercase tracking-[0.4em] text-brand-accent text-center hover:bg-brand-primary hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,100,35,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Agri <br><span class="text-brand-primary">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-brand-primary pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Join the mission to build world-class food processing clusters and advanced cold chain logistics. Maximize agricultural value today.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group">
                            Register for Agro Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
