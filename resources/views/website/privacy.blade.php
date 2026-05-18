@extends('layouts.website')

@section('title', 'Privacy Policy | World Grexpo Foundation')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-brand-primary opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-brand-primary opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 backdrop-blur-md">
                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Institutional Compliance</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Privacy <br>
                <span class="text-brand-primary">Intelligence.</span>
            </h1>
            <div class="flex items-center justify-center gap-8">
                <div class="h-px w-12 bg-slate-800"></div>
                <p class="text-brand-accent font-black uppercase tracking-[0.4em] text-[10px]">
                    Effective Date: 18.04.2026 | Last Updated: {{ date('F d, Y') }}
                </p>
                <div class="h-px w-12 bg-slate-800"></div>
            </div>
        </div>
    </section>

    <!-- Content Interface -->
    <section class="py-32 bg-white relative">
        <div class="container relative z-10">
            <div class="max-w-[1200px] mx-auto space-y-48">
                
                <!-- Introduction Node -->
                <div class="p-16 bg-slate-50 border border-slate-100 shadow-2xl space-y-12 animate-on-scroll relative group">
                    <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
                    <div class="flex items-center gap-6">
                        <div class="w-16 h-16 bg-white border border-slate-200 flex items-center justify-center text-brand-primary shadow-sm group-hover:bg-brand-primary group-hover:text-white transition-all">
                            <i class="fa-solid fa-lock text-2xl"></i>
                        </div>
                        <h2 class="text-4xl font-black text-slate-900 uppercase tracking-tighter">01. Institutional Commitment</h2>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-brand-primary/20 pl-10">
                        World Grexpo Foundation is committed to safeguarding the proprietary and personal data of its global nodes. This Privacy Intelligence document outlines our absolute commitment to data integrity and transparency.
                    </p>
                </div>

                <!-- Policy Scope -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Compliance Scope</span>
                        <h2>02. Policy <br><span class="text-brand-primary">Scope.</span></h2>
                        <div class="accent-line"></div>
                        <p class="text-xl text-slate-400 font-medium mt-8">This mandate applies to all digital and institutional interactions including:</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @php
                            $scopes = [
                                'Institutional registrations (Summits, Awards)',
                                'Global Strategic Partnership Node Payments',
                                'Elite Membership Enrolments',
                                'Platform Analytics & Interaction Nodes'
                            ];
                        @endphp
                        @foreach($scopes as $scope)
                            <div class="p-10 bg-white flex items-center gap-8 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-link text-xs"></i>
                                </div>
                                <span class="text-xs font-black text-slate-900 group-hover:text-white uppercase tracking-[0.2em] transition-colors">{{ $scope }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Data Acquisition Grid -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Intelligence Retrieval</span>
                        <h2>03. Data <br><span class="text-brand-primary">Acquisition.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @foreach([
                            ['t' => 'Institutional Data', 'd' => 'Full Entity Name, Global Identifiers, Executive Contact Nodes, Industrial Billing Coordinates.', 'icon' => 'fa-building'],
                            ['t' => 'Node Transactions', 'd' => 'Quantum of payment and secure node transaction IDs. We do NOT store private banking tokens.', 'icon' => 'fa-credit-card'],
                            ['t' => 'Node Analytics', 'd' => 'IP node tracking, industrial browser metrics, and platform usage patterns via proprietary analytics.', 'icon' => 'fa-chart-network']
                        ] as $item)
                        <div class="p-12 bg-slate-950 group hover:bg-brand-primary transition-all duration-700">
                            <div class="w-16 h-16 bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary-dark group-hover:text-white transition-all mb-10 shadow-xl">
                                <i class="fa-solid {{ $item['icon'] }} text-2xl"></i>
                            </div>
                            <h4 class="text-2xl font-black text-white mb-6 uppercase tracking-tighter group-hover:text-slate-950 transition-colors">{{ $item['t'] }}</h4>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] leading-relaxed group-hover:text-slate-900 transition-colors">{{ $item['d'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Security Architecture -->
                <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden shadow-3xl group animate-on-scroll">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-12">
                        <div class="flex items-center gap-8">
                            <div class="w-24 h-24 bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary text-4xl shadow-2xl group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter">05. Security Architecture</h3>
                        </div>
                        
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic max-w-4xl border-l-4 border-brand-primary pl-10">
                            All global node transactions are structurally secured via elite payment gateway partners. Data is encrypted using PCI-DSS standards. World Grexpo Foundation maintains absolute zero-storage policy for sensitive financial credentials.
                        </p>
                        
                        <div class="flex flex-wrap items-center gap-4 pt-12 border-t border-white/5">
                            <div class="px-8 py-3 bg-white/5 border border-white/10 text-[10px] font-black text-brand-accent uppercase tracking-[0.4em] shadow-xl">
                                PCI-DSS Protocol
                            </div>
                            <div class="px-8 py-3 bg-white/5 border border-white/10 text-[10px] font-black text-brand-accent uppercase tracking-[0.4em] shadow-xl">
                                AES-256 Encryption
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rights & Compliance Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-2xl animate-on-scroll">
                    <div class="p-16 bg-white group hover:bg-slate-950 transition-all duration-700">
                        <h4 class="text-3xl font-black text-slate-900 mb-8 uppercase tracking-tighter group-hover:text-brand-primary transition-colors">06. Institutional Rights</h4>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em] leading-relaxed group-hover:text-slate-400 transition-colors">
                            Global entities maintain the right to access, rectify, or terminate their institutional data nodes within the World Grexpo network.
                        </p>
                    </div>
                    
                    <div class="p-16 bg-white group hover:bg-slate-950 transition-all duration-700">
                        <h4 class="text-3xl font-black text-slate-900 mb-8 uppercase tracking-tighter group-hover:text-brand-primary transition-colors">07. Data Nodes</h4>
                        <div class="space-y-6">
                            <a href="mailto:info@worldgrexpo.in" class="block text-3xl font-black text-slate-900 group-hover:text-white tracking-tighter transition-colors uppercase">info@worldgrexpo.in</a>
                            <a href="mailto:ighosh.1457@gmail.com" class="block text-3xl font-black text-slate-900 group-hover:text-white tracking-tighter transition-colors">ighosh.1457@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Identity Compliance -->
                <div class="p-16 lg:p-24 bg-slate-950 border border-white/5 shadow-3xl animate-on-scroll">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="space-y-4">
                            <span class="text-[10px] font-black text-brand-accent uppercase tracking-[0.4em]">Industrial Identity</span>
                            <div class="text-5xl font-black text-white uppercase tracking-tighter leading-none">GST: 07AAGTM3462J2ZB</div>
                        </div>
                        <div class="space-y-4 md:text-right">
                            <span class="text-[10px] font-black text-brand-accent uppercase tracking-[0.4em]">Entity Classification</span>
                            <div class="text-5xl font-black text-white uppercase tracking-tighter leading-none">Global Think-Tank</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
