@extends('layouts.website')

@section('title', 'Wood Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/wood-recycling-hero.png') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(245,158,11,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Timber Recovery Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Wood <br>
                <span class="text-amber-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Transforming timber waste into sustainable resources for a greener manufacturing future.
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
                        <span class="subtitle">Forest Resource Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Timber <br><span class="text-amber-600">Conservation.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Wood recycling</strong> is the process of collecting and reprocessing waste wood from construction, demolition, and furniture manufacturing into reusable industrial products.
                        </p>
                        <p>
                            By converting wood waste into particle boards, mulch, and biomass fuel, this industry helps reduce landfill waste, lowers carbon emissions, and significantly minimizes the pressure on global forests.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-amber-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/wood-recycling-hero.png') }}" alt="Wood Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-amber-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Timber Protocol
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-amber-400 text-[10px] font-black uppercase tracking-[0.4em]">International Transition</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$20B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-amber-500 tracking-tighter italic">$30B</span>
                            </div>
                        </div>

                        <div class="p-10 bg-amber-600/10 border-l-8 border-amber-600">
                            <p class="text-[10px] font-black text-amber-500 uppercase tracking-[0.4em] mb-2">Market Sentiment</p>
                            <p class="text-xl font-black text-white uppercase italic tracking-tighter">Rising sustainability mandates are driving global wood waste recovery investments.</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-tree text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-amber-50 border-l-8 border-amber-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-amber-600 uppercase tracking-[0.4em] italic">Growth Forecast</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">12% - 15% CAGR</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">Emerging Industrial Status</p>
                        </div>

                        <div class="space-y-8 text-right">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Primary Sources</h4>
                            <div class="flex flex-wrap justify-end gap-2">
                                @foreach(['Delhi NCR', 'Mumbai', 'Bengaluru', 'Pune', 'Ahmedabad', 'Chennai'] as $hub)
                                    <span class="px-6 py-2 bg-slate-950 text-white text-[10px] font-black uppercase tracking-widest italic">{{ $hub }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">20K+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Reprocessors</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$25B+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Demand (2031)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">500+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Entities</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">LOW</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Carbon Footprint</p>
                </div>
            </div>

            <!-- Emerging Opportunities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Innovation Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic text-slate-950">Emerging <br><span class="text-amber-600">Opportunities.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $items = [
                                ['icon' => 'bolt', 'title' => 'Biomass Fuel / Pellets'],
                                ['icon' => 'layer-group', 'title' => 'Recycled Particle Boards'],
                                ['icon' => 'boxes-stacked', 'title' => 'Pallet Refurbishment'],
                                ['icon' => 'couch', 'title' => 'Sustainable Furniture'],
                                ['icon' => 'hammer', 'title' => 'Green Construction Mats'],
                                ['icon' => 'fire-flame-curved', 'title' => 'Waste-to-Energy'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-amber-600 group-hover/opp:bg-amber-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 flex flex-col justify-center">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(245,158,11,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4 text-center">
                            <div class="text-amber-400 text-[10px] font-black uppercase tracking-[0.4em]">Circular Value</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Industrial Resilience</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-4 border-amber-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Wood recycling reduces deforestation and creates sustainable alternatives for industrial applications. As global industries move toward greener manufacturing, wood recovery is vital.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 border border-white/10 pt-12">
                             <div class="p-8 bg-slate-950 flex flex-col items-center gap-4 group/item hover:bg-amber-600 transition-all duration-500">
                                <i class="fa-solid fa-couch text-2xl text-amber-600 group-hover:text-slate-950 transition-colors"></i>
                                <span class="text-[10px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight text-center">Furniture & Boards</span>
                             </div>
                             <div class="p-8 bg-slate-950 flex flex-col items-center gap-4 group/item hover:bg-amber-600 transition-all duration-500">
                                <i class="fa-solid fa-fire text-2xl text-amber-600 group-hover:text-slate-950 transition-colors"></i>
                                <span class="text-[10px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.2em] transition-colors leading-tight text-center">Biomass Energy</span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(245,158,11,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Timber <br><span class="text-amber-600">Standard.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-amber-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        The woodworking industry is evolving. Discover how recycling wood waste can improve your ESG score while providing cost-effective raw materials for furniture and construction.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
                            Register for Wood Recovery 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
