@extends('layouts.website')

@section('title', 'Global Awareness & Thought Leadership - World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay"
            style="background-image: url('https://images.unsplash.com/photo-1540575861501-7ad05823c28b?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Global Authority</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black uppercase mb-12 tracking-tighter leading-[0.85]">
                Global <br> <span class="text-brand-primary">Awareness.</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
                Bridging industrial nodes with the absolute international stage of sustainability excellence and leadership.
            </p>
        </div>
    </section>

    <!-- Main Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">
            
            <!-- Section 1: The Vision -->
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="relative group">
                    <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
                        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070&auto=format&fit=crop" 
                             class="grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105 opacity-80 group-hover:opacity-100 h-[600px] object-cover" 
                             alt="Global Leadership">
                    </div>
                    <!-- Sharp Industrial Decorator -->
                    <div class="absolute -top-8 -left-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
                </div>
                
                <div class="space-y-12 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Thought Leadership</span>
                        <h2>Command the <br> <span class="text-brand-primary">Spotlight.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <p class="text-slate-500 text-xl leading-relaxed font-medium">
                        Institutional visibility is the absolute first step toward universal leadership. World Grexpo Foundation provides exclusive, high-impact platforms for industrial units to transition into <strong>Global Thought Leaders</strong>. We curate moments of pure institutional authority.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-xl">
                        <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700">
                            <p class="text-4xl font-black text-brand-primary group-hover:text-white transition-colors tracking-tighter tabular-nums leading-none mb-4">50+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500 tracking-[0.2em] group-hover:text-slate-400 transition-colors">Annual Global Summits</p>
                        </div>
                        <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700">
                            <p class="text-4xl font-black text-brand-primary group-hover:text-white transition-colors tracking-tighter tabular-nums leading-none mb-4">10k+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500 tracking-[0.2em] group-hover:text-slate-400 transition-colors">Industrial Nodes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Engagement Modules -->
            <div class="space-y-24 text-center">
                <div class="max-w-4xl mx-auto space-y-8">
                    <div class="section-heading text-center">
                        <span class="subtitle">Global Reach</span>
                        <h2>Platforms for <br> <span class="text-brand-primary">Absolute Ambition.</span></h2>
                        <div class="accent-line mx-auto"></div>
                    </div>
                </div>
                
                <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    @foreach([
                        ['t' => 'Elite Keynotes', 'd' => 'Represent your industrial node as an absolute guest speaker alongside global CEOs.', 'icon' => 'chalkboard-user'],
                        ['t' => 'Panel Dialogues', 'd' => 'Engage in decisive institutional dialogues with global policy nodes.', 'icon' => 'people-line'],
                        ['t' => 'Global Expos', 'd' => 'Showcase industrial innovations at world-class sustainability trade nodes.', 'icon' => 'award']
                    ] as $mod)
                    <div class="p-16 bg-white hover:bg-slate-950 transition-all duration-700 group">
                        <div class="w-20 h-20 bg-slate-50 border border-slate-100 flex items-center justify-center mb-12 mx-auto group-hover:bg-brand-primary group-hover:border-brand-primary transition-all">
                             <i class="fa-solid fa-{{ $mod['icon'] }} text-brand-primary text-3xl group-hover:text-white transition-all"></i>
                        </div>
                        <h4 class="text-3xl font-black text-slate-950 mb-8 uppercase tracking-tighter group-hover:text-white transition-colors leading-none">{{ $mod['t'] }}</h4>
                        <p class="text-slate-500 text-[10px] font-black leading-relaxed uppercase tracking-[0.3em] group-hover:text-slate-400 transition-colors">{{ $mod['d'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Section 3: Recent Impact -->
             <div class="space-y-24">
                <div class="flex flex-col md:flex-row justify-between items-end gap-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Strategic Footprint</span>
                        <h2>Global Footprint <br> <span class="text-brand-primary">In Action Nodes.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium max-w-xl leading-relaxed italic">
                        Moments of collaboration and leadership across our international summit coordinates.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    @foreach([
                        ['img' => 'https://images.unsplash.com/photo-1591115765373-520b7a21769b?q=80&w=2070&auto=format&fit=crop', 'loc' => 'Dubai Node'],
                        ['img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop', 'loc' => 'New Delhi Node'],
                        ['img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2012&auto=format&fit=crop', 'loc' => 'Singapore Node'],
                        ['img' => 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?q=80&w=2070&auto=format&fit=crop', 'loc' => 'London Node']
                    ] as $img)
                    <div class="h-96 relative overflow-hidden group bg-slate-900">
                        <img src="{{ $img['img'] }}" 
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-60 group-hover:opacity-100" 
                             alt="Summit Node">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute bottom-10 left-10">
                            <span class="px-8 py-3 bg-brand-primary text-brand-primary-dark text-[10px] font-black uppercase tracking-[0.3em] shadow-3xl">
                                {{ $img['loc'] }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div>

            <!-- Section 4: Call To Action -->
            <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                
                <div class="relative z-10 space-y-16 max-w-5xl">
                    <div class="space-y-8">
                        <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter leading-[0.85]">
                            Global <br> <span class="text-brand-primary">Arena Node.</span>
                        </h3>
                        <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium">
                            Your industrial node is ready for the world. Let World Grexpo Foundation architect your institutional authority at the next prestigious summit node.
                        </p>
                    </div>
                    
                    <a href="{{ route('join.index') }}" class="btn-sharp px-20 group">
                        Claim Your Speaker Node 
                        <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>

                <!-- Industrial Accent Line -->
                <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
            </div>

        </div>
    </section>

@endsection

@endsection
