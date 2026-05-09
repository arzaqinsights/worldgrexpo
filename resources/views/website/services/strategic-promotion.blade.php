@extends('layouts.website')

@section('title', 'Strategic Promotion Services - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Market Dominance</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Strategic <span class="text-brand-accent not-italic">Promotion</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Architecting global brand visibility through proprietary industrial marketing frameworks.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: OVERVIEW -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Engineering <span class="text-brand-primary not-italic">Growth</span> <br> <span class="text-slate-400 text-3xl">Beyond Conventional Marketing</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        In the global industrial landscape, growth is engineered, not accidental. World Grexpo Foundation's <strong>Strategic Promotion</strong> framework is architected to break through global noise, combining industrial intelligence with absolute digital precision.
                    </p>
                    <div class="space-y-6">
                        @foreach(['Proprietary Brand Positioning', 'Multi-Node Global Campaigns', 'Industrial Lead Generation'] as $feature)
                        <div class="flex items-center gap-6 group">
                            <div class="w-10 h-10 bg-slate-50 border border-slate-100 flex items-center justify-center rounded-sm group-hover:bg-slate-950 transition-all duration-500">
                                <i class="fa-solid fa-check text-brand-accent text-xs"></i>
                            </div>
                            <span class="text-xs font-black uppercase tracking-widest text-slate-950">{{ $feature }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2026&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Industrial Strategy">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
            </div>

            <!-- SECTION 2: THE PROCESS -->
            <div class="grid md:grid-cols-3 gap-2">
                @foreach([
                    ['img' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop', 't' => 'Analyze', 'd' => 'Deep dive into global market gaps and industrial competitor nodes.'],
                    ['img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop', 't' => 'Strategize', 'd' => 'Architecting high-impact campaign roadmaps for global industrial export.'],
                    ['img' => 'https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop', 't' => 'Execute', 'd' => 'Launching targeted promotions across premium global industrial platforms.']
                ] as $step)
                <div class="group relative overflow-hidden rounded-sm h-[500px] border border-slate-900">
                    <img src="{{ $step['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Industrial Node">
                    <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>
                    <div class="absolute inset-0 p-12 flex flex-col justify-end">
                        <h4 class="text-4xl font-black text-brand-accent mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $step['t'] }}</h4>
                        <p class="text-slate-400 text-xs font-bold uppercase tracking-widest leading-relaxed group-hover:text-white transition-colors">{{ $step['d'] }}</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                </div>
                @endforeach
            </div>

            <!-- SECTION 3: KEY DELIVERABLES -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                <div class="relative z-10 space-y-20">
                    <div class="text-left max-w-3xl">
                        <h3 class="text-5xl md:text-7xl font-black text-white uppercase italic tracking-tighter leading-none mb-8">Node <span class="text-brand-accent">Deliverables</span></h3>
                        <p class="text-slate-500 text-xl font-light">The absolute structural output of our Strategic Promotion partnership.</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
                        @foreach([
                            ['icon' => 'globe', 'title' => 'Global Exposure', 'desc' => 'Visibility across the absolute institutional network.'],
                            ['icon' => 'bullhorn', 'title' => 'Industrial PR', 'desc' => 'High-authority press releases and industrial media kits.'],
                            ['icon' => 'chart-simple', 'title' => 'Node Tracking', 'desc' => 'Comprehensive monthly industrial performance reports.'],
                            ['icon' => 'user-plus', 'title' => 'VIP Access', 'desc' => 'Exclusive entry to elite global industrial circles.']
                        ] as $dev)
                        <div class="p-10 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group">
                            <div class="w-12 h-12 bg-white/5 border border-white/10 flex items-center justify-center rounded-sm mb-8 group-hover:bg-white group-hover:rotate-12 transition-all duration-700">
                                <i class="fa-solid fa-{{ $dev['icon'] }} text-brand-accent group-hover:text-brand-primary transition-colors"></i>
                            </div>
                            <h4 class="text-xl font-black text-white uppercase tracking-tighter italic mb-4 group-hover:text-slate-950 transition-colors">{{ $dev['title'] }}</h4>
                            <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-900 transition-colors">{{ $dev['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 4: FINAL MESSAGE -->
            <div class="text-center py-32 border-t border-slate-100">
                <h3 class="text-5xl md:text-8xl font-black text-slate-950 uppercase italic tracking-tighter leading-none mb-10">Architect Your <br> <span class="text-brand-accent not-italic">Presence</span></h3>
                <p class="text-slate-500 max-w-4xl mx-auto text-xl font-light mb-16 leading-relaxed">
                    Uplift your industrial node. Leverage World Grexpo Foundation's authority to architect a global brand. Our node is ready to design your next breakthrough strategy.
                </p>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-slate-950 text-white font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all shadow-2xl group italic">
                    Acquire Strategic Mandate
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-4 transition-transform"></i>
                </a>
            </div>

        </div>
    </section>

@endsection
