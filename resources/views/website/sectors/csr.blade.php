@extends('layouts.website')

@section('title', 'Corporate Social Responsibility (CSR)')

@section('content')

    <!-- Architectural Hero -->
    <section class="relative pt-64 pb-32 bg-slate-950 overflow-hidden border-b border-slate-900">
        <!-- Visual Backdrop -->
        <div class="absolute inset-0 opacity-20">
            <img src="{{ asset('images/sectors/csr.jpg') }}" class="w-full h-full object-cover grayscale">
        </div>
        <div class="absolute inset-0 bg-linear-to-b from-slate-950 via-slate-950/90 to-slate-950"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        
        <!-- Industrial Accents -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-rose-600 opacity-5 -skew-x-12 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-64 bg-rose-600 opacity-5 skew-x-12 -translate-x-1/2"></div>

        <div class="container relative z-10 text-center space-y-12">
            <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10">
                <span class="w-2 h-2 bg-rose-400 animate-pulse"></span>
                <span class="text-white text-[10px] font-black tracking-[0.4em] uppercase">Ethical Governance Protocol</span>
            </div>
            <h1 class="text-6xl md:text-[9rem] font-black text-white leading-[0.85] tracking-tighter uppercase">
                CSR <br>
                <span class="text-rose-600">Governance.</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium border-l-4 border-rose-600 pl-10 uppercase tracking-widest italic md:text-center mx-auto">
                Business for a Better World: Ethical commitment to society and environment.
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
                        <span class="subtitle">Social Impact Architecture</span>
                        <h2 class="text-5xl font-black uppercase tracking-tighter italic">What is <br><span class="text-rose-600">CSR?</span></h2>
                        <div class="accent-line bg-rose-600"></div>
                    </div>
                    
                    <div class="space-y-8 text-2xl text-slate-500 font-medium leading-relaxed italic border-l-4 border-slate-100 pl-10">
                        <p>
                            <strong class="text-slate-900 font-black uppercase tracking-tight">Corporate Social Responsibility (CSR)</strong> refers to a company's commitment to operate ethically and contribute positively toward society, environment, and economic development.
                        </p>
                        <p>
                            CSR enables organizations to integrate <strong>social and environmental concerns</strong> into their business operations and decision-making processes, balancing stakeholder interests with long-term sustainability.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute inset-0 bg-rose-600/10"></div>
                    <div class="relative h-full overflow-hidden border-l border-slate-200 shadow-3xl">
                        <img src="{{ asset('images/sectors/csr.jpg') }}" alt="Corporate Social Responsibility"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div class="absolute top-0 right-0 p-8">
                        <div class="bg-rose-600 text-white text-[10px] font-black px-6 py-2 uppercase tracking-[0.3em] shadow-2xl">
                            Ethical Mandate
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why CSR Matters -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl overflow-hidden">
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(225,29,72,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-rose-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Strategic Value
                        </div>
                        <h3 class="text-6xl font-black uppercase tracking-tighter italic text-rose-600">Why CSR <br><span class="text-white">Matters.</span></h3>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-rose-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            CSR has become a critical pillar of modern business strategy, helping companies build sustainable growth and create long-term stakeholder value.
                        </p>
                        <ul class="space-y-10 pt-8">
                            @foreach([
                                'Enhanced Corporate Reputation',
                                'Stronger Customer Trust & Loyalty',
                                'Improved Investor Confidence',
                                'Better Employee Engagement',
                                'Positive Social & Environmental Impact',
                                'Regulatory Compliance and Governance'
                            ] as $point)
                                <li class="flex items-start gap-10 group/item">
                                    <i class="fa-solid fa-check-circle text-rose-600 text-3xl group-hover/item:scale-125 transition-transform duration-500"></i>
                                    <span class="text-slate-400 text-xl font-black uppercase tracking-widest group-hover/item:text-white transition-colors duration-500 leading-tight">{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="relative overflow-hidden group">
                    <img src="{{ asset('images/sectors/csr.jpg') }}" alt="CSR Importance"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-110 group-hover:scale-100">
                    <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-all duration-700"></div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110">90%+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Fortune 500 CSR Reports</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">$30T+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">Global ESG Investment</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">2%</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Mandatory Spend</p>
                </div>
                <div class="p-16 bg-white text-center group hover:bg-slate-950 transition-all duration-700">
                    <h4 class="text-6xl font-black text-rose-600 mb-4 transition-all duration-500 tracking-tighter italic group-hover:scale-110 uppercase">₹25K Cr+</h4>
                    <p class="text-[10px] font-black text-slate-400 group-hover:text-white uppercase tracking-[0.4em]">India Annual Spend</p>
                </div>
            </div>

            <!-- Global vs India Landscape -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-12 group relative overflow-hidden">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(225,29,72,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <h3 class="text-5xl font-black uppercase tracking-tighter italic text-rose-600">Global Landscape</h3>
                        <ul class="space-y-8">
                            @foreach([
                                'Over 90% of Fortune 500 companies publish CSR reports',
                                'Global ESG & CSR investments exceed USD 30+ Trillion',
                                'CSR integrated into mainstream corporate governance'
                            ] as $item)
                                <li class="flex items-start gap-8 group/item">
                                    <div class="w-2 h-2 bg-rose-600 mt-4 group-hover/item:scale-150 transition-transform"></div>
                                    <span class="text-xl font-black uppercase tracking-widest text-slate-400 group-hover/item:text-white transition-colors leading-tight">{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="p-16 lg:p-24 bg-white text-slate-950 space-y-12 group relative overflow-hidden border-l border-slate-200">
                    <h3 class="text-5xl font-black uppercase tracking-tighter italic text-rose-600">CSR in India</h3>
                    <ul class="space-y-8">
                        @foreach([
                            '🏆 First country in the world to mandate CSR spending',
                            '📜 Companies Act, 2013 — 2% of average net profits',
                            '💰 Annual CSR expenditure exceeds ₹25,000+ Crore',
                            '🏢 Growing participation from corporates, PSUs, MNCs'
                        ] as $item)
                            <li class="flex items-start gap-8 group/item">
                                <div class="w-2 h-2 bg-rose-600 mt-4 group-hover/item:scale-150 transition-transform"></div>
                                <span class="text-xl font-black uppercase tracking-widest text-slate-700 group-hover/item:text-slate-950 transition-colors leading-tight">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Focus Areas -->
            <div class="space-y-24">
                <div class="text-center space-y-4">
                    <span class="text-rose-600 text-[10px] font-black uppercase tracking-[0.4em]">Pillars of Impact</span>
                    <h3 class="text-6xl font-black text-slate-950 uppercase tracking-tighter italic">Key Focus Areas</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                    <!-- Social -->
                    <div class="p-16 bg-white space-y-12 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-rose-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <div class="w-20 h-20 bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-500">
                            <i class="fa-solid fa-users text-3xl"></i>
                        </div>
                        <h4 class="text-2xl font-black text-slate-900 group-hover:text-white uppercase tracking-tighter italic transition-colors">Social Development</h4>
                        <ul class="space-y-4">
                            @foreach(['Education & Skill Dev', 'Women Empowerment', 'Rural Development', 'Healthcare & Sanitation'] as $point)
                                <li class="flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-400 transition-colors">
                                    <span class="w-1.5 h-1.5 bg-rose-600"></span>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Environmental -->
                    <div class="p-16 bg-white space-y-12 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-emerald-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <div class="w-20 h-20 bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-500">
                            <i class="fa-solid fa-leaf text-3xl"></i>
                        </div>
                        <h4 class="text-2xl font-black text-slate-900 group-hover:text-white uppercase tracking-tighter italic transition-colors">Environment</h4>
                        <ul class="space-y-4">
                            @foreach(['Renewable Energy', 'Tree Plantation', 'Waste Management', 'Water Conservation'] as $point)
                                <li class="flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-400 transition-colors">
                                    <span class="w-1.5 h-1.5 bg-emerald-600"></span>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Economic -->
                    <div class="p-16 bg-white space-y-12 group hover:bg-slate-950 transition-all duration-700 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-1 h-full bg-amber-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                        <div class="w-20 h-20 bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-500">
                            <i class="fa-solid fa-chart-line text-3xl"></i>
                        </div>
                        <h4 class="text-2xl font-black text-slate-900 group-hover:text-white uppercase tracking-tighter italic transition-colors">Economic</h4>
                        <ul class="space-y-4">
                            @foreach(['Entrepreneurship Dev', 'Livelihood Enhancement', 'MSME Support Programs'] as $point)
                                <li class="flex items-center gap-4 text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 group-hover:text-slate-400 transition-colors">
                                    <span class="w-1.5 h-1.5 bg-amber-600"></span>
                                    {{ $point }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Trends + Opportunities -->
            <div class="grid lg:grid-cols-2 gap-px bg-slate-200 border border-slate-200 shadow-3xl">
                <div class="p-16 lg:p-24 bg-white space-y-16">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-slate-950 pl-10 tracking-tighter">Emerging Trends</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-slate-100 border border-slate-100">
                        @foreach([
                            ['icon' => 'landmark', 'label' => 'ESG-Integrated CSR'],
                            ['icon' => 'laptop-code', 'label' => 'Tech Driven Impact'],
                            ['icon' => 'temperature-high', 'label' => 'Climate Focused CSR'],
                            ['icon' => 'bullseye', 'label' => 'Linked to SDGs'],
                            ['icon' => 'handshake', 'label' => 'Strategic Partnerships'],
                            ['icon' => 'users-gear', 'label' => 'Skill-Based Volunteering'],
                        ] as $trend)
                            <div class="p-12 bg-white group/item hover:bg-slate-950 transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-1 h-full bg-rose-600 scale-y-0 group-hover:scale-y-100 transition-transform origin-top duration-500"></div>
                                <div class="w-16 h-16 mb-8 bg-slate-50 border border-slate-100 flex items-center justify-center text-rose-600 group-hover/item:bg-rose-600 group-hover/item:text-white transition-all shadow-sm">
                                    <i class="fa-solid fa-{{ $trend['icon'] }} text-2xl"></i>
                                </div>
                                <span class="text-[12px] font-black uppercase text-slate-900 group-hover/item:text-white tracking-[0.2em] leading-tight transition-colors">{{ $trend['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-50 space-y-16 border-l border-slate-200">
                    <h3 class="text-4xl font-black uppercase text-slate-950 italic border-l-8 border-rose-600 pl-10 tracking-tighter">CSR Opportunities</h3>
                    <div class="space-y-12">
                        @foreach([
                            ['icon' => 'award', 'label' => 'Brand Positioning & Reputation'],
                            ['icon' => 'leaf', 'label' => 'Sustainable Business Leadership'],
                            ['icon' => 'users', 'label' => 'Community Engagement'],
                            ['icon' => 'chart-line', 'label' => 'ESG Ratings Improvement'],
                            ['icon' => 'handshake', 'label' => 'Stakeholder Trust Enhancement'],
                        ] as $opp)
                        <div class="flex items-center gap-10 group/opp">
                            <div class="w-16 h-16 border border-slate-200 flex items-center justify-center text-rose-600 group-hover/opp:bg-rose-600 group-hover/opp:text-white transition-all duration-500">
                                <i class="fa-solid fa-{{ $opp['icon'] }} text-2xl"></i>
                            </div>
                            <span class="text-xl font-black uppercase text-slate-700 tracking-[0.15em] group-hover/opp:text-slate-950 transition-colors leading-tight italic">{{ $opp['label'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Future of CSR -->
            <div class="grid lg:grid-cols-2 gap-32 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-rose-600/10"></div>
                    <div class="relative overflow-hidden border border-slate-200 shadow-3xl h-[500px]">
                        <img src="{{ asset('images/sectors/csr.jpg') }}" alt="CSR Future"
                            class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                </div>

                <div class="p-16 lg:p-24 bg-slate-950 text-white space-y-16 relative overflow-hidden group shadow-3xl">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(225,29,72,0.05),transparent)]"></div>
                    <div class="relative z-10 space-y-12">
                        <div class="inline-flex items-center gap-4 px-6 py-2 bg-white/5 border border-white/10 text-rose-400 text-[10px] font-black uppercase tracking-[0.4em]">
                            Future Evolution
                        </div>
                        <h3 class="text-6xl font-black uppercase tracking-tighter italic text-rose-600">The Future <br><span class="text-white">of CSR.</span></h3>
                        <p class="text-2xl text-slate-400 font-medium italic border-l-8 border-rose-600/30 pl-10 leading-relaxed uppercase tracking-tighter">
                            CSR is evolving from traditional philanthropy into a strategic business function aligned with sustainability and long-term value creation.
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-px bg-white/5 pt-12">
                             @foreach([
                                ['icon' => 'chess', 'label' => 'Core Strategy'],
                                ['icon' => 'link', 'label' => 'Supply Chain Ops'],
                                ['icon' => 'lightbulb', 'label' => 'Innovation & R&D'],
                                ['icon' => 'landmark', 'label' => 'Ethical Governance'],
                             ] as $fut)
                                <div class="p-8 bg-slate-950 border border-white/5 flex items-center gap-8 group/item hover:bg-rose-600 transition-all duration-500">
                                    <i class="fa-solid fa-{{ $fut['icon'] }} text-rose-600 text-2xl group-hover/item:text-slate-950 transition-colors"></i>
                                    <span class="text-[12px] font-black uppercase text-slate-300 group-hover/item:text-slate-950 tracking-[0.2em] transition-colors leading-tight">{{ $fut['label'] }}</span>
                                </div>
                             @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusion CTA -->
            <div class="relative p-24 lg:p-32 bg-slate-950 overflow-hidden text-center shadow-3xl group">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom,rgba(225,29,72,0.2),transparent)]"></div>
                <div class="relative z-10 space-y-16">
                    <h3 class="text-5xl md:text-[8rem] font-black text-white uppercase tracking-tighter leading-[0.85]">
                        Crucial <br><span class="text-rose-600">for Growth.</span>
                    </h3>
                    <p class="text-2xl text-slate-400 max-w-4xl mx-auto leading-relaxed font-medium italic border-l-4 border-rose-600 pl-10 md:text-center mx-auto uppercase tracking-tighter">
                        CSR is no longer optional — it is a strategic imperative for responsible growth, stronger stakeholder relationships, and building a sustainable future.
                    </p>
                    <div class="flex justify-center">
                        <a href="{{ route('join.index') }}" 
                            class="btn-sharp px-16 group !border-rose-600/30 hover:!bg-rose-600">
                            Register for CSR Support 
                            <i class="fa-solid fa-arrow-right-long ml-6 group-hover:translate-x-4 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
