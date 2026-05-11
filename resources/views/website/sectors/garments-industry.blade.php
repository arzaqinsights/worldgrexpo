@extends('layouts.website')

@section('title', 'Garments Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/garments.webp') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(225,29,72,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-rose-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-rose-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-rose-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Global Fashion Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Garments <br>
                <span class="text-rose-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-rose-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Stitching the future of global fashion through innovative manufacturing and style.
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
                        <span class="subtitle">Apparel Manufacturing Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Industrial <br><span class="text-rose-600">Fashion.</span></h2>
                        <div class="accent-line bg-rose-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">The Garments Industry</strong> involves the design, manufacturing, and distribution of ready-made clothing for men, women, and children.
                        </p>
                        <p>
                            From everyday casuals to high-fashion apparel, this sector is a massive consumer-driven powerhouse that combines creative design with large-scale industrial manufacturing.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-rose-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/garments.webp') }}" alt="Garments Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-rose-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Manufacturing Standard
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-rose-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-shirt text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-rose-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Sourcing</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$1.84T</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$2.54T</span>
                            </div>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-500 uppercase tracking-[0.4em]">Growth Drivers</h4>
                            <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-2xl">
                                @foreach(['Fast Fashion', 'E-commerce', 'Luxury Segment', 'Disposable Income'] as $driver)
                                    <div class="px-8 py-4 bg-slate-950 flex items-center gap-6 hover:bg-rose-600 hover:text-slate-950 transition-colors cursor-default group/item">
                                        <i class="fa-solid fa-circle-check text-rose-600 group-hover/item:text-slate-950 transition-colors"></i>
                                        <span class="text-[10px] font-black uppercase tracking-[0.1em] text-center">{{ $driver }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-rose-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-tags text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-rose-600 text-[10px] font-black uppercase tracking-[0.4em]">Export Dominance</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-rose-50 border-l-8 border-rose-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-rose-600 uppercase tracking-[0.4em] italic">Sector Contribution</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">40% Textile Share</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">Top 6 Global Exporter</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Manufacturing Hubs</h4>
                            <div class="grid grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                @foreach(['Tiruppur', 'Bengaluru', 'Delhi NCR', 'Mumbai', 'Jaipur', 'Ludhiana'] as $city)
                                    <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500">
                                        <div class="w-1.5 h-1.5 bg-rose-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight text-center">{{ $city }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">8-10%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Annual Growth</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">20K</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Organized Units</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">1L+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">MSME Enterprises</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">40%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Textile Share</p>
                </div>
            </div>

            <!-- Opportunities & Position -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="relative overflow-hidden group">
                    <div class="absolute inset-0 bg-rose-600/10"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl h-[600px]">
                        <img src="{{ asset('images/sectors/garments-details.jpg') }}" alt="Garments Details"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-12">
                        <div class="bg-rose-600 text-white p-10 space-y-2 border-l-8 border-white/20 shadow-2xl">
                            <p class="text-5xl font-black tracking-tighter uppercase italic">1M+</p>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] opacity-80">Global Manufacturers</p>
                        </div>
                    </div>
                </div>

                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Market Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-rose-600">Opportunities.</span></h2>
                        <div class="accent-line bg-rose-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $opportunities = [
                                ['icon' => 'leaf', 'title' => 'Sustainable & Organic Clothing'],
                                ['icon' => 'gem', 'title' => 'Premium Fashion Brands'],
                                ['icon' => 'person-running', 'title' => 'Sportswear & Athleisure'],
                                ['icon' => 'microchip', 'title' => 'Technical & Functional Apparel'],
                                ['icon' => 'ship', 'title' => 'Export-Oriented Manufacturing'],
                                ['icon' => 'mobile-screen-button', 'title' => 'D2C Fashion & E-Commerce'],
                            ];
                        @endphp
                        @foreach($opportunities as $item)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-rose-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-rose-600 group-hover/opp:bg-rose-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $item['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(225,29,72,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Fashion <br><span class="text-rose-600">Revolution.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-rose-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        The garments sector is a key employment generator and economic driver, shaping global fashion innovation and retail growth.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-rose-600/30 hover:!bg-rose-600">
                            Join Fashion Revolution 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
