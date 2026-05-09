@extends('layouts.website')

@section('title', 'Terms & Conditions | World Grexpo Foundation')

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
                Institutional Mandate
            </div>
            <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.9] tracking-tighter uppercase">
                Terms & <br>
                <span class="text-brand-primary italic">Conditions.</span>
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
                            <i class="fa-solid fa-file-contract"></i>
                        </div>
                        <h2 class="text-3xl font-black text-slate-900 uppercase tracking-tighter italic">01. Protocol Introduction</h2>
                    </div>
                    <p class="text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-brand-primary/20 pl-10">
                        Welcome to the World Grexpo Foundation. By accessing our platform, registering for global summits, or making industrial payments, you agree to comply with and be bound by these Terms & Conditions.
                    </p>
                </div>

                <!-- Scope of Services -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">02. Scope of Services</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
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
                            <div class="p-8 rounded-[2.5rem] bg-slate-50 border border-slate-100 flex items-center gap-6 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-12 h-12 rounded-full bg-white shadow-sm flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-arrow-right text-xs"></i>
                                </div>
                                <span class="text-sm font-black text-slate-900 group-hover:text-white uppercase tracking-widest transition-colors">{{ $service }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Eligibility Node -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">03. User Eligibility</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach([
                            'Entities must be legally registered and compliant with global industrial standards.',
                            'All provided intelligence must be accurate and verifiable.',
                            'WGF reserves the absolute right to refuse access to its elite platforms.'
                        ] as $rule)
                            <div class="p-10 rounded-[3rem] bg-slate-50 border border-slate-100 group hover:bg-slate-950 transition-all duration-700">
                                <p class="text-xl text-slate-500 font-medium leading-relaxed italic group-hover:text-white transition-colors">
                                    "{!! $rule !!}"
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Registration Protocols -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">04. Registration Protocols</h3>
                    </div>
                    
                    <div class="space-y-6">
                        @foreach([
                            'Registration nodes are confirmed only after absolute payment clearance.',
                            'Institutional passes are strictly non-transferable without executive approval.',
                            'WGF reserves the right to modify industrial summit nodes due to unforeseen global shifts.'
                        ] as $protocol)
                            <div class="p-10 rounded-[3rem] bg-slate-50 border border-slate-100 flex items-center gap-8 group hover:bg-slate-950 transition-all duration-700">
                                <div class="w-14 h-14 rounded-2xl bg-white shadow-xl flex items-center justify-center text-brand-primary group-hover:bg-brand-primary group-hover:text-white transition-all">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <span class="text-2xl text-slate-500 font-medium italic group-hover:text-white transition-colors">{{ $protocol }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Financial Standards -->
                <div class="relative p-16 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl group animate-on-scroll">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-primary/20 rounded-full blur-3xl"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-10">
                        <div class="flex items-center gap-6">
                            <div class="w-20 h-20 rounded-[2rem] bg-brand-primary/10 flex items-center justify-center text-brand-primary text-4xl shadow-2xl border border-brand-primary/20 group-hover:bg-brand-primary group-hover:text-white transition-all">
                                <i class="fa-solid fa-vault"></i>
                            </div>
                            <h3 class="text-4xl font-black text-white uppercase tracking-tighter italic">05. Financial Standards</h3>
                        </div>
                        
                        <p class="text-2xl text-slate-400 font-medium leading-relaxed italic max-w-4xl">
                            Institutional pricing is listed in INR for Indian nodes and USD for global nodes. All transactions are governed by international financial compliance. World Grexpo Foundation utilizes top-tier encrypted protocols; we do not store sensitive financial data on our internal servers.
                        </p>
                    </div>
                </div>

                <!-- Refusal & Credits -->
                <div class="space-y-12 animate-on-scroll">
                    <div class="space-y-4">
                        <div class="h-1 w-24 bg-brand-primary"></div>
                        <h3 class="text-4xl font-black text-slate-900 uppercase tracking-tighter italic">06. Refusal & Credits</h3>
                    </div>
                    <div class="p-16 rounded-[4rem] bg-slate-50 border border-slate-100 shadow-xl">
                        <p class="text-2xl text-slate-500 font-medium leading-relaxed italic">
                            Confirmed registrations are structurally non-refundable. In the event of a summit node postponement by World Grexpo Foundation, institutional credits for future nodes will be systematically applied.
                        </p>
                    </div>
                </div>

                <!-- Partnership & Conduct Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 animate-on-scroll">
                    @foreach([
                        ['t' => '07. Partnership Terms', 'd' => 'Strategic fees are non-refundable. Deliverables are governed by the primary partnership mandate.'],
                        ['t' => '08. Intellectual Property', 'd' => 'All industrial content, branding, and intelligence are the proprietary property of WGF.'],
                        ['t' => '09. Institutional Conduct', 'd' => 'Disruption of industrial nodes or false representation will lead to immediate node termination.'],
                        ['t' => '10. Liability Limits', 'd' => 'WGF is not liable for indirect industrial losses or technical node failures beyond our control.']
                    ] as $term)
                        <div class="p-12 rounded-[3.5rem] bg-slate-50 border border-slate-100 group hover:bg-slate-950 transition-all duration-700">
                            <h4 class="text-2xl font-black text-slate-900 mb-6 uppercase tracking-tighter italic group-hover:text-brand-primary transition-colors">{{ $term['t'] }}</h4>
                            <p class="text-sm font-bold text-slate-500 uppercase tracking-widest leading-loose group-hover:text-slate-400 transition-colors">
                                {{ $term['d'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Legal Support Channel -->
                <div class="relative p-16 rounded-[4rem] bg-slate-950 overflow-hidden shadow-2xl animate-on-scroll">
                    <div class="absolute inset-0 z-0">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
                    </div>
                    
                    <div class="relative z-10 space-y-12">
                        <div class="space-y-6">
                            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-brand-accent text-[10px] font-black uppercase tracking-[0.3em]">
                                Legal Administration
                            </div>
                            <h3 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter italic leading-none">
                                Architecting <br> <span class="text-brand-primary">Compliance.</span>
                            </h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 pt-12 border-t border-white/5">
                            <div class="space-y-4">
                                <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">General Inquiry</span>
                                <a href="mailto:ighosh.1457@gmail.com" class="text-2xl font-black text-white hover:text-brand-primary transition-colors italic">ighosh.1457@gmail.com</a>
                            </div>
                            <div class="space-y-4">
                                <span class="block text-[10px] font-black text-slate-500 uppercase tracking-widest">Legal Administration</span>
                                <a href="mailto:info@worldgrexpo.in" class="text-2xl font-black text-white hover:text-brand-primary transition-colors italic uppercase">info@worldgrexpo.in</a>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-12 border-t border-white/5">
                            <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.5em]">World Grexpo Foundation © {{ date('Y') }}</p>
                            <img src="{{ asset('images/logo.png') }}" alt="WGF" class="h-8 grayscale opacity-20">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
@endsection
