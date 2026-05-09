@extends('layouts.website')

@section('title', 'Funding Initiative for Industries (2026) - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Financial Growth Node 2026</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Funding <span class="text-brand-accent not-italic">Initiative</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                Empowering industrial growth through structured financial access nodes and seamless institutional banking facilitation.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: OVERVIEW -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <div class="flex items-center gap-6 mb-2">
                        <span class="w-16 h-px bg-brand-primary"></span>
                        <span class="text-brand-primary font-black uppercase tracking-[0.4em] text-[10px] italic">Institutional Overview</span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Bridging the <br> <span class="text-brand-primary not-italic">Capital Gap</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        World Grexpo Foundation introduces a dedicated <strong>Funding Facilitation Node</strong> aimed at strengthening global industrial units by enabling seamless access to transition capital through elite financial institutions.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                        @foreach(['Transition Capital', 'Expansion Nodes', 'Banking Liaison', 'Financial Inclusion'] as $item)
                        <div class="flex items-center gap-6 p-6 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                            <div class="w-10 h-10 bg-white border border-slate-200 flex items-center justify-center rounded-sm group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-500">
                                <i class="fa-solid fa-check text-slate-950 text-xs"></i>
                            </div>
                            <span class="text-[10px] font-black uppercase text-slate-950 tracking-widest group-hover:text-white transition-colors">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=2071&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100 h-[600px] object-cover" alt="Funding Node">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
            </div>

            <!-- SECTION 2: FUNDING OPTIONS -->
            <div class="grid md:grid-cols-3 gap-2">
                @foreach([
                    ['icon' => 'building-columns', 't' => 'Project Financing', 'd' => 'Comprehensive institutional funding for new industrial projects and infrastructure nodes.'],
                    ['icon' => 'gears', 't' => 'Machinery Finance', 'd' => 'Upgrade transition capacity with customized institutional equipment and machinery loan nodes.'],
                    ['icon' => 'receipt', 't' => 'Invoice Discounting', 'd' => 'Improve operational cash flow by unlocking capital tied up in institutional invoice nodes.']
                ] as $step)
                <div class="group relative bg-white p-16 rounded-sm border border-slate-100 hover:bg-slate-950 transition-all duration-700">
                    <div class="w-20 h-20 bg-slate-50 border border-slate-200 rounded-sm flex items-center justify-center text-slate-950 mb-10 group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-700">
                        <i class="fa-solid fa-{{ $step['icon'] }} text-3xl group-hover:scale-110"></i>
                    </div>
                    <h4 class="text-3xl font-black text-slate-950 mb-6 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $step['t'] }}</h4>
                    <p class="text-slate-500 text-xs font-bold leading-relaxed uppercase tracking-widest group-hover:text-slate-400 transition-colors">{{ $step['d'] }}</p>
                </div>
                @endforeach
            </div>

            <!-- SECTION 3: FUNDING RANGE -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-24">
                    <div class="lg:w-1/2 space-y-10 text-left">
                        <h3 class="text-5xl md:text-7xl font-black text-white uppercase italic tracking-tighter leading-none">Node <span class="text-brand-accent">Liquidity</span> Range</h3>
                        <div class="p-10 bg-white/5 border border-white/10 rounded-sm inline-block">
                            <p class="text-brand-accent font-black text-6xl md:text-8xl uppercase tracking-tighter italic">
                                ₹5L <span class="text-white text-3xl lowercase not-italic opacity-30">to</span> ₹5Cr
                            </p>
                        </div>
                        <p class="text-slate-500 text-xl font-light italic">Flexible transition funding nodes tailored for elite startups and established units.</p>
                    </div>
                    <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                        @foreach([
                            ['icon' => 'bolt', 'title' => 'Priority Node', 'desc' => 'Priority Processing'],
                            ['icon' => 'file-lines', 'title' => 'Structural', 'desc' => 'Documentation Support'],
                            ['icon' => 'percent', 'title' => 'Best Rates', 'desc' => 'Lender Node Match'],
                            ['icon' => 'shield-check', 'title' => 'Institutional', 'desc' => 'Scheme Advisory']
                        ] as $dev)
                        <div class="p-10 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group">
                            <i class="fa-solid fa-{{ $dev['icon'] }} text-3xl mb-8 text-brand-accent group-hover:text-slate-950 transition-colors"></i>
                            <h4 class="text-[10px] font-black uppercase text-white mb-2 tracking-[0.2em] group-hover:text-slate-950 transition-colors">{{ $dev['title'] }}</h4>
                            <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest group-hover:text-slate-900 transition-colors">{{ $dev['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SECTION 4: PROPOSAL STRUCTURE -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 order-2 lg:order-1 grid gap-2">
                    @foreach([
                        ['n' => '01', 't' => 'Executive Node', 'd' => 'A concise institutional overview of business transition goals.'],
                        ['n' => '02', 't' => 'Transition Metrics', 'd' => 'Industrial trends, competitive matrix, and 5-year cash projections.'],
                        ['n' => '03', 't' => 'Institutional Compliance', 'd' => 'Global identifiers, identifiers, and audited institutional statements.']
                    ] as $struct)
                    <div class="bg-slate-50 p-10 rounded-sm border border-slate-100 flex gap-10 items-center group hover:bg-slate-950 transition-all duration-500">
                        <span class="text-6xl font-black text-slate-200 italic group-hover:text-brand-accent transition-colors leading-none">{{ $struct['n'] }}</span>
                        <div>
                            <h5 class="font-black text-slate-950 uppercase text-xl mb-2 tracking-tighter group-hover:text-white transition-colors italic">{{ $struct['t'] }}</h5>
                            <p class="text-[10px] text-slate-500 font-bold uppercase tracking-widest group-hover:text-slate-400 transition-colors leading-relaxed">{{ $struct['d'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="w-full lg:w-1/2 order-1 lg:order-2 space-y-12">
                    <div class="flex items-center gap-6 mb-2">
                        <span class="w-16 h-px bg-brand-primary"></span>
                        <span class="text-brand-primary font-black uppercase tracking-[0.4em] text-[10px] italic">Institutional Role</span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Your Absolute <br> <span class="text-brand-primary not-italic">Facilitator Node</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        World Grexpo Foundation acts as your strategic financial mentor, ensuring your industrial node is "Transition Ready" before reaching the lender node.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Pre-screening', 'Lender Node Connect', 'Transition Camps', 'Mentorship'] as $tag)
                            <span class="px-6 py-3 bg-slate-950 text-white rounded-sm text-[10px] font-black uppercase tracking-[0.3em] italic border border-white/10">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- FINAL CALL TO ACTION -->
            <div class="text-center py-32 border-t border-slate-100">
                <h3 class="text-6xl md:text-9xl font-black text-slate-950 uppercase italic mb-12 tracking-tighter leading-none">Architect Your <br> <span class="text-brand-accent not-italic">Capital Node</span></h3>
                <p class="text-slate-500 max-w-4xl mx-auto text-2xl font-light mb-16 leading-relaxed">
                    Unlock your industrial node potential with World Grexpo Foundation's Funding Support mandate. Acquire transition capital today.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto px-16 py-8 bg-slate-950 text-white font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all shadow-4xl italic group">
                        Apply for Funding Node <i class="fa-solid fa-arrow-right group-hover:translate-x-4 transition-transform ml-4"></i>
                    </a>
                    <a href="{{ route('register') }}" class="w-full sm:w-auto px-16 py-8 bg-white border border-slate-200 text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-slate-50 transition-all italic">
                        Acquire Membership
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
