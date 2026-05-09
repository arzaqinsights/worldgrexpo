@extends('layouts.website')

@section('title', 'Terms & Conditions | World Grexpo Foundation')

@section('content')
<!-- Hero Section -->
<section class="pt-48 pb-24 bg-slate-950 relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:50px_50px]"></div>
    </div>
    <div class="container relative z-10 text-left">
        <div class="max-w-4xl">
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 uppercase tracking-tighter italic leading-[0.85]">Terms & <span class="text-brand-accent">Conditions</span></h1>
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
                        Welcome to the World Grexpo Foundation. By accessing our platform, registering for global summits, or making industrial payments, you agree to comply with and be bound by these Terms & Conditions.
                    </p>
                </div>

                <div class="space-y-24">
                    <!-- Scope of Services -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">02</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Scope of Services</h3>
                        </div>
                        <div class="bg-white border border-slate-100 p-12 rounded-sm shadow-2xl">
                            <p class="text-slate-950 mb-8 font-black uppercase tracking-widest text-xs">World Grexpo Foundation provides:</p>
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-6 list-none p-0">
                                @php
                                    $services = [
                                        'Global Sustainability Summits & Expos',
                                        'Industrial Excellence Award Platforms',
                                        'Elite Institutional Membership',
                                        'Global Strategic Partnerships',
                                        'Zero-Carbon Industrial Facilitation'
                                    ];
                                @endphp
                                @foreach($services as $service)
                                    <li class="flex items-center gap-4 text-sm font-black text-slate-700 uppercase tracking-tight">
                                        <div class="w-2 h-2 bg-brand-accent rounded-sm"></div> {{ $service }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>

                    <!-- User Eligibility -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">03</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">User Eligibility</h3>
                        </div>
                        <ul class="space-y-6 text-slate-500 font-light text-xl list-none p-0">
                            <li class="flex items-start gap-4">
                                <span class="text-brand-primary font-black">/</span>
                                <span>Entities must be legally registered and compliant with global industrial standards.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="text-brand-primary font-black">/</span>
                                <span>All provided intelligence must be accurate and verifiable.</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="text-brand-primary font-black">/</span>
                                <span>World Grexpo Foundation reserves the absolute right to refuse access to its elite platforms.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Event Registration -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">04</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Registration Protocols</h3>
                        </div>
                        <ul class="space-y-8 text-slate-500 font-light text-xl list-none p-0">
                            <li class="flex items-start gap-6 group">
                                <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center shrink-0 rounded-sm group-hover:bg-slate-950 transition-all duration-500">
                                    <i class="fa-solid fa-check text-brand-accent text-xs"></i>
                                </div>
                                <span>Registration nodes are confirmed only after absolute payment clearance.</span>
                            </li>
                            <li class="flex items-start gap-6 group">
                                <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center shrink-0 rounded-sm group-hover:bg-slate-950 transition-all duration-500">
                                    <i class="fa-solid fa-check text-brand-accent text-xs"></i>
                                </div>
                                <span>Institutional passes are strictly non-transferable without executive approval.</span>
                            </li>
                            <li class="flex items-start gap-6 group">
                                <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center shrink-0 rounded-sm group-hover:bg-slate-950 transition-all duration-500">
                                    <i class="fa-solid fa-check text-brand-accent text-xs"></i>
                                </div>
                                <span>WGF reserves the right to modify industrial summit nodes due to unforeseen global shifts.</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Payments & Pricing -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">05</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Financial Standards</h3>
                        </div>
                        <div class="bg-slate-950 p-12 rounded-sm border-r-8 border-brand-primary shadow-2xl">
                            <p class="text-slate-300 font-light leading-relaxed text-xl italic">
                                Institutional pricing is listed in INR for Indian nodes and USD for global nodes. All transactions are governed by international financial compliance. World Grexpo Foundation utilizes top-tier encrypted protocols; we do not store sensitive financial data on our internal servers.
                            </p>
                        </div>
                    </section>

                    <!-- Cancellation & Refund -->
                    <section>
                        <div class="flex items-center gap-6 mb-10">
                            <span class="text-8xl font-black text-slate-100 italic leading-none">06</span>
                            <h3 class="text-4xl font-black text-slate-950 uppercase tracking-tighter italic">Refusal & Credits</h3>
                        </div>
                        <p class="text-slate-500 font-light text-xl mb-10 leading-relaxed">
                            Confirmed registrations are structurally non-refundable. In the event of a summit node postponement by World Grexpo Foundation, institutional credits for future nodes will be systematically applied.
                        </p>
                    </section>

                    <!-- Grid Layout for remaining terms -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-16 border-t border-slate-100">
                        <div class="p-10 bg-slate-50 rounded-sm hover:bg-slate-950 transition-all duration-700 group">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic group-hover:text-brand-accent transition-colors">07. Partnership Terms</h4>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">Strategic fees are non-refundable. Deliverables are governed by the primary partnership mandate.</p>
                        </div>
                        <div class="p-10 bg-slate-50 rounded-sm hover:bg-slate-950 transition-all duration-700 group">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic group-hover:text-brand-accent transition-colors">08. Intellectual Property</h4>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">All industrial content, branding, and intelligence are the proprietary property of WGF.</p>
                        </div>
                        <div class="p-10 bg-slate-50 rounded-sm hover:bg-slate-950 transition-all duration-700 group">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic group-hover:text-brand-accent transition-colors">09. Institutional Conduct</h4>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">Disruption of industrial nodes or false representation will lead to immediate node termination.</p>
                        </div>
                        <div class="p-10 bg-slate-50 rounded-sm hover:bg-slate-950 transition-all duration-700 group">
                            <h4 class="font-black text-slate-950 mb-4 uppercase tracking-tighter italic group-hover:text-brand-accent transition-colors">10. Liability Limits</h4>
                            <p class="text-xs font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">WGF is not liable for indirect industrial losses or technical node failures beyond our control.</p>
                        </div>
                    </div>

                    <!-- Contact Footer -->
                    <div class="mt-32 p-16 rounded-sm bg-slate-950 text-left relative overflow-hidden group">
                        <div class="absolute inset-0 z-0">
                            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff02_1px,transparent_1px),linear-gradient(to_bottom,#ffffff02_1px,transparent_1px)] bg-[size:30px_30px]"></div>
                        </div>
                        <div class="relative z-10">
                            <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-primary/10 border-l-4 border-brand-primary mb-10">
                                <span class="text-brand-primary text-[10px] font-black tracking-[0.4em] uppercase">Legal Support Node</span>
                            </div>
                            <h3 class="text-4xl md:text-6xl font-black text-white mb-8 uppercase tracking-tighter italic leading-none">Architecting <br> <span class="text-brand-accent">Compliance</span></h3>
                            <div class="flex flex-col md:flex-row gap-12 mb-12">
                                <div>
                                    <span class="block text-[10px] font-black uppercase tracking-widest text-slate-500 mb-2">General Inquiry</span>
                                    <a href="mailto:ighosh.1457@gmail.com" class="text-xl font-black text-white hover:text-brand-accent transition-colors italic">ighosh.1457@gmail.com</a>
                                </div>
                                <div>
                                    <span class="block text-[10px] font-black uppercase tracking-widest text-slate-500 mb-2">Legal Administration</span>
                                    <a href="mailto:info@worldgrexpo.in" class="text-xl font-black text-white hover:text-brand-accent transition-colors italic uppercase">info@worldgrexpo.in</a>
                                </div>
                            </div>
                            <div class="w-full h-px bg-white/10 mb-8"></div>
                            <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.5em]">World Grexpo Foundation © {{ date('Y') }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
