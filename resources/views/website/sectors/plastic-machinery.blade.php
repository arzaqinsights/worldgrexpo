@extends('layouts.website')

@section('title', 'Plastic Machinery Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/plastic-machinery.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(79,70,229,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Engineering Precision Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Plastic <br>
                <span class="text-indigo-600">Machinery.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Industrial equipment powering the entire plastics manufacturing ecosystem — from extrusion to recycling.
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
                        <span class="subtitle">Machinery Value Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Ecosystem <br><span class="text-indigo-600">Backbone.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Plastic Machinery</strong> refers to industrial equipment used for processing raw polymers into finished products.
                        </p>
                        <p>
                            These machines convert granules into films, sheets, bottles, and molded components through processes such as extrusion, injection molding, and recycling.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-indigo-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/plastic-machinery.jpg') }}" alt="Plastic Machinery"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="bg-indigo-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Precision Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-indigo-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$45B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$65B</span>
                            </div>
                        </div>

                        <div class="p-8 bg-white/5 border border-white/10 shadow-2xl">
                             <p class="text-[10px] font-black text-indigo-400 uppercase tracking-[0.4em] mb-4">Core Drivers</p>
                             <div class="grid grid-cols-2 gap-4">
                                @foreach(['E-commerce Pkg', 'Automotive Lightening', 'Industry 4.0', 'Energy Efficiency'] as $d)
                                    <div class="flex items-center gap-4 group/item">
                                        <div class="w-1.5 h-1.5 bg-indigo-600"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-400 group-hover/item:text-white transition-colors tracking-widest leading-tight">{{ $d }}</span>
                                    </div>
                                @endforeach
                             </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-gears text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-indigo-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-indigo-50 border-l-8 border-indigo-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-indigo-600 uppercase tracking-[0.4em] italic">Market Projection</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">$7B Target (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">7-8% Annual CAGR Growth</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Industrial Share</h4>
                            <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-indigo-600 group-hover:text-white transition-colors">10%</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Global Polymer Use</span>
                                </div>
                                <div class="p-8 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                    <span class="text-4xl font-black text-indigo-600 group-hover:text-white transition-colors">HIGH</span>
                                    <span class="text-[9px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.1em] text-center">Import Substitution Opp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">~6%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$4.5B</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">8%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR Target</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">TOP</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Engineering Hub</p>
                </div>
            </div>

            <!-- Key Machinery Types -->
            <div class="p-24 bg-slate-950 text-white space-y-24 relative overflow-hidden group border border-white/5 shadow-3xl">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(79,70,229,0.1),transparent)] opacity-50"></div>
                <div class="relative z-10 text-center space-y-6">
                    <h3 class="text-6xl font-black uppercase tracking-tighter italic">Engineering <span class="text-indigo-600">Inventory.</span></h3>
                    <p class="text-2xl text-slate-500 font-medium italic uppercase tracking-tighter">Essential production equipment.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-white/10 border border-white/10 shadow-2xl relative z-10">
                    @php
                        $machinery = [
                            ['icon' => 'industry', 'title' => 'Extrusion Machines', 'desc' => 'Film, Sheet, Pipe & Profile lines.'],
                            ['icon' => 'syringe', 'title' => 'Injection Molding', 'desc' => 'Packaging caps, Automotive & Household.'],
                            ['icon' => 'bottle-water', 'title' => 'Blow Molding', 'desc' => 'Bottles, containers & jerry cans.'],
                            ['icon' => 'print', 'title' => 'Printing & Converting', 'desc' => 'Rotogravure & Flexographic lines.'],
                        ];
                    @endphp
                    @foreach($machinery as $m)
                        <div class="p-12 bg-slate-950 group/item hover:bg-indigo-600 transition-all duration-500">
                            <i class="fa-solid fa-{{ $m['icon'] }} text-4xl text-indigo-600 group-hover/item:text-slate-950 mb-8 transition-colors"></i>
                            <h4 class="text-xl font-black uppercase text-white group-hover/item:text-slate-950 mb-4 transition-colors italic">{{ $m['title'] }}</h4>
                            <p class="text-[10px] font-black uppercase text-slate-500 group-hover/item:text-slate-900 tracking-widest leading-relaxed transition-colors italic">{{ $m['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Opportunities & Innovation -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Innovation Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-indigo-600">Trends.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $trends = [
                                ['icon' => 'recycle', 'title' => 'Recycling Machinery Systems'],
                                ['icon' => 'robot', 'title' => 'AI & Robotics Integration'],
                                ['icon' => 'wifi', 'title' => 'Smart Industry 4.0 Connected Lines'],
                                ['icon' => 'leaf', 'title' => 'Energy-Efficient High-Speed Ops'],
                                ['icon' => 'cube', 'title' => '3D Printing & Additive Mfg Equipment'],
                            ];
                        @endphp
                        @foreach($trends as $item)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-indigo-600 group-hover/opp:bg-indigo-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(79,70,229,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-10">
                        <i class="fa-solid fa-industry text-[8rem] text-indigo-600/10 group-hover:text-indigo-600 transition-all duration-700"></i>
                        <h4 class="text-5xl font-black uppercase text-white tracking-tighter italic leading-tight">Transformation</h4>
                        <p class="text-2xl text-slate-400 font-medium italic max-w-sm mx-auto uppercase tracking-tighter leading-relaxed">
                            The plastic machinery industry is a <span class="text-white font-black tracking-tight">high-growth</span> global sector driving the entire value chain.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,70,229,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Smart <br><span class="text-indigo-600">Production.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-indigo-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        India is rapidly emerging as a strong demand hub and manufacturing base for high-end plastic machinery. Join the global production standard.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
                            Partner for Production 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
