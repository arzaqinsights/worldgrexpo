@extends('layouts.website')

@section('title', 'Plastic Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/plastic-recycling.jpeg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(6,182,212,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-cyan-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-cyan-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-cyan-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Circular Material Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Plastic <br>
                <span class="text-cyan-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-cyan-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Transforming waste into worth through the circular economy and industrial sustainability.
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
                        <span class="subtitle">Circular Value Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Waste to <br><span class="text-cyan-600">Worth.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Plastic recycling</strong> is the process of collecting, sorting, cleaning, and re-manufacturing waste plastics into reusable raw materials.
                        </p>
                        <p>
                            It helps reduce landfill waste, conserve natural resources, lower carbon emissions, and promote a sustainable circular economy across the manufacturing value chain.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-cyan-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/plastic-recycling.jpeg') }}" alt="Plastic Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-cyan-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Circular Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Process Grid -->
            <div class="p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group border border-white/5 shadow-3xl">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(6,182,212,0.1),transparent)] opacity-50"></div>
                <div class="relative z-10 text-center space-y-6">
                    <h3 class="text-6xl font-black uppercase tracking-tighter italic">Recycling <span class="text-cyan-600">Protocol.</span></h3>
                    <p class="text-2xl text-slate-500 font-medium italic uppercase tracking-tighter">Industrial processing stages.</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-5 gap-px bg-white/10 border border-white/10 shadow-2xl relative z-10">
                    @php
                        $processes = [
                            ['icon' => 'truck-ramp-box', 'label' => 'Collection'],
                            ['icon' => 'filter', 'label' => 'Segregation'],
                            ['icon' => 'shower', 'label' => 'Washing'],
                            ['icon' => 'cubes', 'label' => 'Pelletizing'],
                            ['icon' => 'recycle', 'label' => 'Reprocessing'],
                        ];
                    @endphp
                    @foreach($processes as $index => $step)
                        <div class="p-12 bg-slate-950 text-center group/step hover:bg-cyan-600 transition-all duration-500">
                            <i class="fa-solid fa-{{ $step['icon'] }} text-4xl text-cyan-600 group-hover/step:text-slate-950 mb-8 transition-colors"></i>
                            <h4 class="text-[10px] font-black uppercase text-slate-400 group-hover/step:text-slate-950 tracking-[0.2em] leading-tight transition-colors">{{ $step['label'] }}</h4>
                        </div>
                    @endforeach
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
                            <div class="text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$60.7B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$132B+</span>
                            </div>
                        </div>

                        <div class="p-8 bg-white/5 border border-white/10 shadow-2xl">
                             <p class="text-[10px] font-black text-cyan-400 uppercase tracking-[0.4em] mb-4">Core Drivers</p>
                             <div class="grid grid-cols-1 gap-4">
                                @foreach(['Sustainability Regulations', 'Brand ESG Commitments', 'Ban on Virgin Plastics', 'E-commerce Expansion'] as $d)
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-1.5 h-1.5 bg-cyan-600"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-400 group-hover/item:text-white transition-colors tracking-widest leading-tight italic">{{ $d }}</span>
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
                            <p class="text-[9px] font-black text-cyan-600 uppercase tracking-[0.4em] italic">Market Projection</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">$9B+ Target (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">11% Annual CAGR Expansion</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Sector Highlights</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm text-center">
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-cyan-600 group-hover:text-white transition-colors">60%</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Waste Recovery Rate</span>
                                </div>
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-cyan-600 group-hover:text-white transition-colors">5,000+</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Active Recyclers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">8-10%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$5B</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">11.9M</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Tons Waste (India)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-cyan-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">6%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Market Share</p>
                </div>
            </div>

            <!-- Polymer Types Bar -->
            <div class="p-12 bg-slate-950 border border-white/10 shadow-3xl text-center group">
                <h4 class="text-[10px] font-black text-cyan-600 uppercase tracking-[0.4em] mb-12">Industrial Polymer Catalog</h4>
                <div class="flex flex-wrap justify-center gap-px bg-white/10 border border-white/10">
                    @foreach(['PET', 'HDPE', 'LDPE', 'PP', 'PVC', 'PS', 'ABS'] as $poly)
                        <div class="px-10 py-6 bg-slate-950 text-white font-black uppercase tracking-widest text-sm hover:bg-cyan-600 hover:text-slate-950 transition-all duration-500 cursor-default">
                            {{ $poly }}
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Opportunities & Innovation -->
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
                                ['icon' => 'utensils', 'title' => 'Food-Grade Recycled Plastic Prod.'],
                                ['icon' => 'flask', 'title' => 'Chemical Recycling / Pyrolysis'],
                                ['icon' => 'robot', 'title' => 'AI-Based Smart Sorting Tech'],
                                ['icon' => 'gem', 'title' => 'High-Value Recycled Resins'],
                                ['icon' => 'box', 'title' => 'Circular Packaging Innovation'],
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
                        <i class="fa-solid fa-recycle text-[8rem] text-cyan-600/10 group-hover:text-cyan-600 transition-all duration-700"></i>
                        <h4 class="text-5xl font-black uppercase text-white tracking-tighter italic leading-tight">Waste to Worth</h4>
                        <p class="text-2xl text-slate-400 font-medium italic max-w-sm mx-auto uppercase tracking-tighter leading-relaxed">
                            India recycles nearly <span class="text-white font-black tracking-tight">60%</span> of plastic waste — above most global averages.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Circular <br><span class="text-cyan-600">Leadership.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-cyan-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Plastic recycling is transforming waste into valuable raw materials. Join World Grexpo to lead the circular economy revolution.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-cyan-600/30 hover:!bg-cyan-600">
                            Support Recycling 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
