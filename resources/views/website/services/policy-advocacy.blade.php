@extends('layouts.website')

@section('title', 'Policy Advocacy & Government Liaison - World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay"
            style="background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Institutional Voice</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black uppercase mb-12 tracking-tighter leading-[0.85]">
                Policy <br> <span class="text-brand-primary">Advocacy.</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
                The absolute collective voice of industrial innovation at the highest nodes of global governance and institutional engineering.
            </p>
        </div>
    </section>

    <!-- Main Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">
            
            <!-- Section 1: The Voice -->
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="space-y-12 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Global Transition</span>
                        <h2>Architecting <br> <span class="text-brand-primary">Dialogue.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <p class="text-slate-500 text-xl leading-relaxed font-medium">
                        Industrial entities often lack a direct node at the table where global sustainability policy is engineered. World Grexpo Foundation serves as your permanent institutional representative. Our <strong>Policy Advocacy</strong> node collaborates with international ministerial bodies to ensure sustainability-friendly mandates.
                    </p>
                    
                    <div class="grid md:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-xl">
                        <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700">
                             <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center mb-8 group-hover:bg-brand-primary group-hover:border-brand-primary transition-all">
                                 <i class="fa-solid fa-user-shield text-brand-primary text-2xl group-hover:text-white transition-all"></i>
                             </div>
                             <p class="text-[10px] font-black uppercase text-slate-950 tracking-[0.2em] group-hover:text-white transition-colors">Ministerial Node Access</p>
                        </div>
                        <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700">
                             <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center mb-8 group-hover:bg-brand-primary group-hover:border-brand-primary transition-all">
                                 <i class="fa-solid fa-bell text-brand-primary text-2xl group-hover:text-white transition-all"></i>
                             </div>
                             <p class="text-[10px] font-black uppercase text-slate-950 tracking-[0.2em] group-hover:text-white transition-colors">Regulatory Node Alerts</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" 
                             class="grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105 opacity-80 group-hover:opacity-100 h-[600px] object-cover" 
                             alt="Policy Node">
                    </div>
                    <!-- Sharp Industrial Decorator -->
                    <div class="absolute -top-8 -right-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
                </div>
            </div>

            <!-- Section 2: Advocacy Focus -->
            <div class="space-y-24">
                <div class="max-w-4xl space-y-8">
                    <div class="section-heading text-left">
                        <span class="subtitle">Intervention Nodes</span>
                        <h2>Strategic <br> <span class="text-brand-primary">Intervention.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic">
                        Protecting the interests of the global industrial ecosystem through absolute channel advocacy and policy rationalization.
                    </p>
                </div>
                
                <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    @php
                        $advocacy = [
                            ['t' => 'ESG Compliance', 'img' => 'https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=2070&auto=format&fit=crop', 'd' => 'Advocating for global ESG framework rationalization and data access.'],
                            ['t' => 'Carbon Export Policy', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Securing fiscal incentives for zero-carbon industrial exporters.'],
                            ['t' => 'Sustainability Norms', 'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop', 'd' => 'Simplifying global sustainability and IT norms for industrial units.']
                        ];
                    @endphp
                    @foreach($advocacy as $adv)
                    <div class="group relative h-[600px] overflow-hidden bg-slate-900">
                        <img src="{{ $adv['img'] }}" 
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-60 group-hover:opacity-100" 
                             alt="Advocacy Node">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute inset-0 p-12 flex flex-col justify-end space-y-6">
                            <h4 class="text-4xl font-black text-white uppercase tracking-tighter group-hover:text-brand-primary transition-colors">
                                {{ $adv['t'] }}
                            </h4>
                            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed group-hover:text-white transition-colors">
                                {{ $adv['d'] }}
                            </p>
                        </div>
                        
                        <!-- Sharp Hover Accent -->
                        <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Section 3: Impact -->
            <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl text-center">
                <!-- Industrial Pattern -->
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                
                <div class="relative z-10 space-y-24">
                    <div class="section-heading text-center">
                        <span class="subtitle">Institutional Impact</span>
                        <h2 class="text-white">Our Advocacy <br> <span class="text-brand-primary">Impact Nodes.</span></h2>
                        <div class="accent-line mx-auto"></div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-white/5 border border-white/10 shadow-3xl">
                        @foreach(['ESG Simplified', 'Carbon Credits', 'Green Certification', 'Transition Funding'] as $item)
                        <div class="p-12 bg-transparent hover:bg-brand-primary transition-all duration-700 group text-center">
                            <div class="w-20 h-20 bg-white/5 border border-white/10 mx-auto flex items-center justify-center text-brand-primary group-hover:bg-brand-primary-dark group-hover:text-white transition-all mb-10">
                                <i class="fa-solid fa-circle-check text-3xl"></i>
                            </div>
                            <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em] group-hover:text-slate-950 transition-colors">
                                {{ $item }}
                            </p>
                        </div>
                        @endforeach
                    </div>

                    <div class="max-w-4xl mx-auto pt-24 border-t border-white/10">
                        <p class="text-3xl text-slate-300 font-medium leading-relaxed italic">
                            "Ensuring that global industrial nodes are seen not as metrics, but as the <span class="text-brand-primary not-italic">absolute engine</span> of the new economy."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 4: Call To Action -->
            <div class="relative bg-slate-900 p-24 lg:p-32 overflow-hidden group border-t border-slate-800">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                
                <div class="relative z-10 space-y-16 max-w-5xl">
                    <div class="space-y-8">
                        <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter leading-[0.85]">
                            Voice of <br> <span class="text-brand-primary">Transition.</span>
                        </h3>
                        <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium">
                            Individually, industrial units are nodes. Collectively, we are the absolute voice of global sustainability. Acquire your membership to influence the mandates that architect your future through World Grexpo Foundation.
                        </p>
                    </div>
                    
                    <a href="{{ route('join.index') }}" class="btn-sharp px-20 group">
                        Acquire Institutional Membership 
                        <i class="fa-solid fa-flag ml-6 group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>

                <!-- Industrial Accent Line -->
                <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
            </div>

        </div>
    </section>

@endsection

@endsection
