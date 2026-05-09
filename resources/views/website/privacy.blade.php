@extends('layouts.website')

@section('title', 'Privacy Policy | World Grexpo Foundation')

@section('content')
<!-- Hero Section -->
<section class="pt-48 pb-24 bg-slate-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    <div class="container relative z-10 text-left">
        <div class="max-w-4xl">
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 uppercase tracking-tighter italic leading-[0.85]">Privacy <span class="text-brand-accent">Intelligence</span></h1>
            <p class="text-brand-accent font-black uppercase tracking-[0.4em] text-[10px]">Effective Date: 18.04.2026 | Last Updated: {{ date('F d, Y') }}</p>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="py-32 bg-white">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            
            <div class="prose prose-slate prose-xl max-w-none">
                <div class="bg-slate-50 border-l-8 border-brand-primary p-12 rounded-sm mb-20 shadow-2xl">
                    <h2 class="text-3xl font-black text-slate-950 mb-6 uppercase tracking-tighter italic">1. Introduction</h2>
                    <p class="text-slate-600 leading-relaxed font-light text-xl">
                        World Grexpo Foundation is committed to safeguarding the proprietary and personal data of its global nodes. This Privacy Intelligence document outlines our absolute commitment to data integrity and transparency.
                    </p>
                </div>

                <div class="space-y-24">
                    <!-- Scope of Policy -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">02</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Policy Scope</h3>
                        </div>
                        <p class="text-slate-500 font-light text-xl mb-10">This mandate applies to all digital and institutional interactions including:</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @php
                                $scopes = [
                                    'Institutional registrations (Summits, Awards)',
                                    'Global Strategic Partnership Node Payments',
                                    'Elite Membership Enrolments',
                                    'Platform Analytics & Interaction Nodes'
                                ];
                            @endphp
                            @foreach($scopes as $scope)
                                <div class="bg-slate-50 p-6 rounded-sm border border-slate-100 flex items-center gap-4 group hover:bg-slate-950 transition-all duration-500">
                                    <div class="w-2 h-2 bg-brand-accent rounded-sm"></div>
                                    <span class="text-xs font-black text-slate-950 uppercase tracking-widest group-hover:text-white transition-colors">{{ $scope }}</span>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <!-- Information Collection -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">03</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Data Acquisition</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                            <div class="bg-slate-950 p-10 rounded-sm group hover:bg-brand-primary transition-all duration-700">
                                <h4 class="font-black text-brand-accent mb-4 uppercase tracking-tighter italic text-xl group-hover:text-white transition-colors">Institutional Data</h4>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose group-hover:text-white transition-colors">Full Entity Name, Global Identifiers, Executive Contact Nodes, Industrial Billing Coordinates.</p>
                            </div>
                            <div class="bg-slate-950 p-10 rounded-sm group hover:bg-brand-primary transition-all duration-700">
                                <h4 class="font-black text-brand-accent mb-4 uppercase tracking-tighter italic text-xl group-hover:text-white transition-colors">Node Transactions</h4>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose group-hover:text-white transition-colors">Quantum of payment and secure node transaction IDs. <span class="text-white">We do NOT store private banking tokens.</span></p>
                            </div>
                            <div class="bg-slate-950 p-10 rounded-sm group hover:bg-brand-primary transition-all duration-700">
                                <h4 class="font-black text-brand-accent mb-4 uppercase tracking-tighter italic text-xl group-hover:text-white transition-colors">Node Analytics</h4>
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest leading-loose group-hover:text-white transition-colors">IP node tracking, industrial browser metrics, and platform usage patterns via proprietary analytics.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Purpose of Collection -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">04</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Strategic Intent</h3>
                        </div>
                        <p class="text-slate-500 font-light text-xl leading-relaxed">
                            Acquired data is utilized strictly to process institutional registrations, generate global financial compliance (GST/VAT), facilitate industrial matchmaking, and broadcast critical summit intelligence.
                        </p>
                    </section>

                    <!-- Payment Security -->
                    <section class="bg-slate-950 p-16 rounded-sm text-white overflow-hidden relative group">
                        <div class="absolute inset-0 z-0">
                            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                        </div>
                        <h3 class="text-4xl font-black mb-8 flex items-center gap-6 relative z-10 uppercase tracking-tighter italic">
                            <i class="fa-solid fa-shield-halved text-brand-accent"></i>
                            05. Security Architecture
                        </h3>
                        <p class="text-slate-400 font-light text-xl leading-relaxed relative z-10 mb-10 max-w-3xl">
                            All global node transactions are structurally secured via elite payment gateway partners. Data is encrypted using PCI-DSS standards. World Grexpo Foundation maintains absolute zero-storage policy for sensitive financial credentials.
                        </p>
                        <div class="flex flex-wrap items-center gap-4 relative z-10">
                            <span class="px-6 py-3 bg-white/5 border border-white/10 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] text-brand-accent group-hover:bg-brand-accent group-hover:text-slate-950 transition-all duration-700">PCI-DSS Compliant</span>
                            <span class="px-6 py-3 bg-white/5 border border-white/10 rounded-sm text-[10px] font-black uppercase tracking-[0.3em] text-brand-accent group-hover:bg-brand-accent group-hover:text-slate-950 transition-all duration-700">AES-256 Encrypted</span>
                        </div>
                    </section>

                    <!-- Rights & Contact -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-16 border-t border-slate-100">
                        <div class="p-12 bg-slate-50 rounded-sm group hover:bg-slate-950 transition-all duration-700">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic text-2xl group-hover:text-brand-accent transition-colors">06. Institutional Rights</h4>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">Global entities maintain the right to access, rectify, or terminate their institutional data nodes.</p>
                        </div>
                        <div class="p-12 bg-slate-50 rounded-sm group hover:bg-slate-950 transition-all duration-700">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic text-2xl group-hover:text-brand-accent transition-colors">07. Data Nodes</h4>
                            <div class="space-y-2">
                                <a href="mailto:info@worldgrexpo.in" class="block text-sm font-black text-slate-950 group-hover:text-white uppercase italic tracking-tighter">info@worldgrexpo.in</a>
                                <a href="mailto:ighosh.1457@gmail.com" class="block text-sm font-black text-slate-950 group-hover:text-white italic tracking-tighter">ighosh.1457@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <!-- Compliance -->
                    <div class="mt-24 p-12 bg-slate-50 border border-slate-100 rounded-sm">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                            <div class="text-left">
                                <span class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 block mb-3 italic">Industrial Identity</span>
                                <span class="text-3xl font-black text-slate-950 uppercase tracking-tighter italic">GST: 07AAGTM3462J2ZB</span>
                            </div>
                            <div class="w-px h-20 bg-slate-200 hidden md:block"></div>
                            <div class="text-right">
                                <span class="text-[10px] font-black uppercase tracking-[0.5em] text-slate-400 block mb-3 italic">Entity Classification</span>
                                <span class="text-3xl font-black text-slate-950 uppercase tracking-tighter italic">Registered Global Think-Tank</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
