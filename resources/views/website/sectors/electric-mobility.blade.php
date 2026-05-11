@extends('layouts.website')

@section('title', 'Electric Mobility')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/electric-mobility.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-sky-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-sky-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-sky-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Sustainable Transport Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Electric <br>
                <span class="text-sky-600">Mobility.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-sky-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Driving the Future of Sustainable Transport: Reducing emissions through electrification.
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
                        <span class="subtitle">Transport Decarbonization Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">E-Mobility <br><span class="text-sky-600">Transformation.</span></h2>
                        <div class="accent-line bg-sky-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Electric Mobility (E-Mobility)</strong> refers to the use of electrically powered transportation systems designed to reduce dependence on fossil fuels.
                        </p>
                        <p>
                            It includes <strong>electric vehicles, charging infrastructure, battery technologies, and smart mobility systems</strong>, creating a cleaner and more efficient urban transport ecosystem.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-3xl">
                    @php
                        $segments = [
                            ['icon' => 'car-side', 'label' => 'Electric Cars'],
                            ['icon' => 'bus', 'label' => 'Electric Buses'],
                            ['icon' => 'motorcycle', 'label' => '2 & 3 Wheelers'],
                            ['icon' => 'truck', 'label' => 'Commercial EV'],
                        ];
                    @endphp
                    @foreach($segments as $s)
                        <div class="p-16 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-{{ $s['icon'] }} text-5xl mb-8 text-slate-200 group-hover:text-sky-600 transition-all duration-500"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors">{{ $s['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Ecosystem Elements -->
            <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-12 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-sky-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 group-hover:bg-sky-600 group-hover:text-slate-950 transition-all duration-500">
                        <i class="fa-solid fa-charging-station text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-black uppercase italic tracking-tighter">Infrastructure</h4>
                    <p class="text-[12px] font-black uppercase text-slate-500 tracking-[0.1em] leading-relaxed group-hover:text-slate-300 transition-colors">Development of public and private EV charging networks.</p>
                </div>
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-12 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-sky-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 group-hover:bg-sky-600 group-hover:text-slate-950 transition-all duration-500">
                        <i class="fa-solid fa-arrows-rotate text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-black uppercase italic tracking-tighter">Battery Swapping</h4>
                    <p class="text-[12px] font-black uppercase text-slate-500 tracking-[0.1em] leading-relaxed group-hover:text-slate-300 transition-colors">Next-gen energy replacement systems for high-utilization fleets.</p>
                </div>
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-12 group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-sky-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                    <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center text-sky-400 group-hover:bg-sky-600 group-hover:text-slate-950 transition-all duration-500">
                        <i class="fa-solid fa-network-wired text-2xl"></i>
                    </div>
                    <h4 class="text-2xl font-black uppercase italic tracking-tighter">Smart Platforms</h4>
                    <p class="text-[12px] font-black uppercase text-slate-500 tracking-[0.1em] leading-relaxed group-hover:text-slate-300 transition-colors">Integrated digital ecosystems for connected mobility.</p>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-sky-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Opportunity</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Size (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$600B+</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2035)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$1.5T+</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                @foreach(['Rising Fuel Costs', 'EV Incentives', 'Battery Cost Reduction', 'Climate Regulations'] as $driver)
                                    <span class="px-8 py-6 bg-slate-950 text-[9px] font-black text-slate-400 uppercase tracking-[0.2em] text-center hover:bg-sky-600 hover:text-slate-950 transition-colors cursor-default">{{ $driver }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-sky-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-sky-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">₹1L Cr</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-sky-600 tracking-tighter italic">25%</span>
                            </div>
                            <div class="p-12 bg-sky-50 border-l-8 border-sky-600 shadow-sm text-right">
                                <p class="text-[9px] font-black text-sky-600 uppercase tracking-[0.4em] mb-4">India Forecast (2031)</p>
                                <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">₹5 Lakh Crore+</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Segments Detailed -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-sky-600 text-[10px] font-black uppercase tracking-[0.4em]">Vertical Specialization</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Key Industry Segments</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    @php
                        $ksegments = [
                            ['icon' => 'car-side', 'title' => 'Passenger Vehicles', 'desc' => 'Personal & commercial car transport.'],
                            ['icon' => 'bus', 'title' => 'Public Transport', 'desc' => 'Buses, metro feeders & fleet mobility.'],
                            ['icon' => 'truck', 'title' => 'Commercial EV', 'desc' => 'Delivery vans & logistics trucks.'],
                            ['icon' => 'charging-station', 'title' => 'Charging Infrastructure', 'desc' => 'Public & private network dev.'],
                            ['icon' => 'battery-full', 'title' => 'Battery & Storage', 'desc' => 'Advanced cell & energy storage systems.'],
                            ['icon' => 'rocket', 'title' => 'Next-Gen Mobility', 'desc' => 'V2G, autonomous & connected systems.'],
                        ];
                    @endphp
                    @foreach($ksegments as $ks)
                        <div class="p-16 bg-white space-y-8 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center text-sky-600 group-hover:bg-sky-600 group-hover:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $ks['icon'] }} text-2xl"></i>
                            </div>
                            <h4 class="text-2xl font-black text-slate-950 group-hover:text-white uppercase tracking-tighter italic transition-colors">{{ $ks['title'] }}</h4>
                            <p class="text-[12px] font-black uppercase text-slate-400 tracking-[0.1em] leading-relaxed group-hover:text-slate-300 transition-colors">{{ $ks['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Trends & Opportunities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-24 bg-white space-y-16">
                    <h3 class="text-5xl font-black uppercase text-slate-950 italic border-l-8 border-slate-950 pl-10 tracking-tighter">Emerging Trends</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-100 border border-slate-100">
                        @foreach([
                            ['icon' => 'bolt', 'label' => 'Ultra-Fast Charging'],
                            ['icon' => 'arrows-rotate', 'label' => 'Battery Swapping'],
                            ['icon' => 'atom', 'label' => 'Solid-State Battery'],
                            ['icon' => 'robot', 'label' => 'Autonomous EVs'],
                            ['icon' => 'plug-circle-bolt', 'label' => 'Vehicle-to-Grid (V2G)'],
                            ['icon' => 'network-wired', 'label' => 'Connected Ecosystems'],
                        ] as $trend)
                            <div class="p-12 bg-white group/item hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-1 h-full bg-sky-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <div class="w-16 h-16 mb-8 bg-slate-50 border border-slate-100 flex items-center justify-center text-sky-600 group-hover/item:bg-sky-600 group-hover/item:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-{{ $trend['icon'] }} text-2xl"></i>
                                </div>
                                <span class="text-[12px] font-black uppercase text-slate-900 group-hover/item:text-white tracking-[0.2em] leading-tight transition-colors">{{ $trend['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-50 space-y-16 border-l border-slate-200 shadow-2xl">
                    <h3 class="text-5xl font-black uppercase text-slate-950 italic border-l-8 border-sky-600 pl-10 tracking-tighter">Business Opportunities</h3>
                    <div class="space-y-12">
                        @foreach([
                            ['icon' => 'industry', 'label' => 'EV Manufacturing & Assembly'],
                            ['icon' => 'battery-full', 'label' => 'Battery Production & Recycling'],
                            ['icon' => 'charging-station', 'label' => 'Infrastructure Development'],
                            ['icon' => 'truck-fast', 'label' => 'Fleet Electrification Services'],
                            ['icon' => 'mobile-screen', 'label' => 'Mobility-as-a-Service Platforms'],
                            ['icon' => 'bolt', 'label' => 'Smart Grid & Energy Integration'],
                        ] as $opp)
                        <div class="flex items-center gap-10 group/opp">
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-sky-600 group-hover/opp:bg-sky-600 group-hover/opp:text-white transition-all duration-500">
                                <i class="fa-solid fa-{{ $opp['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-slate-950 transition-colors leading-tight italic">{{ $opp['label'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Future Vision -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-sky-600/10"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl h-[600px]">
                        <img src="{{ asset('images/sectors/electric-mobility.jpg') }}" alt="Electric Mobility Future"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(2,132,199,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-sky-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Evolution
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-sky-600">The Smart <br><span class="text-white">Transition.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-sky-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Electric mobility is evolving into a key pillar of sustainable urban planning and energy management.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10">
                             @foreach(['Personal Mobility', 'Public Transport', 'Logistics & Fleet', 'Smart Grids'] as $tag)
                                <div class="p-8 bg-slate-950 border border-white/5 flex items-center gap-8 group/item hover:bg-sky-600 transition-all duration-500">
                                    <i class="fa-solid fa-check-circle text-sky-600 text-2xl group-hover/item:text-slate-950 transition-colors"></i>
                                    <span class="text-[12px] font-black uppercase text-slate-300 group-hover/item:text-slate-950 tracking-[0.2em] transition-colors leading-tight">{{ $tag }}</span>
                                </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(2,132,199,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Mobility <br><span class="text-sky-600">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-sky-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Electric mobility is no longer a concept — it is a transformative force driving cleaner transportation and economic innovation across the globe.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-sky-600/30 hover:!bg-sky-600">
                            Join the EV Transition 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
