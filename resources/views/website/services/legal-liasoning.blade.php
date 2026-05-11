@extends('layouts.website')

@section('title', 'Legal & Government Liaisoning Services - World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 text-white overflow-hidden border-b border-slate-900">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        <div class="absolute inset-0 opacity-10 grayscale mix-blend-overlay"
            style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?q=80&w=2070&auto=format&fit=crop'); background-size: cover; background-position: center;">
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>

        <div class="container relative z-10 text-left">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md mb-12">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Node Security</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black uppercase mb-12 tracking-tighter leading-[0.85]">
                Legal & <br> <span class="text-brand-primary">Liaisoning.</span>
            </h1>
            <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium border-l-4 border-brand-primary pl-10">
                Absolute industrial security through specialized institutional legal support and strategic agency liaisoning.
            </p>
        </div>
    </section>

    <!-- Main Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container space-y-48">
            
            <!-- Section 1: Business Security -->
            <div class="grid lg:grid-cols-2 gap-24 items-center">
                <div class="relative group">
                    <div class="overflow-hidden border border-slate-200 shadow-2xl bg-slate-900">
                        <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2070&auto=format&fit=crop" 
                             class="grayscale group-hover:grayscale-0 transition-all duration-[2000ms] group-hover:scale-105 opacity-80 group-hover:opacity-100 h-[600px] object-cover" 
                             alt="Legal Security">
                    </div>
                    <!-- Sharp Industrial Decorator -->
                    <div class="absolute -top-8 -left-8 w-48 h-48 bg-[repeating-linear-gradient(45deg,transparent,transparent_5px,rgba(170,204,0,0.1)_5px,rgba(170,204,0,0.1)_10px)] -z-10"></div>
                </div>
                
                <div class="space-y-12 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Risk Mitigation</span>
                        <h2>Architecting <br> <span class="text-brand-primary">Compliance.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <p class="text-slate-500 text-xl leading-relaxed font-medium">
                        In the global industrial node, non-compliance is an absolute risk. World Grexpo Foundation provides highly <strong>Specialized Legal Support</strong> and essential Government Liaisoning nodes, architected to protect industrial security. From complex contract laws to environmental node clearances, our framework ensures absolute focus on transition.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-xl">
                        @foreach(['Environmental', 'Corporate Law', 'Arbitration', 'Licensing'] as $law)
                            <div class="p-10 bg-white group hover:bg-slate-950 transition-all duration-700 text-center">
                                <span class="text-[10px] font-black uppercase text-slate-950 tracking-[0.2em] group-hover:text-white transition-colors">
                                    {{ $law }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Section 2: Liaison Framework -->
            <div class="space-y-24">
                <div class="max-w-4xl space-y-8">
                    <div class="section-heading text-left">
                        <span class="subtitle">Regulatory Pathways</span>
                        <h2>Liaisoning <br> <span class="text-brand-primary">Ecosystem.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic">
                        Streamlining institutional interactions with global and central regulatory nodes through absolute authority.
                    </p>
                </div>
                
                <div class="grid lg:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                    @php
                        $liaison = [
                            ['t' => 'Regulatory Clearances', 'img' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop', 'd' => 'Fast-track node approvals from global industrial & pollution boards.'],
                            ['t' => 'Certifications Support', 'img' => 'https://images.unsplash.com/photo-1544725121-be3b5d0c0bc5?q=80&w=2026&auto=format&fit=crop', 'd' => 'Institutional guidance on ISO, ZED, and zero-carbon certifications.'],
                            ['t' => 'Grievance Redressal', 'img' => 'https://images.unsplash.com/photo-1606857521015-7f9fdf423740?q=80&w=2070&auto=format&fit=crop', 'd' => 'Official institutional representation in cases of node disputes.']
                        ];
                    @endphp
                    @foreach($liaison as $li)
                    <div class="group relative h-[600px] overflow-hidden bg-slate-900">
                        <img src="{{ $li['img'] }}" 
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-[2000ms] opacity-60 group-hover:opacity-100" 
                             alt="Liaison Node">
                        
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                        
                        <div class="absolute inset-0 p-12 flex flex-col justify-end space-y-6">
                            <h4 class="text-4xl font-black text-white uppercase tracking-tighter group-hover:text-brand-primary transition-colors">
                                {{ $li['t'] }}
                            </h4>
                            <p class="text-slate-400 text-[10px] font-black uppercase tracking-[0.3em] leading-relaxed group-hover:text-white transition-colors">
                                {{ $li['d'] }}
                            </p>
                        </div>
                        
                        <!-- Sharp Hover Accent -->
                        <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-brand-primary group-hover:w-full transition-all duration-700"></div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Section 3: Service Strength -->
            <div class="bg-slate-950 p-24 lg:p-32 relative overflow-hidden shadow-3xl">
                <!-- Industrial Pattern -->
                <div class="absolute inset-0 z-0">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                </div>
                
                <div class="relative z-10 space-y-24 text-center">
                    <div class="section-heading text-center">
                        <span class="subtitle">Proprietary Nodes</span>
                        <h2 class="text-white">Institutional <br> <span class="text-brand-primary">Security Nodes.</span></h2>
                        <div class="accent-line mx-auto"></div>
                    </div>

                    <div class="grid md:grid-cols-4 gap-px bg-white/5 border border-white/10 shadow-3xl">
                        @foreach([
                            ['t' => 'Legal Advisory', 'val' => '24/7 Support'],
                            ['t' => 'Agency Liaison', 'val' => '100+ Nodes'],
                            ['t' => 'Dispute Resolution', 'val' => '95% Success'],
                            ['t' => 'Certifications', 'val' => 'Absolute Node']
                        ] as $metric)
                        <div class="p-12 bg-transparent hover:bg-brand-primary transition-all duration-700 group">
                            <p class="text-brand-primary font-black text-4xl mb-6 group-hover:text-slate-950 transition-colors tracking-tighter tabular-nums leading-none">
                                {{ $metric['val'] }}
                            </p>
                            <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.3em] group-hover:text-slate-900 transition-colors">
                                {{ $metric['t'] }}
                            </p>
                        </div>
                        @endforeach
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
                            Secure Your <br> <span class="text-brand-primary">Deal Node.</span>
                        </h3>
                        <p class="text-2xl text-slate-400 max-w-4xl leading-relaxed font-medium">
                            Don't let institutional ambiguity stop your industrial node momentum. Get absolute protection and liaisoning support today through World Grexpo Foundation.
                        </p>
                    </div>
                    
                    <a href="{{ route('forms.show', ['slug' => 'join-us']) }}" class="btn-sharp px-20 group">
                        Acquire Legal Consultation 
                        <i class="fa-solid fa-scale-balanced ml-6 group-hover:translate-x-4 transition-transform"></i>
                    </a>
                </div>

                <!-- Industrial Accent Line -->
                <div class="absolute left-0 top-0 w-2 h-full bg-brand-primary"></div>
            </div>

        </div>
    </section>

@endsection

@endsection
