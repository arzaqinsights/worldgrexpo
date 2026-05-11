@extends('layouts.website')

@section('title', 'FMCG Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/fmcg-industry.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(244,63,94,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-rose-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-rose-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-rose-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">High-Frequency Consumption Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                FMCG <br>
                <span class="text-rose-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-rose-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Powering Everyday Consumer Demand Across Global Markets.
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
                        <span class="subtitle">Consumer Demand Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Consumer <br><span class="text-rose-600">Essentials.</span></h2>
                        <div class="accent-line bg-rose-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Fast Moving Consumer Goods (FMCG)</strong> represent products that are sold quickly at relatively low cost and are consumed on a regular basis.
                        </p>
                        <p>
                            These goods form an essential part of daily life and include packaged foods, beverages, personal care products, household care items, and other consumer essentials.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200">
                    @php
                        $categories = [
                            ['icon' => 'burger', 'label' => 'Food & Beverages'],
                            ['icon' => 'sparkles', 'label' => 'Personal Care'],
                            ['icon' => 'soap', 'label' => 'Household Care'],
                            ['icon' => 'kit-medical', 'label' => 'Health & Wellness'],
                        ];
                    @endphp
                    @foreach($categories as $cat)
                        <div class="p-12 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700">
                            <i class="fa-solid fa-{{ $cat['icon'] }} text-4xl mb-6 text-rose-600 transition-transform duration-500 group-hover:scale-110"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 group-hover:text-white">{{ $cat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-rose-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-rose-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$8T+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$12T+</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-1 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                @foreach(['Rising urban population & income', 'Expansion of organized retail', 'Direct-to-consumer (D2C) growth', 'Brand innovation & sustainability'] as $driver)
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-rose-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-rose-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em]">{{ $driver }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-rose-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-rose-600 text-[10px] font-black uppercase tracking-[0.4em]">Rapid Consumption</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-rose-50 border-l-8 border-rose-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-rose-600 uppercase tracking-[0.4em] italic">Market Forecast</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">$500B+ Projected (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">16% CAGR Growth</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Growth Catalysts</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                @foreach(['Middle-class income', 'Rural penetration', 'Quick-commerce', 'Premiumization'] as $cat)
                                    <div class="p-6 bg-white flex items-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                        <div class="w-1.5 h-1.5 bg-rose-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight">{{ $cat }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">$220B+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">10K+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Organized Brands</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">5%</h4>
                    <div class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Share</div>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">8.4%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">FMCG GDP Share</p>
                </div>
            </div>

            <!-- Segments & Innovation -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Future Markets</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">High-Growth <br><span class="text-rose-600">Segments.</span></h2>
                        <div class="accent-line bg-rose-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                        @foreach(['Health & Organic', 'Premium Foods', 'Eco-Friendly', 'Digital Brands', 'Personal Wellness', 'D2C Models'] as $seg)
                            <div class="p-8 bg-white text-center group/seg hover:bg-slate-950 transition-all duration-500">
                                <p class="text-[10px] font-black uppercase text-slate-500 group-hover:text-white tracking-[0.2em] transition-colors leading-tight">{{ $seg }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(244,63,94,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-rose-400 text-[10px] font-black uppercase tracking-[0.4em]">Future Vision</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Smart Logistics</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-4 border-rose-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            The future of FMCG will be shaped by smart packaging, AI-driven analytics, and omni-channel strategies.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/5 pt-12">
                             <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-rose-600 transition-all duration-500">
                                 <i class="fa-solid fa-microchip text-rose-600 text-3xl group-hover:text-slate-950 transition-colors"></i>
                                 <span class="text-[10px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">AI Analytics</span>
                             </div>
                             <div class="p-8 bg-slate-950 border border-white/5 flex flex-col items-center gap-4 group/item hover:bg-rose-600 transition-all duration-500">
                                 <i class="fa-solid fa-leaf text-rose-600 text-3xl group-hover:text-slate-950 transition-colors"></i>
                                 <span class="text-[10px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight">Sustainable Pack</span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(244,63,94,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Global <br><span class="text-rose-600">Consumption.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-rose-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Scale your FMCG brand across expanding retail and e-commerce networks. Join the mission to build high-efficiency manufacturing and smart distribution ecosystems.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-rose-600/30 hover:!bg-rose-600">
                            Register for FMCG Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
