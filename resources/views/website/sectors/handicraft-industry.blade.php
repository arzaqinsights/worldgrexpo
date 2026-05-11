@extends('layouts.website')

@section('title', 'Handicraft Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/handicraft.webp') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-blue-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-blue-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-blue-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Artisan Legacy Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Handicraft <br>
                <span class="text-blue-600">Industry.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-blue-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Celebrating cultural heritage through the artistry of human hands and timeless craftsmanship.
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
                        <span class="subtitle">Artisan Value Framework</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Legacy of <br><span class="text-blue-600">Artistry.</span></h2>
                        <div class="accent-line bg-blue-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">The Handicraft Industry</strong> involves the creation of decorative and functional products made primarily by hand or with simple tools by skilled artisans.
                        </p>
                        <p>
                            Reflecting deep cultural heritage and creativity, this sector supports millions of rural and artisan economies globally, bridging ancient tradition with modern luxury.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-blue-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/handicraft.webp') }}" alt="Handicraft Industry"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute bottom-0 left-0 p-12">
                        <div class="bg-blue-600 text-white p-10 space-y-2 border-l-8 border-white/20 shadow-2xl">
                            <p class="text-5xl font-black tracking-tighter uppercase italic">Luxury</p>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] opacity-80">Artisan Segment</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global vs India Market -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <!-- GLOBAL -->
                <div class="p-16 lg:p-24 bg-slate-950 text-white relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-earth-asia text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Global Investment</div>
                            <h3 class="text-5xl font-black uppercase tracking-tighter italic">Global Market</h3>
                        </div>
                        
                        <div class="space-y-12">
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Market Value (2025)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$850B</span>
                            </div>
                            <div class="flex items-end justify-between border-b border-white/10 pb-8">
                                <span class="text-[10px] font-black uppercase text-slate-500 tracking-[0.3em]">Projected (2033)</span>
                                <span class="text-6xl font-black text-white tracking-tighter italic">$1.2T</span>
                            </div>
                        </div>

                        <div class="p-12 bg-white/5 border border-white/10 shadow-2xl">
                             <p class="text-[10px] font-black text-blue-400 uppercase tracking-[0.4em] mb-4">Market Reach</p>
                             <p class="text-2xl font-black text-white uppercase italic leading-tight tracking-tighter">10% Expected CAGR</p>
                             <p class="text-sm text-slate-500 mt-4 italic uppercase">Asia-Pacific remains the largest hub.</p>
                        </div>
                    </div>
                </div>

                <!-- INDIA -->
                <div class="p-16 lg:p-24 bg-white relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute top-0 right-0 p-12 text-blue-600 opacity-5 group-hover:opacity-10 transition-opacity">
                        <i class="fa-solid fa-palette text-[12rem]"></i>
                    </div>
                    <div class="relative z-10 space-y-16 text-right">
                        <div class="space-y-4">
                            <div class="text-blue-600 text-[10px] font-black uppercase tracking-[0.4em]">National Momentum</div>
                            <h3 class="text-5xl font-black text-slate-900 uppercase tracking-tighter italic">Indian Market</h3>
                        </div>
                        
                        <div class="p-12 bg-blue-50 border-l-8 border-blue-600 shadow-sm text-right space-y-6">
                            <p class="text-[9px] font-black text-blue-600 uppercase tracking-[0.4em] italic">Export Value</p>
                            <p class="text-4xl font-black text-slate-950 uppercase italic leading-tight tracking-tighter">USD 5B+ Annually</p>
                            <p class="text-[12px] font-black text-slate-500 uppercase tracking-widest italic">Global Export Rank: Top 2</p>
                        </div>

                        <div class="space-y-8">
                            <h4 class="text-[9px] font-black text-slate-400 uppercase tracking-[0.4em]">Artisan Hubs</h4>
                            <div class="grid grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-sm">
                                @foreach(['Jaipur', 'Moradabad', 'Saharanpur', 'Kutch', 'Kolkata', 'Kashmir'] as $city)
                                    <div class="p-6 bg-white flex flex-col items-center justify-center gap-4 group/item hover:bg-slate-950 transition-all duration-500 text-center">
                                        <div class="w-1.5 h-1.5 bg-blue-600 group-hover/item:scale-150 transition-transform"></div>
                                        <span class="text-[9px] font-black uppercase text-slate-600 group-hover/item:text-white tracking-[0.1em] leading-tight">{{ $city }}</span>
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
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">70L+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Active Artisans</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">12%+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India CAGR</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">7K+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Organized Exporters</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-blue-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">TOP 2</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global Export Rank</p>
                </div>
            </div>

            <!-- Opportunities & Innovation -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-24 bg-white space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Growth Perspectives</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Artisan <br><span class="text-blue-600">Opportunities.</span></h2>
                        <div class="accent-line bg-blue-600"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 gap-4">
                        @php
                            $items = [
                                ['icon' => 'couch', 'title' => 'Premium Home Décor Products'],
                                ['icon' => 'box-open', 'title' => 'Sustainable Handmade Packaging'],
                                ['icon' => 'gifts', 'title' => 'Customized Corporate Gifts'],
                                ['icon' => 'gem', 'title' => 'Artisan Luxury Products'],
                                ['icon' => 'ship', 'title' => 'Export-Led Creative Enterprises'],
                                ['icon' => 'leaf', 'title' => 'Eco-Friendly Lifestyle Goods'],
                            ];
                        @endphp
                        @foreach($items as $i)
                        <div class="flex items-center gap-10 p-10 bg-slate-50 group/opp hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-blue-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-blue-600 group-hover/opp:bg-blue-600 group-hover/opp:text-white transition-all duration-500 shadow-sm">
                                <i class="fa-solid fa-{{ $i['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-white transition-colors leading-tight italic">{{ $i['title'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group border-l border-slate-200">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(37,99,235,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-16">
                        <div class="space-y-4">
                            <div class="text-blue-400 text-[10px] font-black uppercase tracking-[0.4em]">Future Outlook</div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter italic">Creative Economy</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-4 border-blue-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            Merging traditional techniques with modern high-end aesthetics is creating a new multi-billion dollar niche.
                        </p>
                        <div class="flex flex-col md:flex-row gap-4 mt-12">
                             <a href="{{ route('join.index') }}" class="btn-sharp px-10 !border-white/10 hover:!bg-blue-600">
                                Support Artisans
                             </a>
                             <a href="{{ route('join.index') }}" class="btn-sharp px-10 !border-white/10 hover:!bg-white hover:!text-slate-950">
                                Partnership
                             </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(37,99,235,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Artisan <br><span class="text-blue-600">Preservation.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-blue-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        World Grexpo empowers artisans to transition from local craftsmen to international creative entrepreneurs.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-blue-600/30 hover:!bg-blue-600">
                            Support Local Artisans 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
