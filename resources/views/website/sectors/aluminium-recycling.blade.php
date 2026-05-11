@extends('layouts.website')

@section('title', 'Aluminium Recycling Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/non-ferrous-scrap-recycling.jpeg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Circular Asset Hub</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Aluminium <br>
                <span class="text-brand-primary">Recycling.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
                One of the most sustainable metals in the world—infinitely recyclable without loss of quality.
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
                        <span class="subtitle">Industry Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter">Circular Metal <br><span class="text-brand-primary">Economy.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Aluminium recycling</strong> is the process of collecting and melting scrap aluminium from beverage cans, automotive parts, and industrial waste to create new products.
                        </p>
                        <p>
                            Recycling aluminium saves up to <strong>95% of the energy</strong> required for primary production and reduces carbon emissions significantly, making it a cornerstone of modern circular economy strategies.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-brand-primary/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200">
                        <img src="{{ asset('images/sectors/non-ferrous-scrap-recycling.jpeg') }}" alt="Aluminium Recycling Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-brand-primary text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Infinitely Recyclable
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Grid -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <!-- GLOBAL -->
                <div class="p-16 bg-slate-950 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-europe text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">Market Scale</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter">Global Market</h3>
                        </div>
                        
                        <div class="space-y-8">
                            <div class="flex items-end justify-between border-b border-white/10 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Value (2025)</span>
                                <span class="text-5xl font-black text-white tracking-tighter">$100 Billion</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-6">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-5xl font-black text-white tracking-tighter">$140 Billion</span>
                            </div>
                            <div class="flex items-end justify-between">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Annual CAGR</span>
                                <span class="text-5xl font-black text-brand-primary tracking-tighter">7%</span>
                            </div>
                        </div>

                        <p class="text-[10px] text-slate-500 uppercase font-black tracking-[0.4em]">More than 75% of all aluminium ever produced is still in use today.</p>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-brand-primary opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-recycle text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">National Focus</div>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter">Indian Market</h3>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-sm mb-8">
                            <div class="bg-white p-10">
                                <p class="text-[9px] text-slate-400 uppercase font-black tracking-[0.4em] mb-2">Market value (Annual)</p>
                                <p class="text-4xl font-black text-slate-950 uppercase">$15B+</p>
                            </div>
                            <div class="bg-white p-10">
                                <p class="text-[9px] text-slate-400 uppercase font-black tracking-[0.4em] mb-2">Annual Consumption</p>
                                <p class="text-4xl font-black text-slate-950 uppercase">4M Tons</p>
                            </div>
                        </div>

                        <div class="space-y-px bg-slate-200 border border-slate-200">
                            <div class="flex items-center justify-between p-8 bg-white group/stat">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover/stat:text-brand-primary transition-colors">Projected CAGR</span>
                                <span class="text-xl font-black text-brand-primary uppercase">10% - 12%</span>
                            </div>
                            <div class="flex items-center justify-between p-8 bg-white group/stat">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] group-hover/stat:text-slate-950 transition-colors">Organized Recyclers</span>
                                <span class="text-xl font-black text-slate-950 uppercase">1,500+ Entities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- STATS CARDS -->
             <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-colors tracking-tighter">95%</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Energy Saved vs Primary</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-colors tracking-tighter">$120B+</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Global Market (2031)</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-colors tracking-tighter">TOP 5</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Global Consumer Rank</div>
                </div>
                <div class="group p-16 bg-white text-center hover:bg-slate-950 transition-all duration-700">
                    <div class="mb-4 text-slate-950 text-5xl font-black group-hover:text-brand-primary transition-colors tracking-tighter">25K+</div>
                    <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Global Businesses</div>
                </div>
            </div>

            <!-- HUB SECTION -->
            <div class="p-24 lg:p-32 bg-slate-50 border border-slate-200 relative overflow-hidden group shadow-3xl">
                <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
                <div class="relative z-10 grid md:grid-cols-2 gap-24 items-center">
                    <div class="space-y-12">
                        <div class="space-y-4">
                            <span class="text-brand-primary text-[10px] font-black uppercase tracking-[0.4em]">Regional Nodes</span>
                            <h3 class="text-5xl font-black text-slate-950 uppercase tracking-tighter italic">India's Scrap Hubs</h3>
                        </div>
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-200 pl-10">
                            India is emerging as a major market for secondary aluminium manufacturing, with rising domestic demand from auto and EV sectors.
                        </p>
                        <div class="flex flex-wrap gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                            @foreach(['Gujarat', 'Maharashtra', 'Delhi NCR', 'Tamil Nadu', 'Karnataka'] as $hub)
                                <span class="px-8 py-6 bg-white text-[10px] font-black text-slate-600 uppercase tracking-[0.3em] flex-1 text-center whitespace-nowrap hover:bg-slate-950 hover:text-white transition-all cursor-default">{{ $hub }}</span>
                            @endforeach
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                         <div class="p-16 bg-white text-center flex flex-col justify-center space-y-8 hover:bg-slate-950 transition-all duration-700 group/card">
                            <i class="fa-solid fa-car text-5xl text-slate-200 group-hover/card:text-brand-primary transition-all duration-500"></i>
                            <div class="space-y-2">
                                <p class="text-[9px] font-black uppercase text-slate-400 tracking-[0.3em] mb-1">Heavy Demand</p>
                                <p class="text-sm font-black text-slate-950 group-hover/card:text-white uppercase tracking-widest transition-colors">Automotive & EV</p>
                            </div>
                         </div>
                         <div class="p-16 bg-white text-center flex flex-col justify-center space-y-8 hover:bg-slate-950 transition-all duration-700 group/card">
                            <i class="fa-solid fa-beer-mug-empty text-5xl text-slate-200 group-hover/card:text-brand-primary transition-all duration-500"></i>
                            <div class="space-y-2">
                                <p class="text-[9px] font-black uppercase text-slate-400 tracking-[0.3em] mb-1">Rising Trend</p>
                                <p class="text-sm font-black text-slate-950 group-hover/card:text-white uppercase tracking-widest transition-colors">Beverage Cans</p>
                            </div>
                         </div>
                    </div>
                </div>
            </div>

            <!-- OPPORTUNITIES -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Future Horizons</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Emerging <br><span class="text-brand-primary">Opportunities.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @php
                            $items = [
                                ['icon' => 'beer-mug-empty', 'title' => 'Beverage Can Recycling'],
                                ['icon' => 'car-side', 'title' => 'Automotive Scrap Recovery'],
                                ['icon' => 'cube', 'title' => 'Secondary Ingot Production'],
                                ['icon' => 'box-open', 'title' => 'Sustainable Packaging Meta'],
                                ['icon' => 'building', 'title' => 'Green Building Supply'],
                                ['icon' => 'industry', 'title' => 'Industrial Scrap Solutions'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-8 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-brand-primary scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all shadow-sm">
                                <i class="fa-solid fa-{{ $i['icon'] }}"></i>
                            </div>
                            <span class="text-[10px] font-black text-slate-600 group-hover:text-white uppercase tracking-[0.3em] leading-tight transition-colors">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(148,163,184,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">
                            Sustainability Mandate
                        </div>
                        <h3 class="text-5xl font-black uppercase tracking-tighter">Sustainability <br><span class="text-brand-primary">Matters.</span></h3>
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic border-l-4 border-brand-primary pl-10">
                            Aluminium recycling reduces mining costs and environmental impact. As demand for lightweight, sustainable materials increases, aluminium is the cornerstone of circular manufacturing.
                        </p>
                        <div class="pt-12 flex items-center gap-8 border-t border-white/10">
                             <div class="w-24 h-1 bg-brand-accent"></div>
                             <p class="text-[10px] font-black uppercase tracking-[0.4em] text-white">Infinitely Recyclable Assets</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(0,75,35,0.3),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        The Future is <br><span class="text-brand-primary">Secondary Aluminium.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-brand-primary pl-10">
                        Join the circular economy transition. Explore secondary aluminium production, scrap aggregation, and industrial recycling solutions to build a cleaner manufacturing future.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-brand-primary/30 hover:!bg-brand-primary">
                            Register for Recycling Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
