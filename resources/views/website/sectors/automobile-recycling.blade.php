@extends('layouts.website')

@section('title', 'Automobile Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/automobile-recycling.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">End-of-Life Asset Recovery</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Automobile <br>
                <span class="text-blue-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Dismantling, Recovering, and Reprocessing End-of-Life Vehicles (ELVs).
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
                        <span class="subtitle">Circular Asset Management</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Circular Automotive <br><span class="text-blue-600">Economy.</span></h2>
                        <div class="accent-line bg-blue-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Automobile recycling</strong> is the systematic process of dismantling, recovering, and reprocessing materials from end-of-life vehicles (ELVs) including cars, trucks, buses, and two-wheelers.
                        </p>
                        <p>
                            The process ensures that reusable parts and raw materials are extracted efficiently, reducing waste and supporting sustainable manufacturing across the global automotive supply chain.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200">
                    @php
                        $materials = [
                            ['icon' => 'industry', 'label' => 'Steel & Iron'],
                            ['icon' => 'cube', 'label' => 'Aluminium & Copper'],
                            ['icon' => 'box', 'label' => 'Plastics & Rubber'],
                            ['icon' => 'vial', 'label' => 'Fluids & Glass'],
                        ];
                    @endphp
                    @foreach($materials as $mat)
                        <div class="p-16 bg-slate-50 flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700">
                            <i class="fa-solid fa-{{ $mat['icon'] }} text-5xl mb-8 text-slate-300 group-hover:text-blue-500 transition-all duration-500"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors">{{ $mat['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Key Processes -->
            <div class="p-24 lg:p-32 bg-slate-950 relative overflow-hidden group shadow-3xl border border-white/5">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.05),transparent)]"></div>
                <div class="relative z-10 space-y-24">
                    <div class="text-center space-y-4">
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Recovery Workflow</span>
                        <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Key Recycling Processes</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-px bg-white/10 border border-white/10">
                        @php
                            $processes = [
                                'Vehicle Collection & Inspection',
                                'Depollution (Removal of Fluids)',
                                'Dismantling of Components',
                                'Shredding & Separation',
                                'Metal & Material Reprocessing'
                            ];
                        @endphp
                        @foreach($processes as $index => $process)
                            <div class="p-12 bg-slate-950 text-center space-y-10 hover:bg-white/5 transition-all duration-500 group/step">
                                <div class="w-16 h-16 bg-blue-600 flex items-center justify-center mx-auto font-black text-2xl text-white shadow-2xl group-hover/step:scale-110 transition-transform duration-500">
                                    {{ sprintf('%02d', $index + 1) }}
                                </div>
                                <p class="text-[10px] font-black uppercase text-slate-400 leading-relaxed tracking-[0.2em] group-hover/step:text-white transition-colors">{{ $process }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Market Stats -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-americas text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$85 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$140 Billion</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-blue-600 tracking-tighter italic">8%</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10">
                            <div class="p-10 bg-slate-950">
                                <p class="text-[9px] text-slate-500 uppercase font-black tracking-[0.3em] mb-2">Total Facilities</p>
                                <p class="text-3xl font-black text-white uppercase tracking-tighter italic">20,000+</p>
                            </div>
                            <div class="p-10 bg-slate-950">
                                <p class="text-[9px] text-slate-500 uppercase font-black tracking-[0.3em] mb-2">Key Markets</p>
                                <p class="text-xl font-black text-white uppercase tracking-widest italic">USA, EU, China</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-flag-checkered text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Market Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$2.5 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-100 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$7 Billion</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-6xl font-black text-blue-600 tracking-tighter italic">15%</span>
                            </div>
                        </div>

                        <div class="p-12 bg-blue-50 border-l-4 border-blue-600 shadow-sm">
                             <p class="text-[9px] font-black uppercase text-blue-600 mb-4 tracking-[0.4em]">Main Growth Driver</p>
                             <p class="text-3xl font-black text-slate-900 uppercase italic leading-tight tracking-tighter">Government Vehicle Scrappage Policy & Rising Scrap Steel Demand.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="space-y-12">
                <div class="section-heading text-left">
                    <span class="subtitle">Market Dynamics</span>
                    <h2 class="text-5xl font-black uppercase tracking-tighter italic">Comparative <br><span class="text-blue-600">Analytics.</span></h2>
                    <div class="accent-line bg-blue-600"></div>
                </div>
                <div class="overflow-hidden border border-slate-200 shadow-3xl">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-950 text-white">
                                <th class="p-10 uppercase text-[10px] tracking-[0.4em] font-black border-r border-white/10">Parameter</th>
                                <th class="p-10 uppercase text-[10px] tracking-[0.4em] font-black text-center border-r border-white/10">Global Market</th>
                                <th class="p-10 uppercase text-[10px] tracking-[0.4em] font-black text-center">India Market</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 italic">
                            <tr class="hover:bg-slate-50 transition-colors group">
                                <td class="p-12 font-black text-slate-400 group-hover:text-slate-900 uppercase text-[10px] tracking-[0.2em] border-r border-slate-100 transition-colors">Market Stage</td>
                                <td class="p-12 text-center font-black text-slate-950 uppercase tracking-tighter border-r border-slate-100 text-4xl">Mature</td>
                                <td class="p-12 text-center font-black text-blue-600 uppercase tracking-tighter text-4xl">Emerging</td>
                            </tr>
                            <tr class="hover:bg-slate-50 transition-colors group">
                                <td class="p-12 font-black text-slate-400 group-hover:text-slate-900 uppercase text-[10px] tracking-[0.2em] border-r border-slate-100 transition-colors">Primary Driver</td>
                                <td class="p-12 text-center text-slate-600 font-bold uppercase text-sm border-r border-slate-100 tracking-widest">Sustainability + ELV Rules</td>
                                <td class="p-12 text-center text-slate-600 font-bold uppercase text-sm tracking-widest">Scrappage Policy + Steel Demand</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Growth Outlook -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-white space-y-16">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-slate-950 pl-10 tracking-tighter">Global Outlook</h3>
                    <div class="space-y-px bg-slate-100 border border-slate-200 shadow-2xl">
                        @foreach([
                            'Strong investments in automated dismantling plants',
                            'Higher recycling efficiency through AI/robotics',
                            'Integration of EV battery recycling',
                            'OEM participation in recycling ecosystems'
                        ] as $item)
                        <div class="flex items-center gap-8 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-2 h-2 bg-slate-200 group-hover:bg-blue-600 transition-colors"></div>
                            <span class="text-[10px] font-black text-slate-600 group-hover:text-white uppercase tracking-[0.2em] leading-tight transition-colors">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="p-16 lg:p-24 bg-slate-50 space-y-16 border-l border-slate-200">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-blue-600 pl-10 tracking-tighter">India Outlook</h3>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @foreach([
                            'Significant increase in registered scrappage centers',
                            'Major investment from auto OEMs and recyclers',
                            'Development of formal recycling supply chain',
                            'Rising use of recycled auto parts in aftermarket'
                        ] as $item)
                        <div class="flex items-center gap-8 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-2 h-2 bg-blue-400"></div>
                            <span class="text-[10px] font-black text-slate-600 group-hover:text-white uppercase tracking-[0.2em] leading-tight transition-colors">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group border border-white/5 shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(37,99,235,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Global Sustainability
                        </div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-blue-600">Strategic Importance</h3>
                        <ul class="space-y-10">
                            @foreach([
                                'Reduces industrial waste and landfill burden',
                                'Conserves natural resources and raw materials',
                                'Supports circular economy in manufacturing',
                                'Reduces carbon footprint of vehicle production',
                                'Creates jobs in dismantling and remanufacturing'
                            ] as $imp)
                                <li class="flex items-start gap-8 group/item">
                                    <i class="fa-solid fa-circle-check text-blue-600 text-3xl group-hover/item:scale-125 transition-transform duration-500"></i>
                                    <span class="text-slate-400 text-xl font-black uppercase tracking-widest group-hover/item:text-white transition-colors duration-500 leading-tight">{{ $imp }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="space-y-16">
                    <h2 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Key Recovered <br><span class="text-blue-600">Products.</span></h2>
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @foreach(['Ferrous Metals', 'Non-Ferrous Metals', 'Batteries', 'Tyres & Rubber', 'Spare Parts', 'Plastics', 'Automotive Fluids'] as $prod)
                            <span class="p-8 bg-white text-[10px] font-black uppercase tracking-[0.3em] text-slate-600 hover:bg-slate-950 hover:text-white transition-all duration-500 cursor-default flex-1 text-center whitespace-nowrap">{{ $prod }}</span>
                        @endforeach
                    </div>
                    <div class="p-16 border-l-8 border-blue-600 bg-slate-50 shadow-sm">
                        <p class="text-3xl text-slate-500 font-medium leading-relaxed italic border-slate-200 tracking-tighter uppercase">
                            "With supportive government policies and increasing vehicle ownership, India is expected to become one of the leading high-growth automobile recycling markets globally in the next decade."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(37,99,235,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Future of <br><span class="text-blue-600">Sustainable Mobility.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-blue-600 pl-10 md:text-center mx-auto">
                        Explore opportunities in the automobile recycling ecosystem. From authorized scrappage centers to advanced metal recovery, join the mission to build a zero-waste automotive industry.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
                            Register for Recycling Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
