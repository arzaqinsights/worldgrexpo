@extends('layouts.website')

@section('title', 'Global Awareness & Thought Leadership - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1540575861501-7ad05823c28b?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Global Authority</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Global <span class="text-brand-accent not-italic">Awareness</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Bridging industrial nodes with the absolute international stage of sustainability excellence.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE VISION -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Global Leadership">
                    </div>
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Command the <span class="text-brand-primary not-italic">Spotlight</span> <br> <span class="text-slate-400 text-3xl">International Thought Leadership</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        Institutional visibility is the absolute first step toward universal leadership. World Grexpo Foundation provides exclusive, high-impact platforms for industrial units to transition into <strong>Global Thought Leaders</strong>. We curate moments of pure institutional authority.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-8 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                            <p class="text-3xl font-black text-slate-950 group-hover:text-brand-accent transition-colors italic tracking-tighter">50+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500 tracking-widest group-hover:text-white transition-colors">Annual Global Summits</p>
                        </div>
                        <div class="p-8 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                            <p class="text-3xl font-black text-slate-950 group-hover:text-brand-accent transition-colors italic tracking-tighter">10k+</p>
                            <p class="text-[10px] font-black uppercase text-slate-500 tracking-widest group-hover:text-white transition-colors">Global Industrial Nodes</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: ENGAGEMENT MODULES -->
            <div class="space-y-20 text-center">
                <h3 class="text-5xl font-black uppercase italic text-slate-950 tracking-tighter">Platforms for Absolute Ambition</h3>
                <div class="grid md:grid-cols-3 gap-2">
                    @foreach([
                        ['t' => 'Elite Keynotes', 'd' => 'Represent your industrial node as an absolute guest speaker alongside global CEOs.', 'icon' => 'chalkboard-user'],
                        ['t' => 'Panel Dialogues', 'd' => 'Engage in decisive institutional dialogues with global policy nodes.', 'icon' => 'people-line'],
                        ['t' => 'Global Expos', 'd' => 'Showcase industrial innovations at world-class sustainability trade nodes.', 'icon' => 'award']
                    ] as $mod)
                    <div class="p-16 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-700">
                        <div class="w-16 h-16 bg-white border border-slate-200 flex items-center justify-center rounded-sm mb-10 mx-auto group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-700">
                             <i class="fa-solid fa-{{ $mod['icon'] }} text-slate-950 text-2xl group-hover:scale-110"></i>
                        </div>
                        <h4 class="text-2xl font-black mb-6 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $mod['t'] }}</h4>
                        <p class="text-slate-500 text-xs font-bold leading-relaxed uppercase tracking-widest group-hover:text-slate-400 transition-colors">{{ $mod['d'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: RECENT IMPACT -->
             <div class="space-y-20">
                <div class="flex flex-col md:flex-row justify-between items-end gap-12">
                    <div class="text-left max-w-2xl">
                        <h3 class="text-5xl font-black uppercase italic text-slate-950 leading-none tracking-tighter mb-8">Global Footprint <br> <span class="text-brand-primary not-italic">In Action Nodes</span></h3>
                        <p class="text-slate-500 text-xl font-light italic">Moments of collaboration and leadership across our international summit coordinates.</p>
                    </div>
                    <div class="w-px h-20 bg-slate-200 hidden md:block"></div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
                    @foreach([
                        ['img' => 'https://images.unsplash.com/photo-1591115765373-520b7a21769b?q=80&w=2070&auto=format&fit=crop', 'loc' => 'Dubai Node'],
                        ['img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2069&auto=format&fit=crop', 'loc' => 'New Delhi Node'],
                        ['img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=2012&auto=format&fit=crop', 'loc' => 'Singapore Node'],
                        ['img' => 'https://images.unsplash.com/photo-1527529482837-4698179dc6ce?q=80&w=2070&auto=format&fit=crop', 'loc' => 'London Node']
                    ] as $img)
                    <div class="h-80 relative rounded-sm overflow-hidden group border border-slate-900">
                        <img src="{{ $img['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Summit Node">
                        <div class="absolute inset-0 bg-slate-950/60 group-hover:bg-brand-primary/40 transition-all duration-700"></div>
                        <div class="absolute bottom-6 left-6">
                            <span class="px-6 py-3 bg-slate-950 border border-white/10 text-[10px] font-black uppercase tracking-[0.3em] text-brand-accent group-hover:bg-brand-accent group-hover:text-slate-950 transition-all duration-700 italic shadow-2xl">{{ $img['loc'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 p-24 rounded-sm text-left overflow-hidden border-l-[20px] border-brand-accent group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter italic leading-none">Global <br> <span class="text-brand-accent">Arena Node</span></h3>
                    <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-light italic opacity-80 mb-16">
                        Your industrial node is ready for the world. Let World Grexpo Foundation architect your institutional authority at the next prestigious summit node.
                    </p>
                    <a href="{{ route('join.index') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Claim Your Speaker Node <i class="fa-solid fa-arrow-right-long text-brand-accent group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
