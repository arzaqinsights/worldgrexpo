@extends('layouts.website')

@section('title', 'Terms & Conditions | World Grexpo Foundation')

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
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Institutional Mandate</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                Terms & <br>
                <span class="text-brand-primary">Conditions.</span>
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
                            <i class="fa-solid fa-file-contract text-2xl"></i>
                        </div>
                        <h2 class="text-4xl font-black text-slate-900 uppercase tracking-tighter">01. Protocol Introduction</h2>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-brand-primary/20 pl-10">
                        Welcome to the World Grexpo Foundation. By accessing our platform, registering for global summits, or making industrial payments, you agree to comply with and be bound by these Terms & Conditions.
                    </p>
                </div>

                <!-- Scope of Services -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Institutional Scope</span>
                        <h2>02. Scope of <br><span class="text-brand-primary">Services.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
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
                            <div class="p-10 bg-white flex items-center gap-8 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-12 h-12 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </div>
                                <span class="text-xs font-black text-slate-900 group-hover:text-white uppercase tracking-[0.2em] transition-colors">{{ $service }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Eligibility Node -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">User Eligibility</span>
                        <h2>03. Protocol <br><span class="text-brand-primary">Eligibility.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @foreach([
                            'Entities must be legally registered and compliant with global industrial standards.',
                            'All provided intelligence must be accurate and verifiable.',
                            'WGF reserves the absolute right to refuse access to its elite platforms.'
                        ] as $rule)
                            <div class="p-12 bg-white group hover:bg-slate-950 transition-all duration-700">
                                <p class="text-xl text-slate-500 font-medium leading-relaxed italic group-hover:text-white transition-colors">
                                    "{!! $rule !!}"
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Registration Protocols -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Onboarding</span>
                        <h2>04. Registration <br><span class="text-brand-primary">Protocols.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    
                    <div class="grid gap-px bg-slate-200 border border-slate-200 shadow-2xl">
                        @foreach([
                            'Registration nodes are confirmed only after absolute payment clearance.',
                            'Institutional passes are strictly non-transferable without executive approval.',
                            'WGF reserves the right to modify industrial summit nodes due to unforeseen global shifts.'
                        ] as $protocol)
                            <div class="p-12 bg-white flex items-center gap-10 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-16 h-16 bg-slate-50 border border-slate-100 flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-check text-2xl"></i>
                                </div>
                                <span class="text-2xl text-slate-500 font-medium italic group-hover:text-white transition-colors">{{ $protocol }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Financial Standards -->
                <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden shadow-3xl group animate-on-scroll">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-12">
                        <div class="flex items-center gap-8">
                            <div class="w-24 h-24 bg-white/5 border border-white/10 flex items-center justify-center text-brand-primary text-4xl shadow-2xl group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-vault"></i>
                            </div>
                            <h3 class="text-5xl font-black text-white uppercase tracking-tighter">05. Financial Standards</h3>
                        </div>
                        
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic max-w-4xl border-l-4 border-brand-primary pl-10">
                            Institutional pricing is listed in INR for Indian nodes and USD for global nodes. All transactions are governed by international financial compliance. World Grexpo Foundation utilizes top-tier encrypted protocols; we do not store sensitive financial data on our internal servers.
                        </p>
                    </div>
                </div>

                <!-- Refusal & Credits -->
                <div class="space-y-16 animate-on-scroll">
                    <div class="section-heading text-left">
                        <span class="subtitle">Compliance</span>
                        <h2>06. Refusal & <br><span class="text-brand-primary">Credits.</span></h2>
                        <div class="accent-line"></div>
                    </div>
                    <div class="p-16 bg-slate-50 border border-slate-100 shadow-2xl relative group">
                        <div class="absolute top-0 left-0 w-2 h-full bg-brand-primary"></div>
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic">
                            Confirmed registrations are structurally non-refundable. In the event of a summit node postponement by World Grexpo Foundation, institutional credits for future nodes will be systematically applied.
                        </p>
                    </div>
                </div>

                <!-- Partnership & Conduct Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-2xl animate-on-scroll">
                    @foreach([
                        ['t' => '07. Partnership Terms', 'd' => 'Strategic fees are non-refundable. Deliverables are governed by the primary partnership mandate.'],
                        ['t' => '08. Intellectual Property', 'd' => 'All industrial content, branding, and intelligence are the proprietary property of WGF.'],
                        ['t' => '09. Institutional Conduct', 'd' => 'Disruption of industrial nodes or false representation will lead to immediate node termination.'],
                        ['t' => '10. Liability Limits', 'd' => 'WGF is not liable for indirect industrial losses or technical node failures beyond our control.']
                    ] as $term)
                        <div class="p-16 bg-white group hover:bg-slate-950 transition-all duration-700">
                            <h4 class="text-2xl font-black text-slate-900 mb-8 uppercase tracking-tighter group-hover:text-brand-primary transition-colors">{{ $term['t'] }}</h4>
                            <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.3em] leading-relaxed group-hover:text-slate-400 transition-colors">
                                {{ $term['d'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Legal Support Channel -->
                <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden shadow-3xl animate-on-scroll border-t border-white/5">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-24">
                        <div class="space-y-10">
                            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-brand-accent text-[10px] font-black uppercase tracking-[0.4em]">
                                <span class="w-2 h-2 bg-brand-accent animate-pulse"></span>
                                Legal Administration
                            </div>
                            <h3 class="text-6xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                                Architecting <br> <span class="text-brand-primary">Compliance.</span>
                            </h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-24 pt-24 border-t border-white/10">
                            <div class="space-y-6">
                                <span class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.4em]">General Inquiry</span>
                                <a href="mailto:ighosh.1457@gmail.com" class="text-4xl font-black text-white hover:text-brand-primary transition-colors">ighosh.1457@gmail.com</a>
                            </div>
                            <div class="space-y-6">
                                <span class="block text-[10px] font-black text-slate-500 uppercase tracking-[0.4em]">Legal Administration</span>
                                <a href="mailto:info@worldgrexpo.in" class="text-4xl font-black text-white hover:text-brand-primary transition-colors uppercase">info@worldgrexpo.in</a>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center justify-between gap-12 pt-24 border-t border-white/10">
                            <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.5em]">World Grexpo Foundation © {{ date('Y') }}</p>
                            <img src="{{ asset('images/logo.png') }}" alt="WGF" class="h-10 grayscale opacity-40">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
