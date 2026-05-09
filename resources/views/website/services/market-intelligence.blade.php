@extends('layouts.website')

@section('title', 'Market Intelligence & Data Analytics - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Data Intelligence</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Market <span class="text-brand-accent not-italic">Intelligence</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Empowering industrial nodes with absolute real-time data and predictive transition analytics.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE DATA EDGE -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Intelligence is <span class="text-brand-primary not-italic">Power</span> <br> <span class="text-slate-400 text-3xl">Precision Node Analytics</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        In a rapidly shifting global industrial economy, intuition is a liability. World Grexpo Foundation's Market Intelligence service provides our nodes with <strong>Real-Time Data Visualization</strong> and comprehensive transition reports. We decode complex market signals into absolute industrial strategies.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-8 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                            <div class="w-12 h-12 bg-white border border-slate-200 flex items-center justify-center rounded-sm mb-6 group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-500">
                                <i class="fa-solid fa-microchip text-slate-950 text-xl group-hover:scale-110"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase text-slate-950 tracking-widest group-hover:text-white transition-colors">AI-Powered Industrial Analytics</span>
                        </div>
                        <div class="p-8 bg-slate-950 border border-slate-800 rounded-sm group hover:bg-brand-primary transition-all duration-500">
                            <div class="w-12 h-12 bg-white/5 border border-white/10 flex items-center justify-center rounded-sm mb-6 group-hover:bg-white transition-all duration-500">
                                <i class="fa-solid fa-file-invoice-dollar text-brand-accent text-xl group-hover:scale-110"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase text-white tracking-widest transition-colors">Carbon Price Volatility Tools</span>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1551288049-bb848a55a178?q=80&w=2070&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Data Intelligence">
                    </div>
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
            </div>

            <!-- SECTION 2: INTELLIGENCE PORTFOLIO -->
            <div class="space-y-20">
                <div class="text-left max-w-3xl">
                    <h3 class="text-5xl font-black uppercase italic text-slate-950 mb-8 tracking-tighter">Analytics Portfolio</h3>
                    <p class="text-slate-500 text-xl font-light italic">Decoding the industrial future through historical and predictive transition modeling.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    @php
                        $portfolio = [
                            ['t' => 'Export Market Audits', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Detailed analysis of global industrial demand for specific nodes.'],
                            ['t' => 'Supply Chain Nodes', 'img' => 'https://images.unsplash.com/photo-1586528116311-ad86df6254c1?q=80&w=2070&auto=format&fit=crop', 'd' => 'Identifying bottlenecks and cost-saving lanes in global logistics.'],
                            ['t' => 'Industrial behavior', 'img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 'd' => 'Psychographic mapping of your target industrial segments.']
                        ];
                    @endphp
                    @foreach($portfolio as $port)
                    <div class="group relative h-[550px] overflow-hidden rounded-sm border border-slate-900">
                        <img src="{{ $port['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Intelligence Node">
                        <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>
                        <div class="absolute inset-0 p-12 flex flex-col justify-end">
                            <h4 class="text-3xl font-black text-brand-accent mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $port['t'] }}</h4>
                            <p class="text-slate-400 text-[10px] font-bold leading-relaxed uppercase tracking-widest group-hover:text-white transition-colors">{{ $port['d'] }}</p>
                        </div>
                        <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: TECH STACK -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden text-center space-y-20">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                <h3 class="text-5xl font-black uppercase italic tracking-tighter text-white relative z-10">The Intelligence <span class="text-brand-accent">Engine</span></h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
                    @foreach([
                        ['icon' => 'database', 'title' => 'Big Data Archiving'],
                        ['icon' => 'brain', 'title' => 'Predictive AI'],
                        ['icon' => 'satellite', 'title' => 'Real-Time Feeds'],
                        ['icon' => 'magnifying-glass-chart', 'title' => 'Macro Audits']
                    ] as $tech)
                    <div class="p-10 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group">
                        <div class="w-16 h-16 bg-white/5 border border-white/10 mx-auto rounded-sm flex items-center justify-center text-brand-accent group-hover:bg-white group-hover:text-brand-primary transition-all duration-700 mb-8">
                            <i class="fa-solid fa-{{ $tech['icon'] }} text-2xl group-hover:scale-110"></i>
                        </div>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-widest group-hover:text-slate-950 transition-colors">{{ $tech['title'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="max-w-4xl mx-auto pt-20 border-t border-white/10 relative z-10">
                    <p class="text-3xl text-slate-300 italic font-light leading-tight tracking-tight">"Architecting industrial nodes that study global trends <span class="text-brand-accent not-italic">before</span> they become headlines."</p>
                </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 p-24 rounded-sm text-left overflow-hidden border-l-[20px] border-brand-accent group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter italic leading-none">Architect <br> <span class="text-brand-accent">Clarity</span></h3>
                    <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-light italic opacity-80 mb-16">
                        The global market does not wait for node clarity. Get the data intelligence you need to make confident, absolute industrial transition moves today.
                    </p>
                    <a href="{{ route('forms.show', ['slug' => 'join-us']) }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Request Market Node Audit <i class="fa-solid fa-arrow-right-long text-brand-accent group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
