@extends('layouts.website')

@section('title', 'Sustainability Leadership Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(101,163,13,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-lime-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-lime-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-lime-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Ethical Governance Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Sustainable <br>
                <span class="text-lime-600">Leadership.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-lime-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Shaping the future of responsible business through strategic vision and environmental stewardship.
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
                        <span class="subtitle">Governance Value Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Strategic <br><span class="text-lime-600">Stewardship.</span></h2>
                        <div class="accent-line bg-lime-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Sustainability Leadership</strong> refers to the strategic vision taken by organizations to integrate environmental and social responsibility into core operations.
                        </p>
                        <p>
                            It empowers businesses to achieve growth while ensuring responsible resource management, social equity, and environmental stewardship for future industrial generations.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-lime-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/sustainability-leadership.jpg') }}" alt="Sustainability Leadership"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <div class="bg-lime-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Governance Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Impact Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-lime-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">90%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Fortune 500 ESG Rpt.</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-lime-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$30T</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global ESG Invest.</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-lime-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">#1</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Boardroom Priority</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-lime-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">ZERO</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Net Emission Target</p>
                </div>
            </div>

            <!-- Core Pillars -->
            <div class="p-24 bg-slate-950 text-white space-y-24 relative overflow-hidden group border border-white/5 shadow-3xl">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(101,163,13,0.1),transparent)] opacity-50"></div>
                <div class="relative z-10 text-center space-y-6">
                    <h3 class="text-6xl font-black uppercase tracking-tighter italic">Foundational <span class="text-lime-600">Pillars.</span></h3>
                    <p class="text-2xl text-slate-500 font-medium italic uppercase tracking-tighter">The ESG framework.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-white/10 border border-white/10 shadow-2xl relative z-10">
                    @php
                        $pillars = [
                            ['icon' => 'leaf', 'title' => 'Environmental', 'desc' => 'Carbon reduction, Renewables & Waste Management.'],
                            ['icon' => 'users', 'title' => 'Social', 'desc' => 'Wellbeing, Diversity & Ethical Labor Practices.'],
                            ['icon' => 'landmark', 'title' => 'Governance', 'desc' => 'Transparency, Ethics & Compliance Oversight.'],
                        ];
                    @endphp
                    @foreach($pillars as $p)
                        <div class="p-12 bg-slate-950 group/item hover:bg-lime-600 transition-all duration-500">
                            <i class="fa-solid fa-{{ $p['icon'] }} text-4xl text-lime-600 group-hover/item:text-slate-950 mb-8 transition-colors"></i>
                            <h4 class="text-xl font-black uppercase text-white group-hover/item:text-slate-950 mb-4 transition-colors italic">{{ $p['title'] }}</h4>
                            <p class="text-[10px] font-black uppercase text-slate-500 group-hover/item:text-slate-900 tracking-widest leading-relaxed transition-colors italic">{{ $p['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Opportunities & Innovation -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Innovation Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-lime-600">Trends.</span></h2>
                        <div class="accent-line bg-lime-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $trends = [
                                ['icon' => 'bullseye', 'title' => 'Net Zero & Carbon Neutrality'],
                                ['icon' => 'landmark', 'title' => 'ESG Integrated Governance'],
                                ['icon' => 'truck', 'title' => 'Green Supply Chain Transformation'],
                                ['icon' => 'coins', 'title' => 'Sustainable Finance & Green Bonds'],
                                ['icon' => 'recycle', 'title' => 'Circular Economy Business Models'],
                            ];
                        @endphp
                        @foreach($trends as $item)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-lime-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-lime-600 group-hover/opp:bg-lime-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(101,163,13,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-10">
                        <i class="fa-solid fa-shield-heart text-[8rem] text-lime-600/10 group-hover:text-lime-600 transition-all duration-700"></i>
                        <h4 class="text-5xl font-black uppercase text-white tracking-tighter italic leading-tight">Future Ready</h4>
                        <p class="text-2xl text-slate-400 font-medium italic max-w-sm mx-auto uppercase tracking-tighter leading-relaxed">
                            Sustainability is no longer a trend — it is the <span class="text-white font-black tracking-tight">foundation</span> of resilient business success.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(101,163,13,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Green <br><span class="text-lime-600">Standard.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-lime-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Organizations that lead in sustainability today will shape the markets, industries, and economies of tomorrow.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-lime-600/30 hover:!bg-lime-600">
                            Register for Leadership 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
