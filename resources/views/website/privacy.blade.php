@extends('layouts.website')

@section('title', 'Privacy Policy | World Grexpo Foundation')

@section('content')

    <!-- Premium Hero Section -->
    <section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>
        
        <!-- Animated Decorators -->
        <div class="absolute top-1/4 right-0 w-[600px] h-[600px] bg-brand-primary/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-accent/5 rounded-full blur-[100px]"></div>

        <div class="container relative z-10 text-center space-y-10">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                Institutional Compliance
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Privacy <br>
                <span class="text-brand-primary italic">Intelligence.</span>
            </h1>
            <p class="text-brand-accent font-black uppercase tracking-[0.4em] text-[10px]">
                Effective Date: 18.04.2026 | Last Updated: {{ date('F d, Y') }}
            </p>
        </div>
    </section>

    <!-- Content Architecture -->
    <section class="section-padding bg-white relative">
        <div class="container relative z-10">
            <div class="max-w-[1100px] mx-auto space-y-32">
                
                <!-- Introduction Node -->
                <div class="p-16 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-xl space-y-8 animate-on-scroll">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-brand-primary/10 flex items-center justify-center text-brand-primary">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tighter italic">01. Institutional Commitment</h2>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-brand-primary/20 pl-10">
                        World Grexpo Foundation is committed to safeguarding the proprietary and personal data of its global nodes. This Privacy Intelligence document outlines our absolute commitment to data integrity and transparency.
                    </p>
                </div>

                <!-- Policy Scope -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">02. Policy Scope</h3>
                        <p class="text-xl text-slate-400 font-medium">This mandate applies to all digital and institutional interactions including:</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @php
                            $scopes = [
                                'Institutional registrations (Summits, Awards)',
                                'Global Strategic Partnership Node Payments',
                                'Elite Membership Enrolments',
                                'Platform Analytics & Interaction Nodes'
                            ];
                        @endphp
                        @foreach($scopes as $scope)
                            <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 flex items-center gap-6 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-link text-xs"></i>
                                </div>
                                <span class="text-sm font-black text-slate-900 group-hover:text-white uppercase tracking-widest transition-colors">{{ $scope }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Data Acquisition Grid -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">03. Data Acquisition</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach([
                            ['t' => 'Institutional Data', 'd' => 'Full Entity Name, Global Identifiers, Executive Contact Nodes, Industrial Billing Coordinates.', 'icon' => 'fa-building'],
                            ['t' => 'Node Transactions', 'd' => 'Quantum of payment and secure node transaction IDs. We do NOT store private banking tokens.', 'icon' => 'fa-credit-card'],
                            ['t' => 'Node Analytics', 'd' => 'IP node tracking, industrial browser metrics, and platform usage patterns via proprietary analytics.', 'icon' => 'fa-chart-network']
                        ] as $item)
                        <div class="p-10 rounded-[3rem] bg-slate-950 group hover:bg-brand-primary transition-all duration-700 shadow-2xl">
                            <div class="w-14 h-14 rounded-2xl bg-white/5 flex items-center justify-center text-brand-accent group-hover:bg-white group-hover:text-brand-primary transition-all mb-8 shadow-xl">
                                <i class="fa-solid {{ $item['icon'] }} text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter italic transition-colors">{{ $item['t'] }}</h4>
                            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest leading-loose group-hover:text-white/80 transition-colors">{{ $item['d'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Security Architecture -->
                <div class="relative p-16 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl group animate-on-scroll">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-primary/20 rounded-full blur-3xl"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-10">
                        <div class="flex items-center gap-6">
                            <div class="w-20 h-20 rounded-[2rem] bg-brand-primary/10 flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <h3 class="text-4xl font-black text-white uppercase tracking-tighter italic">05. Security Architecture</h3>
                        </div>
                        
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic max-w-3xl">
                            All global node transactions are structurally secured via elite payment gateway partners. Data is encrypted using PCI-DSS standards. World Grexpo Foundation maintains absolute zero-storage policy for sensitive financial credentials.
                        </p>
                        
                        <div class="flex flex-wrap items-center gap-6 pt-10 border-t border-white/5">
                            <div class="px-8 py-3 rounded-full bg-white/5 border border-white/10 text-[10px] font-black text-brand-accent uppercase tracking-widest shadow-xl">
                                PCI-DSS Protocol
                            </div>
                            <div class="px-8 py-3 rounded-full bg-white/5 border border-white/10 text-[10px] font-black text-brand-accent uppercase tracking-widest shadow-xl">
                                AES-256 Encryption
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rights & Compliance Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 animate-on-scroll">
                    <div class="p-12 rounded-[3.5rem] bg-slate-50 border border-slate-100 group hover:bg-slate-950 transition-all duration-700">
                        <h4 class="text-2xl font-black text-slate-900 mb-6 uppercase tracking-tighter italic group-hover:text-brand-primary transition-colors">06. Institutional Rights</h4>
                        <p class="text-sm font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">
                            Global entities maintain the right to access, rectify, or terminate their institutional data nodes.
                        </p>
                    </div>
                    
                    <div class="p-12 rounded-[3.5rem] bg-slate-50 border border-slate-100 group hover:bg-slate-950 transition-all duration-700">
                        <h4 class="text-2xl font-black text-slate-900 mb-6 uppercase tracking-tighter italic group-hover:text-brand-primary transition-colors">07. Data Nodes</h4>
                        <div class="space-y-4">
                            <a href="mailto:info@worldgrexpo.in" class="block text-xl font-black text-slate-900 group-hover:text-white italic tracking-tighter transition-colors">info@worldgrexpo.in</a>
                            <a href="mailto:ighosh.1457@gmail.com" class="block text-xl font-black text-slate-900 group-hover:text-white italic tracking-tighter transition-colors">ighosh.1457@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- Identity Compliance -->
                <div class="p-12 md:p-20 rounded-[4rem] bg-slate-950 border border-white/5 animate-on-scroll">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                        <div class="space-y-2">
                            <span class="text-[10px] font-black text-brand-accent uppercase tracking-[0.4em] italic">Industrial Identity</span>
                            <div class="text-4xl font-black text-white uppercase tracking-tighter italic">GST: 07AAGTM3462J2ZB</div>
                        </div>
                        <div class="space-y-2 md:text-right">
                            <span class="text-[10px] font-black text-brand-accent uppercase tracking-[0.4em] italic">Entity Classification</span>
                            <div class="text-4xl font-black text-white uppercase tracking-tighter italic">Global Think-Tank</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@endsection
