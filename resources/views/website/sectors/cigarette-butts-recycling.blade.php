@extends('layouts.website')

@section('title', 'Cigarette Butts Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/circular-economy.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-indigo-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-indigo-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-indigo-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Fiber Recovery Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Cigarette Butts <br>
                <span class="text-indigo-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-indigo-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Tackling the world's most littered waste through innovative fiber recovery.
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
                        <span class="subtitle">Microplastic Contamination Control</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Niche Impact <br><span class="text-indigo-600">Industry.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Cigarette butt recycling</strong> is the process of converting discarded filters and tobacco waste into industrial stuffing, paper pulp, and plastic alternatives.
                        </p>
                        <p>
                            Since filters are made of <strong>cellulose acetate plastic</strong>, they are non-biodegradable and contribute significantly to microplastic pollution. Structured recycling prevents environmental contamination.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-indigo-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/circular-economy.jpg') }}" alt="Cigarette Waste Recycling"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-indigo-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Pollution Abatement
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Impact -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-indigo-400 text-[10px] font-black uppercase tracking-[0.4em]">Environmental Crisis</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Global Impact</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="space-y-4 border-b border-white/10 pb-10">
                                <span class="text-7xl font-black text-white tracking-tighter italic block transition-transform group-hover:translate-x-4 duration-500">4.5 Trillion</span>
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Butts discarded annually worldwide</span>
                            </div>
                            <div class="space-y-4">
                                <span class="text-7xl font-black text-indigo-500 tracking-tighter italic block transition-transform group-hover:translate-x-4 duration-500">12%</span>
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Of aquatic litter consists of filter waste</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 gap-px bg-white/10 border border-white/10">
                            @foreach(['USA', 'UK', 'Canada', 'Australia'] as $region)
                                <span class="p-4 bg-slate-950 text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-indigo-600 hover:text-slate-950 transition-all cursor-default">{{ $region }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-indigo-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-indigo-600 text-[10px] font-black uppercase tracking-[0.4em]">Emerging Ecosystem</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                            <div class="p-12 bg-white space-y-4">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Annual Volume</p>
                                <p class="text-5xl font-black text-indigo-600 tracking-tighter italic">100B+</p>
                            </div>
                            <div class="p-12 bg-white space-y-4">
                                <p class="text-[9px] font-black text-slate-400 uppercase tracking-[0.3em]">Sector CAGR</p>
                                <p class="text-5xl font-black text-indigo-600 tracking-tighter italic">20%</p>
                            </div>
                        </div>

                        <div class="space-y-px bg-slate-200 border border-slate-200">
                            <div class="flex items-center justify-between p-10 bg-white group/item">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em] group-hover/item:text-indigo-600 transition-colors">Organized Startups</span>
                                <span class="text-2xl font-black text-slate-950 tracking-tight uppercase italic transition-colors group-hover/item:text-slate-950">10–20 Pioneers</span>
                            </div>
                            <div class="p-12 bg-indigo-50 border-l-8 border-indigo-600 shadow-sm">
                                <p class="text-[9px] font-black text-indigo-600 uppercase tracking-[0.4em] mb-4 italic">Geographic Concentration</p>
                                <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">NCR & Major Metros</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">100+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">Global Initiatives</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">Nascent</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">Sector Stage</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">High</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">ESG Impact</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-indigo-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">Top 1</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.3em]">Litter Rank</p>
                </div>
            </div>

            <!-- Opportunities Grid -->
            <div class="space-y-16">
                <div class="text-center space-y-4">
                    <span class="text-indigo-600 text-[10px] font-black uppercase tracking-[0.4em]">Venture Perspectives</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Startup Opportunities</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    @php
                        $items = [
                            ['icon' => 'trash-can-arrow-up', 'title' => 'Smart Disposal Bins', 'sub' => 'Collection Systems'],
                            ['icon' => 'recycle', 'title' => 'Filter Fiber Recycling', 'sub' => 'Resource Recovery'],
                            ['icon' => 'bolt-lightning', 'title' => 'Waste-to-Energy Apps', 'sub' => 'Digital Solutions'],
                            ['icon' => 'handshake-angle', 'title' => 'ESG / CSR Programs', 'sub' => 'Corporate Services'],
                            ['icon' => 'building-circle-check', 'title' => 'Municipal Contracts', 'sub' => 'Public Sector'],
                            ['icon' => 'hotel', 'title' => 'Hospitality Partnerships', 'sub' => 'Service Networks'],
                        ];
                    @endphp
                    @foreach($items as $i)
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-indigo-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-20 h-20 mx-auto mb-10 bg-slate-50 border border-slate-100 flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm duration-500">
                                <i class="fa-solid fa-{{ $i['icon'] }} text-3xl"></i>
                            </div>
                            <h4 class="text-xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter mb-4 italic leading-tight transition-colors">{{ $i['title'] }}</h4>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] leading-tight transition-colors">{{ $i['sub'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Environmental Urgency -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-16 lg:p-24 bg-white space-y-12">
                    <div class="section-heading text-left">
                        <span class="subtitle">Toxicity Containment</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Environmental <br><span class="text-indigo-600">Urgency.</span></h2>
                        <div class="accent-line bg-indigo-600"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-8 border-slate-100 pl-10 uppercase tracking-tighter">
                        Discarded filters leach toxic chemicals and microplastics into soil and water systems. Structuring this waste stream is a critical priority for smart cities.
                    </p>
                    <div class="flex items-center gap-10 pt-12">
                         <div class="w-24 h-1 bg-indigo-600"></div>
                         <p class="text-[12px] uppercase font-black tracking-[0.4em] text-slate-900">Combat Environmental Pollution</p>
                    </div>
                </div>
                <div class="relative bg-slate-950 p-16 lg:p-24 text-white overflow-hidden group">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(79,102,241,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="w-24 h-24 border border-white/10 flex items-center justify-center text-indigo-400 group-hover:bg-indigo-600 group-hover:text-slate-950 transition-all duration-500">
                            <i class="fa-solid fa-triangle-exclamation text-5xl"></i>
                        </div>
                        <h4 class="text-6xl font-black uppercase italic tracking-tighter text-indigo-600 leading-tight">Critical <br><span class="text-white">Waste Segment.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-indigo-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Structured collection and molecular recovery are no longer optional for sustainable urban infrastructure.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(79,102,241,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Big <br><span class="text-indigo-600">Solutions.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-indigo-600 pl-10 md:text-center mx-auto">
                        Cigarette butt recycling is emerging as a high-impact segment. Explore technology partnerships and waste collection infrastructure projects.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-indigo-600/30 hover:!bg-indigo-600">
                            Explore Recycling Projects 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
