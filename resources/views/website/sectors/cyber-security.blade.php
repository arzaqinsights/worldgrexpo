@extends('layouts.website')

@section('title', 'Cyber Security Industry Overview')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/cyber-security.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-cyan-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-cyan-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-cyan-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Digital Defense Infrastructure</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Cyber <br>
                <span class="text-cyan-600">Security.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-cyan-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Protecting the Digital World Through Advanced Security Solutions.
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
                        <span class="subtitle">Digital Shield Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Safeguarding <br><span class="text-cyan-600">Digital Assets.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            In today's digital-first economy, <strong class="text-slate-900 font-black uppercase tracking-tight">Cyber Security</strong> has become one of the most critical industries globally, safeguarding organizations, governments, and individuals.
                        </p>
                        <p>
                            As businesses shift toward cloud, AI, and digital platforms, cybersecurity has evolved from a simple IT requirement into a core strategic business necessity.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-px bg-slate-200 shadow-3xl">
                    @php
                        $protected = [
                            ['icon' => 'server', 'label' => 'Networks & Servers'],
                            ['icon' => 'cloud-shield', 'label' => 'Cloud Infrastructure'],
                            ['icon' => 'database', 'label' => 'Intellectual Property'],
                            ['icon' => 'user-lock', 'label' => 'Customer Privacy'],
                        ];
                    @endphp
                    @foreach($protected as $p)
                        <div class="p-16 bg-white flex flex-col items-center justify-center text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-{{ $p['icon'] }} text-5xl mb-8 text-slate-200 group-hover:text-cyan-600 transition-all duration-500"></i>
                            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-400 group-hover:text-white transition-colors">{{ $p['label'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Global Landscape -->
            <div class="p-24 lg:p-32 bg-slate-950 relative overflow-hidden group shadow-3xl border border-white/5">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(6,182,212,0.05),transparent)]"></div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-24 items-center">
                    <div class="space-y-12">
                        <div class="space-y-4">
                            <span class="text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">International Market Dynamics</span>
                            <h3 class="text-6xl font-black text-white uppercase tracking-tighter italic">Global Landscape</h3>
                        </div>
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic border-l-8 border-cyan-600/30 pl-10 uppercase tracking-tighter">
                            Cyber Security is among the fastest-growing technology sectors worldwide, driven by global digital transformation.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/10 border border-white/10 shadow-3xl">
                            <div class="p-12 bg-slate-950 space-y-4 group/stat hover:bg-cyan-600 transition-all duration-500">
                                <p class="text-[10px] font-black uppercase text-slate-500 group-hover/stat:text-slate-950/70 tracking-[0.3em]">Market Value (2025)</p>
                                <p class="text-6xl font-black text-white group-hover/stat:text-slate-950 italic tracking-tighter">$250B+</p>
                            </div>
                            <div class="p-12 bg-slate-950 space-y-4 group/stat hover:bg-cyan-600 transition-all duration-500">
                                <p class="text-[10px] font-black uppercase text-slate-500 group-hover/stat:text-slate-950/70 tracking-[0.3em]">Projected (2031)</p>
                                <p class="text-6xl font-black text-cyan-400 group-hover/stat:text-slate-950 italic tracking-tighter">$500B+</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-10">
                        <h4 class="text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400">Primary Growth Drivers</h4>
                        <div class="space-y-px bg-white/10 border border-white/10 shadow-3xl">
                            @foreach([
                                'Rising cyber-attacks & ransomware',
                                'Expansion of cloud & remote work',
                                'Growth in AI, IoT & 5G infrastructure',
                                'Increasing data privacy regulations'
                            ] as $driver)
                            <div class="flex items-center gap-10 p-10 bg-slate-950 hover:bg-white/5 transition-all group/item">
                                <div class="w-2 h-2 bg-cyan-600 group-hover/item:scale-150 transition-transform"></div>
                                <span class="text-[14px] font-black uppercase tracking-[0.2em] text-slate-400 group-hover:text-white transition-colors">{{ $driver }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- India Ecosystem -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="order-2 lg:order-1 grid grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-1 h-full bg-slate-950 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.4em] mb-4">India Size (2025)</p>
                        <h4 class="text-5xl font-black text-slate-950 group-hover:text-white transition-colors tracking-tighter italic">$8 - 10B</h4>
                    </div>
                    <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <p class="text-[10px] font-black uppercase text-slate-400 tracking-[0.4em] mb-4">Growth Rate</p>
                        <h4 class="text-5xl font-black text-cyan-600 group-hover:text-cyan-400 transition-colors tracking-tighter italic">20% CAGR</h4>
                    </div>
                    <div class="col-span-2 p-16 lg:p-24 bg-slate-950 text-white space-y-12 relative overflow-hidden group">
                        <div class="absolute top-0 left-0 w-full h-1 bg-cyan-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400">Total Startups</span>
                            <span class="text-4xl font-black italic tracking-tighter">3,500+</span>
                        </div>
                        <div class="h-2 bg-white/5 border border-white/10 relative">
                            <div class="absolute top-0 left-0 h-full bg-cyan-600 w-2/3 group-hover:w-full transition-all duration-1000"></div>
                        </div>
                        <p class="text-[10px] text-slate-500 uppercase font-black tracking-[0.4em] text-center">BENGALURU • HYDERABAD • PUNE • NCR</p>
                    </div>
                </div>

                <div class="order-1 lg:order-2 space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">National Security Hub</span>
                        <h2 class="text-6xl font-black uppercase tracking-tighter italic">India Cyber <br><span class="text-cyan-600">Ecosystem.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-8 border-slate-100 pl-10 uppercase tracking-tighter">
                        India is emerging as one of the most promising cybersecurity markets due to rapid digital adoption and rising enterprise awareness.
                    </p>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @foreach(['Digital India initiatives', 'UPI / FinTech system expansion', 'Smart Cities & GovTech digitization', 'Enterprise cloud migration'] as $cat)
                        <div class="flex items-center gap-10 p-10 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                             <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-bolt text-cyan-600 group-hover:text-white transition-colors"></i>
                            <span class="text-[14px] font-black uppercase text-slate-700 group-hover:text-white tracking-[0.2em] transition-colors leading-tight italic">{{ $cat }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- High Growth Segments -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-cyan-600 text-[10px] font-black uppercase tracking-[0.4em]">Vertical Specialization</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">High-Growth Segments</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    @foreach(['Cloud Security', 'AI Threat Detection', 'Endpoint Protection', 'Network Security', 'Ethical Hacking', 'Cyber Risk Mgmt', 'Managed Services', 'Privacy Compliance'] as $seg)
                        <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-full h-1 bg-cyan-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-500"></div>
                             <p class="text-[10px] font-black uppercase text-slate-600 group-hover:text-white tracking-[0.2em] transition-colors italic leading-tight">{{ $seg }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Strategic Importance -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="space-y-16">
                    <div class="section-heading text-left">
                        <span class="subtitle">Systemic Resilience Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">Strategic <br><span class="text-cyan-600">Importance.</span></h2>
                        <div class="accent-line bg-cyan-600"></div>
                    </div>
                    <div class="space-y-px bg-slate-200 border border-slate-200 shadow-3xl">
                        @foreach([
                            'Protects critical digital infrastructure',
                            'Prevents financial & reputational losses',
                            'Secures customer trust and privacy',
                            'Enables safe digital transformation',
                            'Supports national security & defense'
                        ] as $imp)
                        <div class="flex items-center gap-10 p-12 bg-white group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                            <div class="absolute top-0 left-0 w-1 h-full bg-cyan-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                            <i class="fa-solid fa-shield-halved text-cyan-600 text-2xl group-hover:text-white transition-colors"></i>
                            <span class="text-[14px] font-black uppercase tracking-[0.15em] text-slate-900 group-hover:text-white transition-colors leading-tight italic">{{ $imp }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl border border-white/5">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(6,182,212,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-cyan-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Landscape
                        </div>
                        <h4 class="text-6xl font-black uppercase tracking-tighter italic text-cyan-600">Building <br><span class="text-white">The Shield.</span></h4>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-cyan-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            With cybercrime projected to become one of the world's largest economic threats, Cyber Security is no longer optional—it is foundational.
                        </p>
                        <div class="grid grid-cols-2 gap-px bg-white/5 pt-12 border border-white/10 shadow-2xl">
                             @foreach(['AI-FIRST', 'ZERO TRUST', 'QUANTUM-SECURE', 'SOVEREIGN CLOUD'] as $tag)
                                <span class="p-8 bg-slate-950 border border-white/5 text-[10px] font-black uppercase tracking-[0.4em] text-cyan-400 text-center hover:bg-cyan-600 hover:text-slate-950 transition-all cursor-default">{{ $tag }}</span>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(6,182,212,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Secure Your <br><span class="text-cyan-600">Digital Assets.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-cyan-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        Stay ahead of evolving digital threats. Explore cybersecurity frameworks, ethical hacking support, and AI-driven security solutions to protect your business ecosystem.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-cyan-600/30 hover:!bg-cyan-600">
                            Register for Security Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
