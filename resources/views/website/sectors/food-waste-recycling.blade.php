@extends('layouts.website')

@section('title', 'Food Waste Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/food-waste-recycling.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(132,204,22,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-lime-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-lime-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-lime-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Organic Recovery Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Food Waste <br>
                <span class="text-lime-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-lime-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Transforming discarded organic matter into life-sustaining compost and clean renewable energy.
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
                        <span class="subtitle">Bio-Cycle Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Organic <br><span class="text-lime-600">Reclamation.</span></h2>
                        <div class="accent-line bg-lime-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Food waste recycling</strong> is the process of converting discarded organic materials into high-value products like compost and biogas.
                        </p>
                        <p>
                            It handles waste from households and industry, playing a vital role in reducing landfill methane emissions while providing sustainable solutions for agriculture and energy.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-lime-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/food-waste-recycling.jpg') }}" alt="Food Waste Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="bg-lime-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Bio-Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-lime-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-lime-400 text-[10px] font-black uppercase tracking-[0.4em]">International Value</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$55 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-lime-500 tracking-tighter italic">$95 Billion</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                            <div class="p-8 bg-slate-950 text-center space-y-2 group/item hover:bg-lime-600 transition-all duration-500">
                                <p class="text-3xl font-black italic group-hover:scale-110 transition-transform">15000+</p>
                                <p class="text-[9px] font-black uppercase text-slate-400 group-hover:text-slate-950 tracking-[0.2em]">Global Facilities</p>
                            </div>
                            <div class="p-8 bg-slate-950 text-center space-y-2 group/item hover:bg-lime-600 transition-all duration-500">
                                <p class="text-3xl font-black italic group-hover:scale-110 transition-transform">7% - 9%</p>
                                <p class="text-[9px] font-black uppercase text-slate-400 group-hover:text-slate-950 tracking-[0.2em]">Annual CAGR</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-lime-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-lime-600 text-[10px] font-black uppercase tracking-[0.4em]">National Strategy</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$2 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Projected CAGR</span>
                                <span class="text-6xl font-black text-lime-600 tracking-tighter italic">15%</span>
                            </div>
                            <div class="p-12 bg-lime-50 border-l-8 border-lime-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-lime-600 uppercase tracking-[0.4em] mb-4 italic">Economic Status</p>
                                <p class="text-5xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">Bio-Growth Hub</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Verticals & Outputs -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-slate-950 text-white space-y-16">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-lime-500 border-l-8 border-lime-600 pl-10">Strategic Verticals</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-white/5 border border-white/5">
                        @foreach([
                            ['icon' => 'seedling', 'label' => 'Composting'],
                            ['icon' => 'faucet-drip', 'label' => 'Biogas Production'],
                            ['icon' => 'gas-pump', 'label' => 'Biofuel Conversion'],
                            ['icon' => 'cow', 'label' => 'Animal Feed'],
                            ['icon' => 'leaf', 'label' => 'Bio-Fertilizer'],
                            ['icon' => 'temperature-arrow-down', 'label' => 'Soil Health'],
                        ] as $opp)
                            <div class="p-10 bg-slate-950 group/item hover:bg-lime-600 transition-all duration-500 relative overflow-hidden text-center">
                                <div class="absolute top-0 left-0 w-1 h-full bg-white scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <i class="fa-solid fa-{{ $opp['icon'] }} text-3xl mb-6 text-lime-600 group-hover/item:text-slate-950 transition-colors"></i>
                                <p class="text-[12px] font-black uppercase text-slate-400 group-hover/item:text-slate-950 tracking-[0.2em] leading-tight transition-colors italic">{{ $opp['label'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-white space-y-16 border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950 border-l-8 border-slate-950 pl-10">Recycled Outputs</h3>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach(['Organic Compost', 'Renewable Energy', 'Bio-Fertilizers', 'Animal Feed', 'Biofuels', 'Soil Enhancers'] as $hub)
                            <div class="p-10 bg-white border border-slate-100 flex items-center justify-center group/hub hover:bg-slate-950 transition-all duration-700 shadow-sm">
                                <span class="text-[12px] font-black uppercase text-slate-500 group-hover/hub:text-white tracking-[0.3em] transition-colors italic">{{ $hub }}</span>
                            </div>
                        @endforeach
                    </div>
                    <p class="text-[12px] font-black text-slate-400 uppercase tracking-widest text-center italic">Key Bio-Industrial Products</p>
                </div>
            </div>

            <!-- Architecture CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(132,204,22,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Bio <br><span class="text-lime-600">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-lime-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Food waste recycling is the backbone of sustainable waste management. World Grexpo facilitates the transition towards valuable organic resources.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-lime-600/30 hover:!bg-lime-600">
                            Join the Bio-Mission 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
