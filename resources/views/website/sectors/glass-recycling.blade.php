@extends('layouts.website')

@section('title', 'Glass Recycling')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/glass-recycling.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(6,182,212,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-cyan-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-cyan-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-cyan-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Infinite Loop Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Glass <br>
                <span class="text-cyan-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-cyan-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Collecting, sorting, and re-melting waste glass into reusable raw material.
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
                        <span class="subtitle">Circular Material Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Infinitely <br><span class="text-cyan-600">Reusable.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Glass Recycling</strong> is the process of collecting, sorting, crushing, cleaning, and re-melting waste glass into reusable raw material.
                        </p>
                        <p>
                            Unlike many other materials, glass can be recycled 100% and infinitely without loss of quality, making it one of the most sustainable packaging and construction materials.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-px bg-slate-200">
                    <div class="p-12 bg-white space-y-8">
                        <h4 class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400">Recycling Process</h4>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-px bg-slate-200 border border-slate-200">
                            @php
                                $process = [
                                    ['icon' => 'truck-ramp-box', 'label' => 'Collection'],
                                    ['icon' => 'filter', 'label' => 'Colour Sorting'],
                                    ['icon' => 'hammer', 'label' => 'Cullet Crushing'],
                                    ['icon' => 'fire', 'label' => 'Furnace Melting'],
                                    ['icon' => 'recycle', 'label' => 'Remanufacturing'],
                                ];
                            @endphp
                            @foreach($process as $step)
                                <div class="p-8 bg-white text-center group hover:bg-slate-950 transition-all duration-500">
                                    <i class="fa-solid fa-{{ $step['icon'] }} text-2xl mb-4 text-cyan-600 transition-transform group-hover:scale-110"></i>
                                    <p class="text-[8px] font-black uppercase tracking-widest text-slate-500 group-hover:text-white">{{ $step['label'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative group h-full">
                        <div class="absolute inset-0 bg-cyan-600/10"></div>
                        <div class="relative h-full overflow-hidden border-t border-slate-200 shadow-3xl">
                            <img src="{{ asset('images/sectors/glass-recycling.jpg') }}" alt="Glass Recycling"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-cyan-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Investment</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$5.4B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$8.4B</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-1 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                @foreach(['Sustainable packaging demand', 'Circular economy regulations', 'Rising energy cost', 'Construction sector demand'] as $driver)
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-cyan-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-cyan-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em]">{{ $driver }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-cyan-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-cyan-50 border-l-8 border-cyan-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-cyan-600 uppercase tracking-[0.4em] italic">Market Value</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">₹8,000 Crore+ Target</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">7–9% Annual CAGR</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Major Hubs</h4>
                            <div class="grid grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                @foreach(['Gujarat', 'Maharashtra', 'Rajasthan', 'Delhi NCR', 'Tamil Nadu'] as $city)
                                    <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500 text-center">
                                        <div class="w-1.5 h-1.5 bg-cyan-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight">{{ $city }}</span>
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
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">$5.4B</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">₹5K Cr+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">1,200+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Recyclers</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">7-9%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
            </div>

            <!-- Trends & Opportunities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Innovation Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-cyan-600">Trends.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $trends = [
                                ['icon' => 'eye', 'title' => 'Smart Optical Sorting Tech'],
                                ['icon' => 'gem', 'title' => 'High-Purity Cullet Mfg'],
                                ['icon' => 'hammer', 'title' => 'Glass-to-Sand Conversion'],
                                ['icon' => 'building', 'title' => 'Construction-Grade Products'],
                                ['icon' => 'fire', 'title' => 'Fiberglass Insulation Apps'],
                            ];
                        @endphp
                        @foreach($trends as $item)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-cyan-600 group-hover/opp:bg-cyan-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(6,182,212,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-10">
                        <i class="fa-solid fa-wine-bottle text-[8rem] text-cyan-600/10 group-hover:text-cyan-600 transition-all duration-700"></i>
                        <h4 class="text-5xl font-black uppercase text-white tracking-tighter italic leading-tight">Bottle-to-Bottle</h4>
                        <p class="text-2xl text-slate-400 font-medium italic max-w-sm mx-auto uppercase tracking-tighter">
                            High potential segments in <span class="text-white font-black tracking-tight">Construction & Packaging</span> sectors.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Infinite <br><span class="text-cyan-600">Loop.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-cyan-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Glass is 100% recyclable, infinitely reusable, making it the ultimate circular material.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-cyan-600/30 hover:!bg-cyan-600">
                            Join Circular Economy 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
