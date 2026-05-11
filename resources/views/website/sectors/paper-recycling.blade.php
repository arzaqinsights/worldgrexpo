@extends('layouts.website')

@section('title', 'Paper Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/paper-recycling.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(217,119,6,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-amber-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-amber-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-amber-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Circular Fiber Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Paper <br>
                <span class="text-amber-600">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-amber-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Turning waste paper and cardboard into sustainable raw materials for a circular economy.
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
                        <span class="subtitle">Circular Material Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Fiber <br><span class="text-amber-600">Recovery.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Paper recycling</strong> is the process of collecting, sorting, processing, and converting waste paper and cardboard into reusable raw materials.
                        </p>
                        <p>
                            It helps conserve natural resources, reduce landfill waste, and significantly lower the environmental impact compared to virgin paper production.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200">
                    @php
                        $uses = [
                            ['icon' => 'box-open', 'label' => 'Packaging Boxes'],
                            ['icon' => 'file-lines', 'label' => 'Writing Paper'],
                            ['icon' => 'scroll', 'label' => 'Tissue & Hygiene'],
                            ['icon' => 'bag-shopping', 'label' => 'Paper Bags'],
                        ];
                    @endphp
                    @foreach($uses as $use)
                        <div class="p-12 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700">
                            <i class="fa-solid fa-{{ $use['icon'] }} text-4xl mb-6 text-amber-600 transition-transform duration-500 group-hover:scale-110"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400 group-hover:text-white">{{ $use['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Process Grid -->
            <div class="p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group">
                 <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                    <i class="fa-solid fa-recycle text-[12rem]"></i>
                </div>
                <div class="relative z-10 text-center">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic">Recycling Protocol</h3>
                    <div class="accent-line bg-amber-600 mx-auto mt-4"></div>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-5 gap-px bg-white/10 border border-white/10 shadow-3xl">
                    @php
                        $processes = [
                            'Collection & Segregation',
                            'Shredding & Pulping',
                            'Cleaning & De-Inking',
                            'Refining & Bleaching',
                            'Re-Manufacturing'
                        ];
                    @endphp
                    @foreach($processes as $index => $process)
                        <div class="p-12 bg-slate-950 text-center group/step hover:bg-amber-600 transition-all duration-500">
                            <div class="text-4xl font-black text-amber-600 mb-6 group-hover/step:text-slate-950 transition-colors">0{{ $index + 1 }}</div>
                            <p class="text-[10px] font-black uppercase text-slate-400 group-hover/step:text-slate-950 tracking-[0.2em] leading-tight">{{ $process }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-europe text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em]">Global Landscape</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-slate-200 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Value (2025)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$48B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-slate-200 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2031)</span>
                                <span class="text-6xl font-black text-slate-950 tracking-tighter italic">$72B</span>
                            </div>
                        </div>

                        <div class="p-10 bg-amber-50 border-l-8 border-amber-600">
                            <p class="text-[10px] font-black text-amber-600 uppercase tracking-[0.4em] mb-2">Expansion Driver</p>
                            <p class="text-xl font-black text-slate-900 uppercase italic tracking-tighter">E-commerce Packaging Surge</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-amber-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-industry text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-amber-400 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-white/5 border border-white/10 text-right space-y-6">
                            <p class="text-[9px] font-black text-amber-400 uppercase tracking-[0.4em] italic">Market Forecast</p>
                            <p class="text-4xl font-black text-white uppercase italic leading-tight tracking-tighter">$8B Projected (2031)</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">10-12% Annual CAGR</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Industrial Base</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10">
                                <div class="p-8 bg-slate-950 flex flex-col items-center justify-center gap-4 group/item hover:bg-amber-600 transition-all duration-500">
                                    <span class="text-4xl font-black text-amber-600 group-hover:text-slate-950 transition-colors">850+</span>
                                    <span class="text-[9px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.1em] text-center">Paper Mills</span>
                                </div>
                                <div class="p-8 bg-slate-950 flex flex-col items-center justify-center gap-4 group/item hover:bg-amber-600 transition-all duration-500">
                                    <span class="text-4xl font-black text-amber-600 group-hover:text-slate-950 transition-colors">HIGH</span>
                                    <span class="text-[9px] font-black uppercase text-slate-300 group-hover:text-slate-950 tracking-[0.1em] text-center">Growth Stage</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">7%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$3.5B</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Market (2025)</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">12%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR Target</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-amber-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">Mature</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Stage</p>
                </div>
            </div>

            <!-- Opportunities & Innovation -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Growth Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-amber-600">Trends.</span></h2>
                        <div class="accent-line bg-amber-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $trends = [
                                ['icon' => 'box', 'title' => 'Recycled Fiber Packaging Surge'],
                                ['icon' => 'robot', 'title' => 'Automated Paper Sorting Tech'],
                                ['icon' => 'leaf', 'title' => 'Eco-Friendly Packaging Systems'],
                                ['icon' => 'recycle', 'title' => 'Closed-Loop Circular Packing'],
                                ['icon' => 'industry', 'title' => 'Kraft & Duplex Board Expansion'],
                            ];
                        @endphp
                        @foreach($trends as $item)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-amber-600 group-hover/opp:bg-amber-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200 text-center flex flex-col justify-center items-center">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(217,119,6,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-10">
                        <i class="fa-solid fa-file-circle-check text-[8rem] text-amber-600/10 group-hover:text-amber-600 transition-all duration-700"></i>
                        <h4 class="text-5xl font-black uppercase text-white tracking-tighter italic leading-tight">Strategic Value</h4>
                        <p class="text-2xl text-slate-400 font-medium italic max-w-sm mx-auto uppercase tracking-tighter leading-relaxed">
                            Recycling <span class="text-white font-black tracking-tight">Saves Trees</span>, reduces water consumption, and lowers carbon footprint.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(217,119,6,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Circular <br><span class="text-amber-600">Future.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-amber-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Join the transition from single-use plastics to circular fiber solutions. Support sustainable paper manufacturing globally.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-amber-600/30 hover:!bg-amber-600">
                            Support Fiber Recycling 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
