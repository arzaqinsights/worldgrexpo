@extends('layouts.website')

@section('title', 'Agro & Food Processing Industry Overview')

@section('content')

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-30">
            <img src="{{ asset('images/sectors/agro-food-processing.jpg') }}" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/80 to-slate-950"></div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-8">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-accent animate-pulse"></span>
                Sector Insight
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Agro & Food <br>
                <span class="text-brand-primary italic">Processing.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                Transforming global agriculture through value-added manufacturing and sustainable processing innovations.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-white relative">
        <div class="container space-y-32">

            <!-- Executive Summary -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-8" x-data="{ visible: false }" x-intersect="visible = true">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-brand-primary/5 text-brand-primary text-[10px] font-black uppercase tracking-[0.2em]">
                        Executive Summary
                    </div>
                    <h2 class="text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                        From Farm <br>
                        <span class="text-brand-primary italic">To Plate.</span>
                    </h2>
                    <div class="space-y-6 text-xl text-slate-500 font-medium leading-relaxed">
                        <p>
                            <strong class="text-slate-900">Agro and Food Processing</strong> refers to the transformation of agricultural raw materials into value-added food, beverage, and industrial products through modern processing, preservation, packaging, and distribution systems.
                        </p>
                        <p>
                            This sector acts as a vital bridge between agriculture and manufacturing, ensuring food security, reducing wastage, and delivering high-quality products to global markets.
                        </p>
                    </div>
                </div>

                <!-- Segments Grid -->
                <div class="grid grid-cols-2 gap-6">
                    @php
                        $segments = [
                            ['icon' => 'cow', 'label' => 'Dairy Processing'],
                            ['icon' => 'apple-whole', 'label' => 'Fruit & Veg'],
                            ['icon' => 'wheat-awn', 'label' => 'Grain & Pulses'],
                            ['icon' => 'bottle-water', 'label' => 'Beverages'],
                        ];
                    @endphp
                    @foreach($segments as $seg)
                        <div class="p-10 rounded-[2.5rem] bg-slate-50 border border-slate-100 flex flex-col items-center text-center group hover:bg-brand-primary hover:border-brand-primary transition-all duration-500">
                            <div class="w-16 h-16 rounded-2xl bg-white shadow-xl flex items-center justify-center text-brand-primary text-3xl mb-6 group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-{{ $seg['icon'] }}"></i>
                            </div>
                            <p class="text-xs font-black uppercase tracking-widest text-slate-400 group-hover:text-white/80">{{ $seg['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Key Activities (Modern Horizontal Process) -->
            <div class="relative p-12 lg:p-20 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px]"></div>
                <div class="relative z-10 space-y-16">
                    <div class="text-center space-y-4">
                        <div class="text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">Core Operations</div>
                        <h3 class="text-4xl font-black text-white uppercase tracking-tighter">Key Processing Activities</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-10 relative">
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
                            <div class="relative group text-center space-y-6">
                                <div class="w-16 h-16 rounded-3xl bg-white/10 backdrop-blur-xl border border-white/10 flex items-center justify-center mx-auto text-xl font-black text-brand-accent group-hover:bg-brand-primary group-hover:text-white transition-all shadow-2xl">
                                    {{ $index + 1 }}
                                </div>
                                <p class="text-xs font-black uppercase tracking-widest text-slate-400 group-hover:text-white transition-colors leading-tight">{{ $activity }}</p>
                                
                                @if($index < 4)
                                    <div class="hidden md:block absolute top-8 left-[calc(50%+2rem)] w-[calc(100%-4rem)] h-[1px] bg-white/10"></div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Market Intelligence Grid -->
            <div class="grid lg:grid-cols-2 gap-10">
                <!-- Global Metrics -->
                <div class="p-12 rounded-[3rem] bg-slate-900 border border-white/5 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary/10 group-hover:text-brand-primary/20 transition-colors">
                        <i class="fa-solid fa-earth-asia text-9xl"></i>
                    </div>
                    <div class="relative z-10 space-y-10">
                        <div class="space-y-2">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">Market Scale</div>
                            <h3 class="text-3xl font-black text-white uppercase tracking-tight">Global Market</h3>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-end justify-between border-b border-white/10 pb-4">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-widest">Market Value (2025)</span>
                                <span class="text-3xl font-black text-white tracking-tighter">$8 Trillion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-4">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-widest">Projected (2031)</span>
                                <span class="text-3xl font-black text-white tracking-tighter">$11 Trillion</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-widest">Annual CAGR</span>
                                <span class="text-3xl font-black text-brand-primary tracking-tighter">6%</span>
                            </div>
                        </div>

                        <div class="pt-6">
                            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-2xl bg-white/5 border border-white/10">
                                <div class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></div>
                                <span class="text-xs font-black text-white uppercase tracking-widest">500,000+ Enterprises Globally</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- India Metrics -->
                <div class="p-12 rounded-[3rem] bg-slate-50 border border-slate-100 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary/5 group-hover:text-brand-primary/10 transition-colors">
                        <i class="fa-solid fa-tractor text-9xl"></i>
                    </div>
                    <div class="relative z-10 space-y-10">
                        <div class="space-y-2">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">National Focus</div>
                            <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tight">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-end justify-between border-b border-slate-200 pb-4">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">Market Value (2025)</span>
                                <span class="text-3xl font-black text-slate-900 tracking-tighter">$600 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-200 pb-4">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">Projected (2031)</span>
                                <span class="text-3xl font-black text-slate-900 tracking-tighter">$1 Trillion</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest">Annual CAGR</span>
                                <span class="text-3xl font-black text-brand-primary tracking-tighter">12%</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 rounded-2xl bg-white border border-slate-100 shadow-sm">
                                <div class="text-[9px] font-black uppercase text-slate-400 tracking-widest mb-1">Processing Units</div>
                                <div class="text-xl font-black text-slate-900 uppercase">40,000+</div>
                            </div>
                            <div class="p-4 rounded-2xl bg-white border border-slate-100 shadow-sm">
                                <div class="text-[9px] font-black uppercase text-slate-400 tracking-widest mb-1">Growth Index</div>
                                <div class="text-xl font-black text-brand-primary uppercase">High</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Future Outlook -->
            <div class="grid lg:grid-cols-2 gap-12">
                <div class="p-12 rounded-[3rem] bg-slate-950 text-white space-y-10">
                    <div class="space-y-4">
                        <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">Global Perspective</div>
                        <h3 class="text-4xl font-black uppercase tracking-tighter">The Global Outlook</h3>
                    </div>
                    <ul class="space-y-6">
                        @foreach([
                            'Increased automation in food manufacturing',
                            'Rising demand for plant-based and health foods',
                            'Expansion of sustainable and smart packaging',
                            'Strong investment in traceability and food-tech'
                        ] as $item)
                        <li class="flex items-center gap-6 group">
                            <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-circle-nodes"></i>
                            </div>
                            <span class="text-sm font-black uppercase tracking-widest text-slate-400 group-hover:text-white transition-colors">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="p-12 rounded-[3rem] bg-slate-50 border border-slate-100 space-y-10">
                    <div class="space-y-4">
                        <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">India Perspective</div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter">The India Outlook</h3>
                    </div>
                    <ul class="space-y-6">
                        @foreach([
                            'Rapid growth in packaged & ready-to-eat segments',
                            'Strong export expansion in processed foods',
                            'Increased FDI and private equity investments',
                            'Rise in food-tech startups and processing clusters'
                        ] as $item)
                        <li class="flex items-center gap-6 group">
                            <div class="w-10 h-10 rounded-xl bg-brand-primary/5 border border-brand-primary/10 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </div>
                            <span class="text-sm font-black uppercase tracking-widest text-slate-500 group-hover:text-slate-900 transition-colors">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="space-y-10">
                    <div class="space-y-6">
                        <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.3em]">Economic Impact</div>
                        <h2 class="text-5xl font-black text-slate-900 leading-[0.9] tracking-tighter uppercase">
                            Strategic <br>
                            <span class="text-brand-primary italic">Importance.</span>
                        </h2>
                    </div>
                    <div class="space-y-4">
                        @foreach([
                            'Reduces post-harvest agricultural losses',
                            'Enhances farmer income and rural employment',
                            'Supports food security and exports',
                            'Boosts industrialization of agriculture',
                            'Drives value-added manufacturing demand'
                        ] as $imp)
                        <div class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 group hover:bg-brand-primary transition-all duration-500">
                            <div class="w-8 h-8 rounded-full bg-white shadow-md flex items-center justify-center text-brand-primary group-hover:text-brand-primary">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <span class="text-sm font-black uppercase tracking-widest text-slate-600 group-hover:text-white">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative p-12 lg:p-20 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl">
                    <div class="absolute inset-0 bg-linear-to-br from-brand-primary/20 to-transparent"></div>
                    <div class="relative z-10 space-y-8">
                        <div class="text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">Future Proofing</div>
                        <h4 class="text-4xl font-black text-white leading-tight uppercase tracking-tighter">The Power of <br><span class="text-brand-primary italic">Agri-Tech.</span></h4>
                        <p class="text-lg text-slate-400 font-medium leading-relaxed">
                            Agro and Food Processing is a strategic pillar of economic growth, connecting agriculture with manufacturing and retail. With strong policy support, India is set to become one of the largest agro-processing hubs globally.
                        </p>
                        <div class="pt-8 flex items-center gap-6">
                             <div class="w-16 h-1 bg-brand-accent rounded-full"></div>
                             <p class="text-[10px] font-black uppercase tracking-[0.4em] text-white">Sustainability & Quality First</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-16 lg:p-24 rounded-[4rem] bg-slate-950 overflow-hidden text-center shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/5">
                <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_bottom,rgba(0,75,35,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter leading-none">
                        Drive the <span class="text-brand-primary italic">Agro-Manufacturing</span> <br>Revolution.
                    </h3>
                    <p class="text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
                        Maximize agricultural value and optimize food supply chains. Join the mission to build world-class food processing clusters and advanced cold chain logistics.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="group flex items-center gap-4 px-12 py-6 rounded-2xl bg-brand-primary text-white font-black uppercase tracking-widest text-sm hover:bg-brand-primary-dark transition-all shadow-2xl shadow-brand-primary/20">
                            Register for Agro Support 
                            <i class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
