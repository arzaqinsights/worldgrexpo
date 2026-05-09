@extends('layouts.website')

@section('title', 'Policy Advocacy & Government Liaison - World Grexpo Foundation')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-48 pb-24 bg-slate-950 text-white overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale"
            style="background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=2074&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-3 px-4 py-2 bg-slate-950 border-l-4 border-brand-accent mb-10">
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase italic">Institutional Voice</span>
            </div>
            <h1 class="text-6xl md:text-8xl font-black uppercase mb-8 tracking-tighter leading-[0.85] italic">
                Policy <span class="text-brand-accent not-italic">Advocacy</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-tight font-light italic">
                The absolute collective voice of industrial innovation at the highest nodes of global governance.
            </p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-32">
            
            <!-- SECTION 1: THE VOICE -->
            <div class="flex flex-col lg:flex-row items-center gap-24">
                <div class="w-full lg:w-1/2 space-y-12 animate-on-scroll">
                    <h2 class="text-5xl font-black text-slate-950 uppercase italic leading-none tracking-tighter">
                        Architecting <span class="text-brand-primary not-italic">Dialogue</span> <br> <span class="text-slate-400 text-3xl">Policy vs. Global Transition</span>
                    </h2>
                    <p class="text-slate-500 text-xl leading-relaxed font-light">
                        Industrial entities often lack a direct node at the table where global sustainability policy is engineered. World Grexpo Foundation serves as your permanent institutional representative. Our <strong>Policy Advocacy</strong> node collaborates with international ministerial bodies to ensure sustainability-friendly mandates.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-6 p-6 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                             <div class="w-10 h-10 bg-white border border-slate-200 flex items-center justify-center rounded-sm group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-500">
                                 <i class="fa-solid fa-user-shield text-slate-950 text-xs group-hover:scale-110"></i>
                             </div>
                             <p class="text-[10px] font-black uppercase text-slate-950 tracking-widest group-hover:text-white transition-colors">Ministerial Node Access</p>
                        </div>
                        <div class="flex items-center gap-6 p-6 bg-slate-50 border border-slate-100 rounded-sm group hover:bg-slate-950 transition-all duration-500">
                             <div class="w-10 h-10 bg-white border border-slate-200 flex items-center justify-center rounded-sm group-hover:bg-brand-accent group-hover:border-brand-accent transition-all duration-500">
                                 <i class="fa-solid fa-bell text-slate-950 text-xs group-hover:scale-110"></i>
                             </div>
                             <p class="text-[10px] font-black uppercase text-slate-950 tracking-widest group-hover:text-white transition-colors">Regulatory Node Alerts</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 relative group">
                    <div class="rounded-sm overflow-hidden border border-slate-100 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop" class="grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100" alt="Policy Node">
                    </div>
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-primary opacity-10 rounded-sm -z-10 rotate-12"></div>
                </div>
            </div>

            <!-- SECTION 2: ADVOCACY FOCUS -->
            <div class="space-y-20">
                <div class="text-left max-w-3xl">
                    <h3 class="text-5xl font-black uppercase italic text-slate-950 mb-8 tracking-tighter">Strategic Intervention Nodes</h3>
                    <p class="text-slate-500 text-xl font-light italic">Protecting the interests of the global industrial ecosystem through absolute channel advocacy.</p>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    @php
                        $advocacy = [
                            ['t' => 'ESG Compliance', 'img' => 'https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=2070&auto=format&fit=crop', 'd' => 'Advocating for global ESG framework rationalization and data access.'],
                            ['t' => 'Carbon Export Policy', 'img' => 'https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2069&auto=format&fit=crop', 'd' => 'Securing fiscal incentives for zero-carbon industrial exporters.'],
                            ['t' => 'Sustainability Norms', 'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop', 'd' => 'Simplifying global sustainability and IT norms for industrial units.']
                        ];
                    @endphp
                    @foreach($advocacy as $adv)
                    <div class="group relative h-[550px] overflow-hidden rounded-sm border border-slate-900">
                        <img src="{{ $adv['img'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" alt="Advocacy Node">
                        <div class="absolute inset-0 bg-slate-950/80 group-hover:bg-brand-primary/80 transition-colors duration-700"></div>
                        <div class="absolute inset-0 p-12 flex flex-col justify-end">
                            <h4 class="text-3xl font-black text-brand-accent mb-4 uppercase italic tracking-tighter group-hover:text-white transition-colors">{{ $adv['t'] }}</h4>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest leading-relaxed group-hover:text-white transition-colors">{{ $adv['d'] }}</p>
                        </div>
                        <div class="absolute top-0 left-0 w-0 h-1.5 bg-brand-accent group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- SECTION 3: IMPACT -->
            <div class="bg-slate-950 p-16 lg:p-24 rounded-sm relative overflow-hidden text-center space-y-20">
                 <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                 </div>
                 <h3 class="text-5xl font-black uppercase italic tracking-tighter text-white relative z-10">Our Advocacy <span class="text-brand-accent">Impact Nodes</span></h3>
                 <div class="grid grid-cols-2 md:grid-cols-4 gap-4 relative z-10">
                    @foreach(['ESG Simplified', 'Carbon Credits', 'Green Certification', 'Transition Funding'] as $item)
                        <div class="p-10 bg-white/5 border border-white/10 rounded-sm hover:bg-brand-primary transition-all duration-700 group">
                            <div class="w-16 h-16 bg-white/5 border border-white/10 mx-auto rounded-sm flex items-center justify-center text-brand-accent group-hover:bg-white group-hover:text-brand-primary transition-all duration-700 mb-8">
                                <i class="fa-solid fa-circle-check text-2xl group-hover:scale-110"></i>
                            </div>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-slate-950 transition-colors">{{ $item }}</p>
                        </div>
                    @endforeach
                 </div>
                 <div class="max-w-4xl mx-auto pt-20 border-t border-white/10 relative z-10">
                    <p class="text-3xl text-slate-300 italic font-light leading-tight tracking-tight">"Ensuring that global industrial nodes are seen not as metrics, but as the <span class="text-brand-accent not-italic">absolute engine</span> of the new economy."</p>
                 </div>
            </div>

            <!-- SECTION 4: CALL TO ACTION -->
            <div class="relative bg-slate-950 p-24 rounded-sm text-left overflow-hidden border-l-[20px] border-brand-accent group">
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                </div>
                <div class="relative z-10 space-y-12">
                    <h3 class="text-6xl md:text-9xl font-black text-white uppercase tracking-tighter italic leading-none">Voice of <br> <span class="text-brand-accent">Transition</span></h3>
                    <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-light italic opacity-80 mb-16">
                        Individually, industrial units are nodes. Collectively, we are the absolute voice of global sustainability. Acquire your membership to influence the mandates that architect your future.
                    </p>
                    <a href="{{ route('join.index') }}" class="inline-flex items-center gap-6 px-16 py-8 bg-white text-slate-950 font-black uppercase tracking-[0.3em] text-xs rounded-sm hover:bg-brand-accent hover:text-slate-950 transition-all duration-700 shadow-4xl italic group">
                        Acquire Institutional Membership <i class="fa-solid fa-flag text-brand-accent group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection
